<?php

namespace App\Http\Controllers;
use App\Models\FilipinoDesserts;

use Illuminate\Http\Request;

class FilipinodessertsController extends Controller
{
    public function filipinodesserts()
    {
        return view('filipinodesserts.addFilipinodesserts');
    }

    public function saveFilipinodesserts(Request $request)
    {


        $filipinodesserts = new filipinodesserts;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('filipinodessertsimage', $imagename);

        $filipinodesserts->image = $imagename;
        $filipinodesserts->title = $request->title;
        $filipinodesserts->description = $request->description;
        $filipinodesserts->date = $request->date;
        $filipinodesserts->ingredients = $request->ingredients;
        $filipinodesserts->procedure = $request->procedure;
        



        $filipinodesserts->save();


        return redirect()->back()->with('message', 'Added Successfully');
    }

    public function listFilipinodesserts(){
        $filipinodesserts = filipinodesserts::all();

        return view('Filipinodesserts.listFilipinodesserts',compact('filipinodesserts'));
    }

    public function editfilipinodesserts(Request $request, $id)
    {
     
        $filipinodesserts = filipinodesserts::find($id);

     
        $filipinodesserts->title = $request->title;
        $filipinodesserts->description = $request->description;
        $filipinodesserts->date = $request->date;
        $filipinodesserts->ingredients = $request->ingredients;
        $filipinodesserts->procedure = $request->procedure;

        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('filipinodessertstimage', $imagename);

            $filipinodesserts->image = $imagename;
        }

        $filipinodesserts->save();

        return redirect()->back()->with('message', 'Updated successfully');
    }

    
    public function deleteFilipinodesserts($id)
    {
        $filipinodesserts = filipinodesserts::find($id);

        $filipinodesserts->delete();

        return redirect()->back()->with('message', 'Deleted successfully');
    }

    public function goToFilipinodesserts()
    {

        $filipinodesserts = filipinodesserts::all();
        return view('Filipinodesserts.goToFilipinodesserts', compact('filipinodesserts'));
    }
}
