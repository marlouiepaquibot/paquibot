<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Streetfood;

class StreetfoodController extends Controller
{
    public function streetfood(){
        return view('Streetfood.addStreetfood');
    }

    public function saveStreetfood(Request $request)
    {   


            $streetfood = new streetfood;

            $image = $request->file;

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('streetfoodimage', $imagename);

            $streetfood->image = $imagename;
            $streetfood->title = $request->title;
            $streetfood ->description = $request->description;
            $streetfood->date = $request->date;
            $streetfood->ingredients = $request->ingredients;
            $streetfood->procedure = $request->procedure;
        
        
 
           
            $streetfood->save();


            return redirect()->back()->with('message', 'Added Successfully');
    }
    
    public function listStreetfood(){
        $streetfood = streetfood::all();

        return view('Streetfood.listStreetfood',compact('streetfood'));
    }

    public function editStreetfood(Request $request, $id)
    {
     
        $streetfood = streetfood::find($id);

     
        $streetfood->title = $request->title;
        $streetfood->description = $request->description;
        $streetfood->date = $request->date;
        $streetfood->ingredients = $request->ingredients;
        $streetfood->procedure = $request->procedure;

    

        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('streetfoodimage', $imagename);

            $streetfood->image = $imagename;
        }

        $streetfood->save();

        return redirect()->back()->with('message', 'Updated successfully');
    }

    
    public function deleteStreetfood($id)
    {
        $streetfood = streetfood::find($id);

        $streetfood->delete();

        return redirect()->back()->with('message', 'Deleted successfully');
    }

    public function goToStreetfood()
    {

        $streetfood = streetfood::all();
        return view('streetfood.goToStreetfood', compact('streetfood'));
    }
}
