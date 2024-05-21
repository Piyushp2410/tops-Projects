<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Adminproductmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin\Productmodel;


class AdminproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eccomerce.admin.addproducts');
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
        $request->validate([
            "pname" => 'required|max:25',
            "pprice" => 'required|numeric'
        ]);
        $image = '';
        if ($request->has('pimg')) {
            $image = time() . '.' . $request->pimg->extension();
            $request->pimg->move(public_path('uploads'), $image);
        }

        $data = array(
            'pname' => $request->pname,
            'pprice' => $request->pprice,
            'pimg' => $image,
            'pdes' => $request->pdes ?? ""
        );

        Adminproductmodel::create($data);
        return redirect('/admin-login/add-product')->with('success', 'Product Will be added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('product')
            ->select('product.*', 'pname', 'pprice', 'pdes',)
            ->get();
        return view('eccomerce.admin.manageproducts', ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Adminproductmodel::where("id", $id)->first();
        return view('/admin-login/add-product');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adminproductmodel::where('id', $id)->delete();
        return redirect('/admin-login/manage-product')->with('del', 'Data deleted successfully');
    }
}
