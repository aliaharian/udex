<?php

namespace App\Http\Controllers\Dashboard\Architectionary;

use App\Http\Controllers\Controller;
use App\Model\Architectionary;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ArchitectionaryController extends Controller {
    public function index() {
        $Architectionary = Architectionary::orderBy('created_at', 'asc')->paginate(20);

        return view('admin.architectionary.index', compact('Architectionary'));
    }

    public function create() {
        return view('admin.architectionary.create');
    }

    public function store(Request $request) {
        $user = auth()->user();
        $Architectionary = new Architectionary();
        $Architectionary->uid = $user->id;
        $Architectionary->title = $request['title'];
        $Architectionary->content_text = $request['content_text'];
        $Architectionary->excerpt = $request['excerpt'];
        $Architectionary->slug = SlugService::createSlug(Architectionary::class, 'slug', $request->title);
        $Architectionary->status = $request['status'];

        if ($Architectionary->save()) {
            return redirect('/dashboard/architectionary')->with('notification', [
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

    /* Edit Job */
    public function edit($id) {
        $this->middleware('can:isAuthor');
        $Architectionary = Architectionary::find($id);

        return view('admin.architectionary.edit', compact('Architectionary'));
    }

    /* Update Jobs */
    public function update(Request $request, $id) {
        $this->middleware('can:isAuthor');
        $user = auth()->user();
        $Architectionary = Architectionary::find($id);

        $Architectionary_data = $request->all();
        $Architectionary_data['slug'] = $Architectionary->slug;
        if ($Architectionary->title != $request->title) {
            $Architectionary_data['slug'] = SlugService::createSlug(Architectionary::class, 'slug', $request->title);
        }

        if ($Architectionary->update($Architectionary_data)) {
            return redirect()->back()->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully Updated.'
            ]);
        } else {
            return redirect('dashboard/jobs')->with('notification', [
                'class' => 'danger',
                'message' => 'Data storage was encountered.'
            ]);
        }
    }


    /* Page Destroy */
    public function destroy(Request $request) {
        foreach ($request->delete_item as $key => $item) {
            Architectionary::where('id', $key)->delete();
        }

        return redirect('/dashboard/architectionary')->with('notification', [
            'class' => 'success',
            'message' => 'Item is Delete.'
        ]);
    }
}
