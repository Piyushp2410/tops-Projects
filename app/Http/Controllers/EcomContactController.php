<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EcomcontactModel;
use Illuminate\Support\Facades\DB;
class EcomContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = DB::table('subject')->get();
        return view('eccomerce.contact', ['subject' => $subject]);
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
        //validations 
        $request->validate([
            "name" => 'required|max:255',
            "email" => 'required|email',
            "subject" => 'required',
            "message" => 'required'
        ]);

        // data insert in subjects tables
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subjectid' => $request->subject,
            'message' => $request->message
        );
        EcomcontactModel::create($data);
        return redirect('/contact-us')->withInput()->with('success', 'Thanks for contact with us we will contact with you soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('contact')
            ->join('subject', 'contact.subjectid', '=', 'subject.id')
            ->select('contact.*', 'subject.subjectname')
            ->get();
        // dd($data);    
        return view('eccomerce.admin.managecontact', ['data' => $data]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EcomcontactModel::where('contactid', $id)->delete();
        return redirect('/admin-login/manage-contacts')->with('del', 'Data deleted successfully');
    }
}
