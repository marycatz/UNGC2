<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Get;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

use Hash;
use Session;
use Mail;
use Auth;

use App\Models\User;

class CORPController extends Controller
{
    //
    public function add_linked_user_corp(Request $request)
    {
        $User         = new User;
        $User->company_id    = $request->input('company_id');  
        $User->name    =  $request->input('fullname'); 
        $User->email        = $request->input('email');
        $User->password        = Hash::make($request->input('password'));
        $User->access_level    = $request->input('access_level');
        $User->isAdmin    =     0;
        $User->access_group    = "company";
        $User->position        =  $request->input('position');
        $User->phone        =  $request->input('phone'); 
        $User->save();
  
        return Redirect::back()->with('message','Operation Successful !');
    }

    public function edit_linked_user_process_corp(Request $request)
    {
        $user_id =  $request->input('user_id');
        $company_id    = $request->input('company_id'); 
        $name    =  $request->input('fullname'); 
        $email        = $request->input('email');
        // $password        = Hash::make($request->input('password'));
        $access_level    = $request->input('access_level');
        $access_group    = "company";
        $position        =  $request->input('position');
        $phone        =  $request->input('phone'); 

        $update_user = DB::table('users')
        ->where('id', $user_id)
        ->update(['name' => $name , 'email' => $email ,'access_level'=>$access_level,'company_id'=>$company_id, 'position'=>$position, 'access_group'=> $access_group,  'phone' => $phone]);

        return redirect()->route('indexsme')
        ->withSuccessMessage('Successfully Edit!');
    }


    public function edit($id,Request $request){
        
        $user  = User::find($id);
       
        return response()->json([
          'data' => $user
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return response()->json([
        'message' => 'Data deleted successfully!'
        ]);
    }
}
