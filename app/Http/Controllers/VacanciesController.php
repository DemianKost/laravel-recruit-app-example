<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Vacancy;
use App\Http\Requests\Vacancy\StoreVacancyRequest;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Vacancy/Index', [
            'vacancies' => Vacancy::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Vacancy/Create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param App\Http\Requests\Vacancy\StoreVacancyRequest $request
     */
    public function store(StoreVacancyRequest $request)
    {
        $data = $request->validated();

        Vacancy::create($data);

        return redirect()->route('vacancies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return Inertia::render('Vacancy/Show', [
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * User vacancies page
     */
    public function list()
    {
        return Inertia::render('VacancyDashboard/Index', [
            'vacancies' => auth()->user()->vacancies()->get()
        ]);
    }
}
