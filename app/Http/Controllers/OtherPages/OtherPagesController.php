<?php

namespace App\Http\Controllers\OtherPages;

use App\Http\Controllers\Controller;
use App\Model\Pages;
use App\Service;
use App\Tradeperson;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherPagesController extends Controller
{
    /* Show All Pages */
    public function index()
    {
        $Pages = Pages::orderBy('id', 'desc')->paginate(20);

        return view('admin.pages.index', compact('Pages'));
    }

    /* Create New Pages */
    public function create()
    {
        return view('admin.pages.create');
    }

    /* Submit New Page */
    public function store(Request $request)
    {
        $user = auth()->user();
        $Page = new Pages();
        $Page->uid = $user->id;
        $Page->title = $request['title'];
        $Page->content_text = $request['content_text'];
        $Page->slug = SlugService::createSlug(Pages::class, 'slug', $request->title);
        $Page->template = $request['template'];

        if ($Page->save()) {
            return redirect('/dashboard/pages/' . $Page->id . '/' . 'edit')->with('notification', [
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

    /* Edit Page */
    public function edit($id)
    {
        $Page = Pages::find($id);

        return view('admin.pages.edit', compact('Page'));
    }

    /* Update Page */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $Page = Pages::find($id);

        $PageData = $request->all();
        $PageData['slug'] = $Page->slug;
        if ($Page->title != $request->title) {
            $PageData['slug'] = SlugService::createSlug(Pages::class, 'slug', $request->title);
        }

        /* FAQ */
        if ($request->faq) {
            $i = 0;
            $FAQData = array();
            foreach ($request->faq as $item) {
                array_push($FAQData, [
                    'question' => $item['question'],
                    'answer' => $item['answer'],
                ]);
                $i += 1;
            }
            $PageData['page_meta'] = json_encode(['faq' => $FAQData]);
        }

        if ($Page->update($PageData)) {
            return redirect()->back()->with('notification', [
                'class' => 'success',
                'message' => 'Page Updated.'
            ]);
        } else {
            return redirect('dashboard/other-pages')->with('notification', [
                'class' => 'danger',
                'message' => 'Error.'
            ]);
        }
    }


    /* Show Page */
    public function show($slug)
    {
        $Page = Pages::where('slug', $slug)->first();

        if (isset($Page->template) && $Page->template == 'faq') {
            return view('site.pages.other-pages.faq', compact('Page'));
        }
    }

    /* Page Destroy */
    public function destroy(Request $request)
    {
        foreach ($request->delete_item as $key => $item) {
            Pages::where('id', $key)->delete();
        }

        return redirect('/dashboard/pages')->with('notification', [
            'class' => 'success',
            'message' => 'Item is Delete.'
        ]);
    }

    //    /* Frequently Asked Questions */
    //    public function faq() {
    //        return view('site.pages.other-pages.faq');
    //    }

    /* Architectural Design & Planning */
    public function architectural_design_planning()
    {
        return view('site.pages.other-pages.architectural-design-planning');
    }

    /* Technical design & construction */
    public function technical_design_construction()
    {
        return view('site.pages.other-pages.technical-design-construction');
    }

    /* Measured surveys */
    public function measured_surveys()
    {
        return view('site.pages.other-pages.measured-surveys');
    }

    /* Proposed design */
    public function proposed_design()
    {
        return view('site.pages.other-pages.proposed-design');
    }

    /* Planning */
    public function planning()
    {
        return view('site.pages.other-pages.planning');
    }

    /* Building regulations */
    public function building_regulations()
    {
        return view('site.pages.other-pages.building-regulations');
    }

    /* New builds */
    public function new_builds()
    {
        return view('site.pages.other-pages.new-builds');
    }

    /* Find a builder for your project */
    public function find_a_builder_for_your_project()
    {
        return view('site.pages.other-pages.find-a-builder-for-your-project');
    }

    /* Register */
    public function QuickQuoteStore(Request $request)
    {
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
            return redirect('connect-service');
        } else {
            return redirect()->back();
        }
    }

    /* Find a builder for your project */
    public function find_a_structural_engineer_for_your_project()
    {
        return view('site.pages.other-pages.find-a-structural-engineer-for-your-project');
    }

    /* Find a builder for your project */
    public function find_a_cctv_drainage_surveyor_for_your_project()
    {
        return view('site.pages.other-pages.find-a-cctv-drainage-surveyor-for-your-project');
    }

    /* Find a structural engineer for your project */
    public function find_a_party_wall_surveyor_for_your_project()
    {
        return view('site.pages.other-pages.find-a-party-wall-surveyor-for-your-project');
    }

    /* Find a structural engineer for your project */
    public function find_an_approved_inspector_for_your_project()
    {
        return view('site.pages.other-pages.find-an-approved-inspector-for-your-project');
    }

    /* terms of use page*/
    public function termsOfUse()
    {
        return view('site.pages.other-pages.terms-of-use');

    }

    /* privacy pollicy page*/
    public function privacyPolicy()
    {
        return view('site.pages.other-pages.privacy-policy');

    }

    public function becomeUdexTradesperson()
    {
        $services = Service::all();
        return view('site.pages.other-pages.become-udex-tradesperson', compact('services'));

    }

    public function becomeUdexTradespersonStore(Request $request)
    {
        if (!auth()->check()) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'company_name' => 'required',
                'company_website' => 'required',
            ], [], [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'company_name' => 'company name',
                'phone' => 'Phone',
                'email' => 'Email',
                'company_website' => 'company website',
            ]);
            $tradePerson = new Tradeperson;
            $tradePerson->name = $request->first_name;
            $tradePerson->last_name = $request->last_name;
            $tradePerson->email = $request->email;
            $tradePerson->phone = $request->phone;
            $tradePerson->company_name = $request->company_name;
            $tradePerson->company_website = $request->company_website;
            $tradePerson->service_id = $request->service;
            $tradePerson->save();
//            $user_id = $tradePerson->id;
//
//            Auth::loginUsingId($user_id);
            return redirect('become-udex-tradesperson');
        } else {
            return redirect()->back();
        }
    }

    public function QuickRegisterStore(Request $request)
    {
//        if(auth()->check()){
        $data = $request;
        $service = $request->service || '';
        return view('site.pages.connect.connect-service', compact('data', 'service'));
//        }
    }
}

