<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use App\Model\Projects;
use Illuminate\Http\Request;

class ProfileProjectsController extends Controller {
    public function show_list() {
        $UserID = Auth()->id();
        $UserHaveProject = Projects::where('uid', $UserID)->count();
        return view('site.profile.project.projects', compact('UserHaveProject'));
    }

    public function create() {
        $User = Auth()->user();
        $CurrentProject = Projects::where('uid', $User->id)->first();
        if (isset($CurrentProject)) {
            $CurrentProject = json_decode($CurrentProject->project_meta, true);

            if (isset($CurrentProject['inspiration'])) {
                $ProjectFile = Attachments::find($CurrentProject['inspiration']);
                $CurrentProject['inspiration'] = $ProjectFile->path;
            }
        }

        return view('site.profile.project.create', compact('CurrentProject'));
    }

    public function store(Request $request) {
        $User = Auth()->user();
        $UserHasProject = Projects::where('uid', $User->id)->count();
        $Project = Projects::where('uid', $User->id)->first();

        if (!isset($Project)) {
            $Project = new Projects;
        }

        $Project->uid = $User->id;
        $data = end($request->request);
        array_shift($data);

<<<<<<< HEAD
=======

        $response = [
            'status' => 'success',
            'message' => 'Data successfully recorded.',
        ];

>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
        /* Upload File */
        if ($project_file_path = $request->file('inspiration')) {
            $attachments_id = array();
            if ($path = $project_file_path->store('projects/file')) {
                $Attachments = new Attachments();
                $Attachments->uid = $User->id;
                $Attachments->orgname = $project_file_path->getClientOriginalName();
                $Attachments->path = pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'];
                $Attachments->type = $project_file_path->extension();
<<<<<<< HEAD
                $Attachments->directory = 'projects/file';
=======
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969

                if ($Attachments->save()) {
                    array_push($attachments_id, $Attachments->id);
                } else {
                    return redirect()->back()->with('notification', [
                        'status' => 'danger',
<<<<<<< HEAD
                        'message' => 'Attachments could not be uploaded!',
=======
                        'message' => 'Files is Uploaded!',
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                    ]);
                }
            }
            (array)$data['inspiration'] = end($attachments_id);
<<<<<<< HEAD
=======
            $response['file'] = 'File is Uploaded.';
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
        } else {
            if ($UserHasProject > 0) {
                $CurrentProject = json_decode($Project->project_meta, true);
                (array)$data['inspiration'] = $CurrentProject['inspiration'];
            }
        }

        $Project->project_meta = json_encode((array)$data);


        if ($UserHasProject == 0) {
<<<<<<< HEAD
            if ($Project->save()) {
                return redirect('profile/project')->with('notification', [
                    'class' => 'success',
                    'message' => 'Your Project is Created'
                ]);
            }
        } else {
            if ($Project->update()) {
                return back()->with('notification', [
                    'class' => 'success',
                    'message' => 'Data successfully recorded.'
                ]);
            }
        }
=======
            $Project->save();
        } else {
            $Project->update();
        }

        return response()->json($response);
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
    }
}
