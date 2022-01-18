<?php

namespace App\Http\Controllers\Dashboard\WhatsNews;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use App\Model\WhatsNews;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WhatsNewsController extends Controller {
    /* Show All News */
    public function index() {
        $WhatsNews = WhatsNews::orderBy('created_at', 'asc')->paginate(20);
        return view('admin.whats-news.index', compact('WhatsNews'));
    }

    /* Add New Update */
    public function create() {
        return view('admin.whats-news.create');
    }

    /* Store News */
    public function store(Request $request) {
        $user = auth()->user();
        $DataRequested = $request->all();

        $DataRequested['uid'] = $user->id;

        /* Save Thumbnail */
        if ($thumbnail_path = $request->file('thumbnail')) {
            $attachments_id = array();
            if ($path = $thumbnail_path->store('news/thumbnail/full')) {
                $Attachments = new Attachments();
                $Attachments->uid = $user->id;
                $Attachments->orgname = $thumbnail_path->getClientOriginalName();
                $Attachments->path = pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'];
                $Attachments->type = $thumbnail_path->extension();
                $Attachments->directory = 'news/thumbnail/full';
                $img = Image::make('storage/app/news/thumbnail/full/' . $Attachments->path);

                // save the file 170px
                $img->backup();
                $img->resize(170, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                if (!file_exists('storage/app/news/thumbnail/170')) {
                    mkdir('storage/app/news/thumbnail/170', 0755, true);
                }
                $img->save('storage/app/news/thumbnail/170/' . pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'], 100);

                if ($Attachments->save()) {
                    array_push($attachments_id, $Attachments->id);
                } else {
                    return redirect()->back()->with('notification', [
                        'status' => 'danger',
                        'message' => 'Attachments could not be uploaded!',
                    ]);
                }
            }
            $DataRequested['thumbnail'] = end($attachments_id);
        }

        if ($WhatsNews = WhatsNews::create($DataRequested)) {
            return redirect('/dashboard/whats-news/' . $WhatsNews->id . '/' . 'edit')->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        } else {
            return back()->with('notification', [
                'class' => 'alert',
                'message' => 'Data storage was encountered.'
            ]);
        }
    }

    /* Update Page */
    public function edit($id){
        $WhatsNews = WhatsNews::find($id);

        return view('admin.whats-news.edit', compact('WhatsNews'));
    }

    /* Update Process */
    public function update(Request $request, $id){
        $user = auth()->user();
        $WhatsNews = WhatsNews::find($id);
        $DataRequested = $request->all();

        /* Save Thumbnail */
        if ($thumbnail_path = $request->file('thumbnail')) {
            $attachments_id = array();
            if ($path = $thumbnail_path->store('news/thumbnail/full')) {
                $Attachments = new Attachments();
                $Attachments->uid = $user->id;
                $Attachments->orgname = $thumbnail_path->getClientOriginalName();
                $Attachments->path = pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'];
                $Attachments->type = $thumbnail_path->extension();
                $Attachments->directory = 'news/thumbnail/full';
                $img = Image::make('storage/app/news/thumbnail/full/' . $Attachments->path);

                // save the file 170px
                $img->backup();
                $img->resize(170, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                if (!file_exists('storage/app/news/thumbnail/170')) {
                    mkdir('storage/app/news/thumbnail/170', 0755, true);
                }
                $img->save('storage/app/news/thumbnail/170/' . pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'], 100);

                if ($Attachments->save()) {
                    array_push($attachments_id, $Attachments->id);
                } else {
                    return redirect()->back()->with('notification', [
                        'status' => 'danger',
                        'message' => 'Attachments could not be uploaded!',
                    ]);
                }
            }
            $DataRequested['thumbnail'] = end($attachments_id);
        }
        if ($WhatsNews->update($DataRequested)) {
            return redirect()->back()->with('notification', [
                'class' => 'success',
                'message' => 'News Updated.'
            ]);
        } else {
            return redirect('dashboard/whats-news')->with('notification', [
                'class' => 'danger',
                'message' => 'Error.'
            ]);
        }
    }

    /* Destroy */
    public function destroy(Request $request) {
        foreach ($request->delete_item as $key => $item) {
            WhatsNews::where('id', $key)->delete();
        }

        return redirect('/dashboard/whats-news')->with('notification', [
            'class' => 'success',
            'message' => 'Item is Delete.'
        ]);
    }
}
