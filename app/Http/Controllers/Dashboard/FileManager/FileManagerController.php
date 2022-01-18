<?php

namespace App\Http\Controllers\Dashboard\FileManager;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use App\User;
use Illuminate\Http\Request;

class FileManagerController extends Controller {
    /* Show All Files */
    public function index() {
        $Attachments = Attachments::orderBy('created_at', 'desc')->paginate(20)->onEachSide(2);

        return view('admin.file-manager.index', compact('Attachments'));
    }

    /* Upl;oad Attachments */
    public function create() {
        $Users = User::get()->all();

        return view('admin.file-manager.create', compact('Users'));
    }

    /* Upload Mew File */
    public function store(Request $request){
        $user = auth()->user();

        /* Save Thumbnail */
        if ($thumbnail_path = $request->file('file')) {
            $attachments_id = array();
            if ($path = $thumbnail_path->store('uploads')) {
                $Attachments = new Attachments();
                $Attachments->uid = $user->id;
                $Attachments->orgname = $thumbnail_path->getClientOriginalName();
                $Attachments->path = pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'];
                $Attachments->type = $thumbnail_path->extension();
                $Attachments->for_uid = $request->for_user;
                $Attachments->directory = 'uploads';

                if ($Attachments->save()) {
                    return redirect()->back()->with('notification', [
                        'class' => 'success',
                        'message' => 'File is Uploaded.'
                    ]);
                } else {
                    return redirect()->back()->with('notification', [
                        'status' => 'danger',
                        'message' => 'Attachments could not be uploaded!',
                    ]);
                }
            }
        }
    }
}
