<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class AdminActusController extends Controller
{
    public function index()
    {
        $actus = Actu::all();
        return view('admin.actus.index',[
            'actus'=>$actus
        ]);
    }

    public function show(int $id)
    {
        $actusShow = Actu::find($id);

        return view('admin.actus.show',[
            'actusShow' => $actusShow,
        ]);
    }
    
    public function edit($id)
    {
        $actus = Actu::find($id);

        return view('admin.actus.edit',[
            'actus' => $actus,
        ]);
    }
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'date_publication' => 'required',
            'titre' => 'required',
            'description' => "required",
        ]);

        $actus = Actu::find($id);
        $actus->date_publication = $validated['date_publication'];
        $actus->titre = $validated['titre'];
        $actus->description = $validated['description'];

        $actus->save();

        return redirect()->route('admin.actus.show',[
            'id' => $actus->id,
        ]);
    }
    public function delete($id)
    {
        $actus = Actu::find($id);
        $actus->delete();

        return redirect()->route('admin.actus.index');
    }
}
