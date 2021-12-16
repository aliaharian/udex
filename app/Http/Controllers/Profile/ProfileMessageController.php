<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Model\Messages;
use Illuminate\Http\Request;

class ProfileMessageController extends Controller {
    public function messages() {
        $user = auth()->user();
        $Messages = Messages::where('uid', $user->id)->orderBy('created_at', 'asc')->get()->all();
        return view('site.profile.message.messages', compact('Messages'));
    }

    public function store(Request $request) {
        $user = auth()->user();
        $HasMessage = Messages::where('uid', $user->id)->get();

        if (count($HasMessage) == 0) {
            $Data['uid'] = $user->id;
            $messages = array(
                [
                    'message' => $request->message,
                    'date' => time(),
                    'name' => $user->first_name .' '. $user->last_name,
                    'role' => $user->role,

                ]
            );
            $Data['messages'] = json_encode($messages);
            if (Messages::create($Data)) {
                return redirect('profile/messages')->with('notification', [
                    'class' => 'success',
                    'message' => 'Data successfully recorded.'
                ]);
            } else {
                return redirect()->back()->with('notification', [
                    'class' => 'alert',
                    'message' => 'Data storage was encountered.'
                ]);
            }
        } else {
            $CurrentMessages = Messages::find($HasMessage[0]['id']);
            $AllMessage = json_decode($CurrentMessages->messages);

            $NewMessages = [
                'date' => time(),
                'name' => $user->name,
                'role' => $user->role,
                'message' => $request->message,
            ];

            array_push($AllMessage, $NewMessages);
            $MessageData['messages'] = json_encode($AllMessage);
            $MessageData['updated_at'] = $request->updated_at;

            if ($CurrentMessages->update($MessageData)) {
                return redirect('profile/messages')->with('notification', [
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
}
