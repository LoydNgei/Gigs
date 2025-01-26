<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\User;

class ApplicationController extends Controller
{
    public function applyform(Listing $listing) {
        return view('listings.apply', compact('listing'));
    }


    public function createapplication(Request $request, Listing $listing) {
        $jobField = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'linkedin' => 'required',
            'github' => 'required',
            'portfolio' => 'required',
            'CV' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'],     
        ]);

        $jobField['listing_id'] = $listing->id;

        if ($request->hasFile('CV')) {
            $jobField['CV'] = $request->file('CV')->store('cvs', 'public');
        }

        Application::create($jobField);
        return redirect()->route('listing.single')->with('message', 'Application sent successfully');
        
    }
    
}
