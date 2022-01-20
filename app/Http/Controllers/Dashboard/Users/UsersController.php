<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UsersRequest;
<<<<<<< HEAD
use App\Model\Connect;
use App\Model\Design;
=======
use App\Model\Attachments;
use App\Model\Connect;
use App\Model\Design;
use App\Model\Invoice;
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
use App\Model\Messages;
use App\Model\Projects;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
            $users = User::orderBy('id', 'desc')->paginate(20);
            $users->sortByDesc("id");
            return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(UsersRequest $userRequest) {
        $userRequest->validate([
            'first_name' => 'required',
            'last_name' => 'required',
<<<<<<< HEAD
            'email' => 'required|email|unique',
            'phone' => 'required|unique',
=======
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
            'address' => 'required',
            'postcode' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        function generateRandomString($length = 5) {
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $users = new User;
<<<<<<< HEAD
        $users->name = $userRequest->name;
=======
        $users->first_name = $userRequest->first_name;
        $users->last_name = $userRequest->last_name;
        $users->address = $userRequest->address;
        $users->postcode = $userRequest->postcode;
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
        $users->email = $userRequest->email;
        $users->phone = $userRequest->phone;
        $users->password = bcrypt($userRequest->password);
        if ($userRequest->role == 'super_admin') {
            $users->role = 'user';
        } else {
            $users->role = $userRequest->role;
        }
        $users->save();

        return redirect('/dashboard/users')->with('notification', [
            'class' => 'success',
            'message' => 'User created'
        ]);
    }

    public function edit($id) {
        if ($id == auth()->user()->id || Gate::allows('isAdmin')) {
            $users = User::find($id);
            return view('admin.users.edit', compact('users'))->withInfo('User edited');
        } else {
            return redirect('/dashboard/no-permissions');
        }
    }

    public function update(Request $request, $id) {
        if ($id == auth()->user()->id || Gate::allows('isAdmin')) {

            $users = User::find($id);

            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users,email,' . $users->id,
                'address' => 'required',
                'postcode' => 'required',
                'phone' => 'required|unique:users,phone,' . $users->id,
                'role' => 'required',
            ], [], [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'address' => 'Address',
                'postcode' => 'Post Code',
                'phone' => 'Phone',
                'email' => 'Email',
                'password' => 'Password',
                'role' => 'Role',
            ]);


<<<<<<< HEAD
            $users->name = $request->name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->role = $request->role;
=======
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->address = $request->address;
            $users->postcode = $request->postcode;
            $users->email = $request->email;
            $users->phone = $request->phone;
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
            if ($request->role == 'super_admin') {
                $users->role = 'user';
            } else {
                $users->role = $request->role;
            }

            if (empty($request->password_change)) {
            } else {
                $users->password = bcrypt($request->password_change);
            }
            $users->update($request->all());

            return back()->with('notification', [
                'class' => 'success',
                'message' => 'User Updated.'
            ]);
        } else {
            return redirect('/dashboard/no-permissions');
        }
    }

    public function destroy(Request $request) {
            foreach ($request->delete_item as $key => $item) {
                User::where('id', $key)->delete();
                Messages::where('uid', $key)->delete();
                Connect::where('uid', $key)->delete();
                Design::where('uid', $key)->delete();
                Projects::where('uid', $key)->delete();
<<<<<<< HEAD
=======
                Invoice::where('uid', $key)->delete();
                Attachments::where('uid', $key)->delete();
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
            }

            return redirect('/dashboard/users')->with('notification', [
                'class' => 'success',
                'message' => 'Items deleted.'
            ]);
    }

    public function AuthRouteAPI(Request $request) {
        return $request->user();
    }
}
