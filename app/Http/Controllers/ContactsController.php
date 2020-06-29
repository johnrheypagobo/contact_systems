<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use Auth;

class ContactsController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_id =  $user->id;
        // get all the nerds
        $contacts = Contacts::where('user_id',$user_id)->get();

        // load the view and pass the nerds
        return view('contacts')->with('contacts', $contacts);
       // return view('contacts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $company = $request->input('company');
       
        $user = Auth::user();
        $user_id =  $user->id;

        $insert_contacts= Contacts::insert([
            'name' => $name, 
            'company' => $company,
            'phone' => $phone,
            'email' => $email,
            'user_id' => $user_id,
        ]);

        return response()->json($insert_contacts);      
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contacts = Contacts::where('id',$id)->get();       

        return view('editcontacts')->with('editcontacts', $contacts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $company = $request->input('company');
        $contact_id =  $request->input('contact_id');
       
        $user = Auth::user();
        $user_id =  $user->id;

        $insert_contacts= Contacts::where('id',$contact_id)->update([
            'name' => $name, 
            'company' => $company,
            'phone' => $phone,
            'email' => $email,
            'user_id' => $user_id,
        ]);

        return response()->json($insert_contacts);      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $contact_id=$request->input('contact_id');
        $delete_query = Contacts::where('id',$contact_id)->delete();

        return response()->json($delete_query);     
    }
}
