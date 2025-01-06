<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Rule;
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function showlistings() {
        $listings = Listing::all();
        return view('listings.index', compact('listings'));
    }

    // Show a single listing
    public function singlelisting(){
        return view('listings.singlelisting');
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

        Listing::create($listingFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }

    // Go to an edit mode for a list
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update a listing
    public function update(Request $request, Listing $listing) {
        $listingFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        $listing->update($formFields);
        return redirect('/')->with('message', 'Listing updated successfully');
    }

    // Manage existing listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

    // Delete a Listing

    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

}
