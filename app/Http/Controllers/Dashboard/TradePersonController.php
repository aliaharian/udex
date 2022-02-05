<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Attachments;
use App\Model\Connect;
use App\Model\Design;
use App\Model\Invoice;
use App\Model\Messages;
use App\Model\Projects;
use App\Tradeperson;
use App\User;
use Illuminate\Http\Request;

class TradePersonController extends Controller
{
    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $tradePerson = Tradeperson::orderBy('id', 'desc')->paginate(20);
        $tradePerson->sortByDesc("id");
        return view('admin.tradePerson.index', compact('tradePerson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $tradePerson = Tradeperson::findOrFail($id);
        return view('admin.tradePerson.show', compact('tradePerson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request) {
        foreach ($request->delete_item as $key => $item) {
            Tradeperson::where('id', $key)->delete();
        }

        return redirect('/dashboard/trade-person')->with('notification', [
            'class' => 'success',
            'message' => 'Items deleted.'
        ]);
    }
}
