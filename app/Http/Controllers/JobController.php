<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;

class JobController extends Controller
{

    public function index()
    {
        $jobs=Job::with('employer')->latest()->simplePaginate(10);
        return view('try', compact('jobs'));
    }

    public function create()
    {
        $employers=Employer::all();
        return view('apply.create',compact('employers'));
        return redirect()->route('home')->with('success', 'Job created succssfully!');
    }
  

    public function store(Request $request)
    {
        $validated=$request->validate([
            'job_name'=> 'required|string|min:3',
            'salary'=> 'required|integer|min:3',
            'employer_id'=>'required|exists:employers,id'
             
        ]);
      

        $job= Job::create($validated);

      

        return redirect()->route('home');
    }


    public function show(Job $job)
    {
      
    return view('apply.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
       Gate::authorize('admin-only', $job);
         $employers=Employer::all();
        return view('apply.update',compact('job', 'employers'));
    }


    public function update(Request $request,Job $job)
    {
       $request->validate([
            'job_name'=> 'required|string|min:3',
            'salary'=> 'required|integer|min:3',
            'employer_id'=>'required|exists:employers,id'
             
        ]);
       

         $job ->update([
            'job_name'=> request('job_name'),
            'salary'=> request('salary'),
            'employer_id'=>request('employer_id'),
         ]);
        return redirect()->route('job.show', ['job'=>$job->id])->with('Job updated successfully');
    }


    public function destroy(Job $job)
    {
         

          $job->delete();

          return redirect()->route('home')->with('Job deleted successfully');
    }

}
