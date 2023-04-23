<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\Vacancy\GetVacanciesResource;

class ProfileController extends Controller
{
    /**
     * Display a current user profile
     */
    public function index()
    {
        ( auth()->user()->role == 1 )
            ? $data = GetVacanciesResource::collection( auth()->user()->vacancies()->get() )
            : '';

        return Inertia::render('Profile/Index', [
            'user' => auth()->user()->first(),
            'profile' => auth()->user()->profile()->first(),
            'data' => [
                'info' => $data
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        ( $profile->user->role == 1 )
            ? $data = GetVacanciesResource::collection( $profile->user->vacancies )
            : $data = [];

        return Inertia::render('Profile/Show', [
            'user' => $profile->user,
            'profile' => $profile,
            'data' => [
                'info' => $data
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, Profile $profile)
    {
        $data = $request->validated();
        
        $data['user_id'] = auth()->id();

        $profile->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
