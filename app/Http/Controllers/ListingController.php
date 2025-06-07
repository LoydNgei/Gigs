<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Listing;

class ListingController extends Controller
{
    public function showlistings(): Response
    {
        $listings = Listing::latest()->get();

        return Inertia::render('Listings/Index', [
            'listings' => $listings,
        ]);
    }

    public function singlelisting(Listing $listing): Response
    {
        return Inertia::render('Listings/Show', [
            'listing' => $listing,
        ]);
    }

    public function showlistingsform(): Response
    {
        return Inertia::render('Listings/Form');
    }

    public function createlisting(Request $request): \Illuminate\Http\RedirectResponse
    {
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

        return redirect()->route('listings.index')->with('message', 'Listing created successfully');
    }

    public function edit(Listing $listing): Response
    {
        return Inertia::render('Listings/Edit', [
            'listing' => $listing,
        ]);
    }

    public function update(Request $request, Listing $listing): \Illuminate\Http\RedirectResponse
    {
        $listingFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $listing->update($listingFields);

        return redirect()->route('listings.index')->with('message', 'Listing updated successfully');
    }

    public function manage(): Response
    {
        return Inertia::render('Listings/Manage', [
            'listings' => auth()->user()->listings()->get(),
        ]);
    }

    public function destroy(Listing $listing): \Illuminate\Http\RedirectResponse
    {
        $listing->delete();

        return redirect()->route('listings.index')->with('message', 'Listing deleted successfully');
    }

    public function dashboard(): Response
    {
        return Inertia::render('Listings/AdminDashboard');
    }

    public function viewapplications(): Response
    {
        $applications = auth()->user()->applications()->latest()->get();

        return Inertia::render('Listings/Applications', [
            'applications' => $applications,
        ]);
    }
}
