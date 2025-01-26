<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;
use App\Models\User;

class ListingController extends Controller
{
    // Show all listings
    public function showlistings() {
        // Add pagination on the listing later
        $listings = Listing::all();
        return view('listings.index', compact('listings'));
    }

    // Show a single listing
    public function singlelisting(Listing $listing){
        return view('listings.singlelisting', compact('listing'));
    }

    // Show listing form
    public function showlistingsform() {
        return view('listings.form');
    }

    // Store the listing information
    public function createlisting(Request $request) {
        $listingFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $listingFields['user_id'] = auth()->id();

        Listing::create($listingFields);
        return redirect()->route('listing.show')->with('message', 'Listing created successfully');
    }

    // Go to an edit mode for a listing
    public function edit(Listing $listing) {
        return view('listings.edit', compact('listing'));
    }


    // Update a listing
    public function update(Request $request, Listing $id) {
        $listingFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        $id->update($listingFields);
        return redirect()->route('listing.show')->with('message', 'Listing updated successfully');
    }

    // Manage existing listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

    // Delete a Listing
    public function destroy(Listing $id) {
        $id->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }


    // Admin(Job poster) dashboard
    public function dashboard() {
        if(!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must login first');
        } 
        return view('listings.admindashboard');
    }

    // View applications

    public function viewapplications() {

        $applications = auth()->user()->applications()->latest()->get();
        return view('listings.applications', compact('applications'));
    }

}
