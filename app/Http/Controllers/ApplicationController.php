<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ApplicationRequest;
use Inertia\Inertia;
use Inertia\Response;

class ApplicationController extends Controller
{
    public function applyform(Listing $listing): Response
    {
        // You send the listing data to a Vue page
        return Inertia::render('Application/ApplyForm', [
            'listing' => $listing,
        ]);
    }

    public function createapplication(ApplicationRequest $request): RedirectResponse
    {
        try {
            if (!Gate::allows('create', Application::class)) {
                abort(403, __('Unauthorized'));
            }

            $validated = $request->validated();

            // Store the uploaded CV
            if ($request->hasFile('CV')) {
                $validated['CV'] = $request->file('CV')->store('cvs', 'public');
            }

            $application = Application::create($validated);

            return redirect()->route('applications.success')->with('message', 'Application sent successfully');
        } catch (\Throwable $e) {
            return back()->with('error', __('Failed to create an application: ') . $e->getMessage());
        }
    }

    public function success(): Response
    {
        return Inertia::render('Application/Success', [
            'message' => session('message'),
        ]);
    }
}
