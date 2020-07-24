<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    //

    public function items()
    {
        $data = DB::table('items')->get(['name', 'rate', 'hsn']);

        return view('generateinvoice', compact('data'));
    }


    public function addnew(Request $request)
    {
        if ($request->ajax()) {
            //your code
            $name = $request->name;
            echo $name;
            $rate = $request->rate;
            echo $rate;

            $hsn = $request->hsn;

            DB::table('items')->insert([
                ['name' => $name , 'rate' => $rate, 'hsn'=>$hsn]

            ]);
        }
    }


    public function listItem()
    {
        $data = DB::table('items')->get(['name', 'rate', 'hsn', 'id']);

        return view('listitems', compact('data'));


    }



    public function addlist(Request $request)
    {
        if ($request) {


        $content = $request->getContent();
        $data = (json_decode($content, true));

        $data = $data["products"];

        DB::table('items')->insert($data);


        } else{
            echo "no";
        }

    }



    public function deleteitem(Request $request)
    {
        if($request) {


            $id = $request->product_id;

            DB::table('items')->delete($id);

        }

    }



    public function store() {
        return "here";
    }



}
