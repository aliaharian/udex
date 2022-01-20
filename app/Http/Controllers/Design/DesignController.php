<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;
use App\Model\Design;
use App\Model\DesignOptions;
use App\Model\Invoice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller {
    /* Show All Design Request */
    public function index() {
        $Design = Design::orderBy('id', 'desc')->paginate(20);
        return view('admin.design.index', compact('Design'));
    }

    /* Show Create Page */
    public function create() {
        return view('site.pages.design.design');
    }

<<<<<<< HEAD
    /* Edit Design */
    public function edit($id) {
        $Design = Design::find($id);
        $Invoice = Invoice::where('order_id', $Design->id)->orderBy('payment_step', 'asc')->get()->all();
        $Data = [
            'Design',
            'Invoice'
        ];

        return view('admin.design.edit', compact($Data));
    }

=======
    /* Create Page for Admin */
    public function create_admin() {
        $Users = User::get()->all();

        $Data = [
            'Users'
        ];

        return view('admin.design.create', compact($Data));
    }

    /* Create Design Quote */
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
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
<<<<<<< HEAD
=======

        if (isset($request->for_user)) {
            $user_id = $request->for_user;
        }

>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
        $DesignOption = DesignOptions::where('id', '!=', null)->first();
        $Invoice = new Invoice;
        $Design = new Design;
        $Design->uid = $user_id;
        $DesignOptionsType = $request->what_type_of_property_is_this . '_meta';

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

        $DesignMeta = [
            'address' => $request->address,
            'postcode' => $request->postcode,
            'what_type_of_property_is_this' => $request->what_type_of_property_is_this,
            'which_specific_parts_of_the_property' => $request->which_specific_parts_of_the_property,
            'how_many_bedrooms_does_this_property_have' => $request->how_many_bedrooms_does_this_property_have,
            'Would_you_like_to_add_Building_Regulation_drawings' => $request->Would_you_like_to_add_Building_Regulation_drawings,
            'ProposedDesign' => json_decode(json_decode($DesignOption->$DesignOptionsType, true)['ProposedDesign'], true)[$request->which_specific_parts_of_the_property],
            'PlanningSupport' => json_decode(json_decode($DesignOption->$DesignOptionsType, true)['PlanningSupport'], true)[$request->which_specific_parts_of_the_property],
            'ExistingDrawings' => json_decode(json_decode($DesignOption->$DesignOptionsType, true)['ExistingDrawings'], true)[$request->which_specific_parts_of_the_property],
            'BuildingRegulations' => json_decode(json_decode($DesignOption->$DesignOptionsType, true)['BuildingRegulations'], true)[$request->which_specific_parts_of_the_property],
            'OnSiteMeasuredSurvey' => json_decode(json_decode($DesignOption->$DesignOptionsType, true)['OnSiteMeasuredSurvey'], true)[$request->which_specific_parts_of_the_property],
        ];
        $Design->design_meta = json_encode($DesignMeta);
        $Design->slug = createRandomCode();

        /* Save Data */
        if ($Design->save()) {

            $TotalPrice = json_decode($Design->design_meta, true)['ProposedDesign'] + json_decode($Design->design_meta, true)['PlanningSupport'] + json_decode($Design->design_meta, true)['ExistingDrawings'] + json_decode($Design->design_meta, true)['OnSiteMeasuredSurvey'];
            if (json_decode($Design->design_meta, true)['Would_you_like_to_add_Building_Regulation_drawings'] != 'planning_only') {
                $TotalPrice += json_decode($Design->design_meta, true)['BuildingRegulations'];
            }

            for ($i = 1; $i <= 2; $i++) {
                $Invoice = new Invoice;
                $Invoice->uid = $user_id;
                $Invoice->title = 'Design Quote';
                $Invoice->product_type = 'design';
                $Invoice->order_id = $Design->id;
                $Invoice->status = 'unpaid';
                $Invoice->payment_step = $i;
                if ($i == 1) {
                    $Invoice->amount = round($TotalPrice / 3, 2);
                } else {
                    $Invoice->amount = round($TotalPrice / 3, 2) + round($TotalPrice / 3, 2);
                }
                $Invoice->save();
            }

            //            return redirect('design-quote' . '/' . $Design->slug)->with('notification', [
            //                'class' => 'success',
            //                'message' => 'Data successfully recorded.'
            //            ]);


<<<<<<< HEAD
            return redirect('profile/design' . '/' . $Design->id)->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
=======
            if (isset($request->for_user)) {
                return redirect('dashboard/design/edit' . '/' . $Design->id)->with('notification', [
                    'class' => 'success',
                    'message' => 'Data successfully recorded.'
                ]);
            } else {
                return redirect('profile/design' . '/' . $Design->id)->with('notification', [
                    'class' => 'success',
                    'message' => 'Data successfully recorded.'
                ]);
            }
        }
    }

    /* Edit Design */
    public function edit($id) {
        $Design = Design::find($id);
        $Invoice = Invoice::where('order_id', $Design->id)->orderBy('payment_step', 'asc')->get()->all();
        $Data = [
            'Design',
            'Invoice'
        ];

        return view('admin.design.edit', compact($Data));
    }

    /* Design Update Qoute */
    public function update(Request $request, $id) {
        $Design = Design::find($id);
        $DesignData = $request->all();

        $OldDesignMetaData = json_decode($Design->design_meta, true);

        $OldDesignMetaData['InitialPhoneConsultation'] = $DesignData['InitialPhoneConsultation'];
        $OldDesignMetaData['OnSiteMeasuredSurvey'] = $DesignData['OnSiteMeasuredSurvey'];
        $OldDesignMetaData['ExistingDrawings'] = $DesignData['ExistingDrawings'];
        $OldDesignMetaData['ProposedDesign'] = $DesignData['ProposedDesign'];
        $OldDesignMetaData['PlanningSupport'] = $DesignData['PlanningSupport'];
        $OldDesignMetaData['BuildingRegulations'] = $DesignData['BuildingRegulations'];
        $OldDesignMetaData['PhotoRealistic3Ds'] = $DesignData['PhotoRealistic3Ds'];
        $OldDesignMetaData['Connect'] = $DesignData['Connect'];

        $Design->design_meta = json_encode($OldDesignMetaData);

        if ($Design->update()) {
            return redirect()->back()->with('notification', [
                'class' => 'success',
                'message' => 'Design Qoute Updated.'
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
            ]);
        }
    }

    /* Show All Design Request */
    public function profile_design_list() {
<<<<<<< HEAD
        $Designs = Design::where('uid', auth()->user()->id)->get();
=======
        $Designs = Design::orderBy('created_at', 'desc')->where('uid', auth()->user()->id)->get();
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969

        return view('site.profile.design.designs', compact('Designs'));
    }

    /* Show Design on profile */
    public function show($id) {
        $Design = Design::find($id);
        $Invoice = Invoice::where('order_id', $Design->id)->where('status', 'unpaid')->where('payment_step', 1)->orderBy('payment_step', 'asc')->first();

        $Data = [
            'Design',
            'Invoice'
        ];

        return view('site.profile.design.show', compact($Data));
    }

    /* Show Design for Guest */
    public function show_guest($slug) {
        $Design = Design::where('slug', $slug)->first();

        return view('site.pages.design.show', compact('Design'));
    }
<<<<<<< HEAD
=======

    /* Manage Payments */
    public function PaymentManage($id) {
        $Design = Design::find($id);

        $Invoice = Invoice::where('order_id', $Design->id)->orderBy('payment_step', 'asc')->get()->all();
        $TotalAmount = Invoice::where('order_id', $Design->id)->sum('amount');
        $RemainingAmount = Invoice::where('order_id', $Design->id)->where('status', 'unpaid')->sum('amount');

        $Data = [
            'Design',
            'Invoice',
            'TotalAmount',
            'RemainingAmount',
        ];

        return view('admin.design.payment-manage', compact($Data));
    }

    public function PaymentManageUpdate(Request $request, $id) {
        $OldInvoice = Invoice::where('order_id', $id)->get()->all();
        $NewInvoice = $request->all();
        $Design = Design::find($id);

        foreach ($OldInvoice as $item) {
            Invoice::find($item->id)->delete();
        }

        $i = 1;
        foreach ($NewInvoice['invoice'] as $item) {
            $Invoice = new Invoice;
            $Invoice->uid = $Design->uid;
            $Invoice->title = 'Design Quote';
            $Invoice->product_type = 'design';
            $Invoice->order_id = $id;
            if (isset($item['paid']) && $item['paid'] == 1) {
                $Invoice->status = 'paid';
            } else {
                $Invoice->status = 'unpaid';
            }
            $Invoice->payment_step = $i;
            $Invoice->amount = $item['amount'];
            $Invoice->save();
            $i += 1;
        }


        return redirect()->back()->with('notification', [
            'class' => 'success',
            'message' => 'Items deleted.'
        ]);

    }
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
}
