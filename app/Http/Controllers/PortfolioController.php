<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
class PortfolioController extends Controller
{
    //
    public function index(Request $request)
    {    
        $search = $request->input('search');
      
        // $users = DB::table('users')
        //     ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        //     ->get();

        $listsme = DB::table('users')
        ->leftJoin('companies', 'users.company_id', '=', 'companies.id')
        ->select('companies.id','companies.company_name','companies.company_ssm')
        ->distinct();
        if($request->has('search')){
            // dd($search);
            $listsme->where(function($query) use($search) {
                $query->where('companies.company_ssm', 'LIKE', '%'.$search.'%');
            });
        }
        
        $listsme = $listsme->get();
        return view('corporate-portfolio',compact('listsme'));
   
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $searchssm = Company::query()
            ->where('company_name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('corporate-portfolio', compact('searchssm'));
    }
}
