<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Service;
use App\Tradeperson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TradePersonServicesController extends Controller
{
    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(20);
        $services->sortByDesc("id");
        return view('admin.tradePerson.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.tradePerson.services.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $service = new Service();
        $service->name = $request->name;
        $service->save();
        return redirect('/dashboard/trade-person/services')->with('notification', [
            'class' => 'success',
            'message' => 'Service created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.tradePerson.services.edit' , compact('service'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->save();
        return redirect('/dashboard/trade-person/services')->with('notification', [
            'class' => 'success',
            'message' => 'Service edited'
        ]);
    }

    public function destroy(Request $request) {
        foreach ($request->delete_item as $key => $item) {
            Service::where('id', $key)->delete();
        }

        return redirect('/dashboard/trade-person/services')->with('notification', [
            'class' => 'success',
            'message' => 'Items deleted.'
        ]);
    }
}
