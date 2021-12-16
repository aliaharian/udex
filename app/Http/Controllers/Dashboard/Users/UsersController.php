<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UsersRequest;
use App\Model\Connect;
use App\Model\Design;
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
            'email' => 'required|email|unique',
            'phone' => 'required|unique',
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
        $users->name = $userRequest->name;
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


            $users->name = $request->name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->role = $request->role;
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
