<?php

namespace App\Http\Controllers\Dashboard\Messages;

use App\Http\Controllers\Controller;
use App\Model\Architectionary;
use App\Model\Messages;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class MessagesController extends Controller {
    public function index() {
        $Messages = Messages::with(array(
            'user_tbl' => function ($query) {
                $query->select('id', 'first_name', 'last_name');
            }
        ))->orderBy('updated_at', 'asc')->paginate(20);

        return view('admin.messages.index', compact('Messages'));
    }

    /* Edit Job */
    public function edit($id) {
        $this->middleware('can:isAuthor');
        $Messages = Messages::find($id);

        return view('admin.messages.edit', compact('Messages'));
    }

    /* Update Jobs */
    public function update(Request $request, $id) {
        $user = auth()->user();
        $CurrentMessages = Messages::find($id);
        $AllMessage = json_decode($CurrentMessages->messages);

        $NewMessages = [
            'date' => time(),
            'name' => $user->first_name .' '. $user->last_name,
            'role' => $user->role,
            'message' => $request->message,
        ];

        array_push($AllMessage, $NewMessages);
        $MessageData['messages'] = json_encode($AllMessage);
        $MessageData['updated_at'] = $request->updated_at;

        if ($CurrentMessages->update($MessageData)) {
            return back()->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        } else {
            return redirect()->back()->with('notification', [
                'class' => 'alert',
                'message' => 'Data storage was encountered.'
            ]);
        }
    }

}
