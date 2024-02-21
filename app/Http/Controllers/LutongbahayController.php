<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lutongbahay;


class LutongbahayController extends Controller
{
    public function lutongbahay()
    {
        return view('lutongbahay.addLutongbahay');
    }

    public function saveLutongbahay(Request $request)
    {


        $lutongbahay = new lutongbahay;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('lutongbahayimage', $imagename);

        $lutongbahay->image = $imagename;
        $lutongbahay->title = $request->title;
        $lutongbahay->description = $request->description;
        $lutongbahay->date = $request->date;
        $lutongbahay->ingredients = $request->ingredients;
        $lutongbahay->procedure = $request->procedure;
        



        $lutongbahay->save();


        return redirect()->back()->with('message', 'Added Successfully');
    }

    public function listLutongbahay(){
        $lutongbahay = lutongbahay::all();

        return view('Lutongbahay.listLutongbahay',compact('lutongbahay'));
    }

    public function editLutongbahay(Request $request, $id)
    {
     
        $lutongbahay = Lutongbahay::find($id);

     
        $lutongbahay->title = $request->title;
        $lutongbahay->description = $request->description;
        $lutongbahay->date = $request->date;
        $lutongbahay->ingredients = $request->ingredients;
        $lutongbahay->procedure = $request->procedure;
    

        $image = $request->file;

        if ($image) {
            

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('lutongbahayimage', $imagename);

            $lutongbahay->image = $imagename;
        }

        $lutongbahay->save();

        return redirect()->back()->with('message', 'Updated successfully');
    }

    
    public function deleteLutongbahay($id)
    {
        $lutongbahay = Lutongbahay::find($id);

        $lutongbahay->delete();

        return redirect()->back()->with('message', 'Deleted successfully');
    }

    public function goToLutongbahay()
    {

        $lutongbahay = Lutongbahay::all();
        return view('lutongbahay.goToLutongbahay', compact('lutongbahay'));
    }
}
