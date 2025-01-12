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
        return view('listings.singlelisting', ['listing' => $listing]);
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

        return redirect('/')->with('message', 'Listing created successfully');
    }

    // Go to an edit mode for a listing
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
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
        $id->update($formFields);
        return redirect('/')->with('message', 'Listing updated successfully');
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

}
