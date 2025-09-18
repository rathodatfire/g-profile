<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Hash; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
		return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreUser(Request $request)
    {  
        //dd( $request);
        //
	    DB::enableQueryLog();
        
        /* $request->validate([
            'issue_date'=> 'required',
            'party_name'=> 'required',
            'address'=> 'required',
            'occupancy'=> 'required',
            'filename'=> 'required' ,
            'notice_type'=> 'required' ,
            'notice_due_day'=> 'required' ,
            'notice_no'=> 'required' 
            ]); */
        $input = $request->all();
        //dd($input['txtPassword']);
        $data = User::find($input['mobile']);
        
        
    // If no data is found for the owner_id, create a new instance
        if (!$data) {
            $data = new User;
        }
        //$input['occupancy_id'] =   $input['occupancy_value'] = '';
       
       //dd( $issuer_name_array);
       /* $input['issuer_name_id'] = $input['issuer_name_value'] = '';
        if( !empty($input['issuer_name'] ) )  {
            $issuer_name_array = explode('_' ,$input['issuer_name'] );
            $input['issuer_name_id'] = $issuer_name_array[0];
            $input['issuer_name_value'] = $issuer_name_array[1];    
        }*/

        $input['created_by'] = 1;
        $input['updated_by'] = 1;
        $input['password'] = Hash::make($input['txtPassword']);
        $insert = array( 
                        'first_name' => $input['first_name'],
                        'last_name' => $input['last_name'],
                        'surname' => $input['surname'],
                        'email' => $input['email'],
                        'mobile' => $input['mobile'],
                        'password' => $input['password'],
                        'created_by' => 1,
                        'updated_by' => 1 );



        //$input['password'] = Hash::make($input['txtPassword']);
       //4 dd($insert);
     //   $request->except(['_token', '_method']);  
        $id = User::create($insert)->id ;
       // return redirect()->back()->with('success', 'Account Created Successfully.');
        return redirect()->route('login')->with('success', 'Account Created Successfully.');
      /* if($request->hasFile('buildingImage')) {
            $this->uploadRename($id, $request->file('buildingImage'), 'buildingImage'); 
        }*/
         
        //return redirect('bTenShow/'.$id);
    }

     public function login( Request $request )
    {
        //
        $input = $request->all();
       //dd( $request->email,  $request->password);
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
            ];
        //
        if (Auth::attempt($credetials)) { 
            return redirect('/home')->withSuccess('You have Successfully loggedin');
        }
        
         return view('login');
    }

     /**
     * Display the specified resource.
     */
    public function home()
    {
        return view('dashboard');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
