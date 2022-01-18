<?php

namespace App\Http\Controllers\Connect;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use App\Model\Connect;
use App\Model\ConnectOptions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class ConnectController extends Controller {
    public function index() {
        $Connects = Connect::orderBy('id', 'desc')->paginate(20);

        return view('admin.connect.index', compact('Connects'));
    }

    public function edit($id) {
        $Connect = Connect::find($id);

        return view('admin.connect.edit', compact('Connect'));
    }

    public function create() {
        return view('site.pages.connect.connect');
    }

    public function store(Request $request) {
        if (!auth()->check()) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'address' => 'required',
                'postcode' => 'required',
                'password' => 'required|confirmed|min:8',
            ], [], [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'address' => 'Address',
                'postcode' => 'Post Code',
                'phone' => 'Phone',
                'email' => 'Email',
                'password' => 'Password',
            ]);
            $users = new User;
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->address = $request->address;
            $users->postcode = $request->postcode;
            $users->password = bcrypt($request->password);
            $users->role = 'user';
            $users->save();
            $user_id = $users->id;

            Auth::loginUsingId($user_id);
        } else {
            $user_id = auth()->user()->id;
        }

        $Connect = new Connect;
        $Connect->uid = $user_id;

        function createRandomCode() {
            $chars = "abcdefghijkmnopqrstuvwxyz023456789";
            srand((double)microtime() * 1000000);
            $i = 1;
            $pass = '';

            while ($i <= 8) {
                $num = rand() % 33;
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                $i++;
            }

            return $pass;

        }

        $ConnectOption = ConnectOptions::where('id', '!=', null)->first();

        if ($request->square_metres_custom == 0 || $request->square_metres_custom == null) {
            $SQM = $request->square_metres;
        } else {
            $SQM = $request->square_metres_custom;
        }


        $ConnectMeta = [
            'address' => $request->address,
            'postcode' => $request->postcode,
            'what_type_of_property_is_this' => $request->what_type_of_property_is_this,
            'square_metres' => $SQM,
            'values' => json_decode($ConnectOption->connect_meta, true)[explode(' ', $request->what_type_of_property_is_this)[0]],
        ];
        $Connect->connect_meta = json_encode($ConnectMeta);
        $Connect->slug = createRandomCode();
        $Connect->type = 'design-quote';
        $Connect->status = 'Requested';

        /* Save Data */
        if ($Connect->save()) {
            return redirect('project-cost-estimates' . '/' . $Connect->slug)->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        }
    }

    public function options() {
        $ConnectOption = ConnectOptions::where('id', '!=', null)->first();

        $Data = [
            'ConnectOption',
        ];

        return view('admin.connect.options', compact($Data));
    }

    public function options_update(Request $request) {
        $ConnectOptionsRequest = $request->all();
        $ConnectOption = ConnectOptions::where('id', '!=', null)->first();

        $ConnectOptionsData['connect_meta'] = json_encode($ConnectOptionsRequest['part']);


        /* Update Design Options */
        if ($ConnectOption->update($ConnectOptionsData)) {
            return back()->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        }

    }

    /* Show Connect for Guest */
    public function show_guest($slug) {
        $Connect = Connect::where('slug', $slug)->first();

        return view('site.pages.connect.show', compact('Connect'));
    }

    /* Show Connect on profile */
    public function profile_connect_list() {
        $Connects_Design_Quote = Connect::where('uid', auth()->user()->id)->where('type', 'design-quote')->get();
        $Connects_Service = Connect::where('uid', auth()->user()->id)->where('type', 'connect-service')->get();

        $Data = [
            'Connects_Design_Quote',
            'Connects_Service'
        ];

        return view('site.profile.connect.connects', compact($Data));

    }

    /* Connect Service */
    public function connect_service() {
        return view('site.pages.connect.connect-service');
    }

    /* Connect Service */
    public function connect_service_store(Request $request) {
        if (!auth()->check()) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'address' => 'required',
                'postcode' => 'required',
                'password' => 'required|confirmed|min:8',
            ], [], [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'address' => 'Address',
                'postcode' => 'Post Code',
                'phone' => 'Phone',
                'email' => 'Email',
                'password' => 'Password',
            ]);
            $users = new User;
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->address = $request->address;
            $users->postcode = $request->postcode;
            $users->password = bcrypt($request->password);
            $users->role = 'user';
            $users->save();
            $user_id = $users->id;

            Auth::loginUsingId($user_id);
        } else {
            $user_id = auth()->user()->id;
        }

        $Connect = new Connect;
        $Connect->uid = $user_id;

        function createRandomCode() {
            $chars = "abcdefghijkmnopqrstuvwxyz023456789";
            srand((double)microtime() * 1000000);
            $i = 1;
            $pass = '';

            while ($i <= 8) {
                $num = rand() % 33;
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                $i++;
            }

            return $pass;

        }

        $ConnectMeta = [
            'service_are_you_looking' => $request->service_are_you_looking,
            'describe_the_requirements_of_your_project' => $request->describe_the_requirements_of_your_project,
            'address' => $request->address,
            'postcode' => $request->postcode,
        ];

        /* Upload File */
        if ($connect_file_path = $request->file('upload_your_architectural_drawings')) {
            $attachments_id = array();
            if ($path = $connect_file_path->store('connect-service/file')) {
                $Attachments = new Attachments();
                $Attachments->uid = $user_id;
                $Attachments->orgname = $connect_file_path->getClientOriginalName();
                $Attachments->path = pathinfo($path)['filename'] . '.' . pathinfo($path)['extension'];
                $Attachments->type = $connect_file_path->extension();
                $Attachments->directory = 'connect-service/file';

                if ($Attachments->save()) {
                    array_push($attachments_id, $Attachments->id);
                } else {
                    return redirect()->back()->with('notification', [
                        'status' => 'danger',
                        'message' => 'Attachments could not be uploaded!',
                    ]);
                }
            }

            array_push($ConnectMeta, $attachments_id);
        }

        $Connect->connect_meta = json_encode($ConnectMeta);
        $Connect->slug = createRandomCode();
        $Connect->type = 'connect-service';

        /* Save Data */
        if ($Connect->save()) {
            return redirect('profile/connect')->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        }
    }

    /* Connect Excel Upload */
    public function ConnectExcelUpdate(Request $request) {
        $file = $_FILES["tmp_name"]["tmp_name"];
        $file_open = fopen($file, "r");

        $ExcelRows = [];
        $num = -1;
        while (($line = fgetcsv($file_open)) !== FALSE) {
            $num += 1;
            array_push($ExcelRows, $line);
        }
        fclose($file_open);

        $ConnectImportData = [];
        for ($row = 1; $row <= $num; $row++) {
            if ($ExcelRows[$row][2] == 'individual') {
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['small']['avg_final'] = $ExcelRows[$row][7];
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['small']['range_avg'] = $ExcelRows[$row][9];
            } elseif ($ExcelRows[$row][2] == 'Small/Medium') {
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['medium']['avg_final'] = $ExcelRows[$row][7];
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['medium']['avg_final'] = $ExcelRows[$row][7];
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['medium']['range_avg'] = $ExcelRows[$row][9];
            } elseif ($ExcelRows[$row][2] == 'Large Company') {
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['large']['avg_final'] = $ExcelRows[$row][7];
                $ConnectImportData[str_replace(' ', '_', strtolower(rtrim($ExcelRows[$row][0])))]['large']['range_avg'] = $ExcelRows[$row][9];
            }
        }


        $ConnectOption = ConnectOptions::where('id', '!=', null)->first();

        $ConnectOptionData['connect_meta'] = json_encode($ConnectImportData);

        $ConnectOption->update($ConnectOptionData);

        return back()->with('notification', [
            'class' => 'success',
            'message' => 'Data successfully imported.'
        ]);
    }
}
