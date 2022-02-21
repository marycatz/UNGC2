<?php

namespace App\Http\Controllers\Corporate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class AssessmentController extends Controller
{
    //
    public function index(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('assessment');
    }

    public function AssessmentDetail(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('assessment_detail');
    }

    public function Assessment_SME(Request $request)
    {
        // $questions = Question::select("*")
        // ->with('survery')
        // ->get();

         $questions = Question::all();
    
        
        return view('assessment_sme', compact('questions'));
    }

    public function Assessment_New(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('assessment_new');
    }

    public function Assessment_Report(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('assessment_report');
    }

    public function EnvironmentalDetail(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());   
        // }
        return view('environmental_detail');
    }


    public function SocialDetail(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('social_detail');
    }

    public function GovernanceDetail(Request $request)
    {
        // if (view()->exists($request->path())) {
        //     return view($request->path());
        // }
        return view('governance_detail');
    }
}
