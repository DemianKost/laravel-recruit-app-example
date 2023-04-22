<?php

namespace App\Http\Controllers;

use Request;
use Inertia\Inertia;
use App\Models\Vacancy;
use App\Models\Category;
use App\Http\Requests\Vacancy\StoreVacancyRequest;
use App\Http\Resources\Vacancy\GetVacanciesResource;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Vacancy/Index', [
            'vacancies' => GetVacanciesResource::collection(
                Vacancy::all()
            )
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

        // Get all categories
        $categories = [
            'programming_language' => $data['programmingLanguages'],
            'work_type' => $data['workTypes'],
            'dev_level' => $data['devLevels']
        ];

        // Create vacancy
        $vacancy = Vacancy::create([
            'user_id' => auth()->id(),
            'title' => $data['title'],
            'description' => $data['description'],
            'salary_from' => $data['salary_from'],
            'salary_to' => $data['salary_to']
        ]);

        // Save all vacancy categories
        foreach ( $categories as $type => $value ) {
            if ( $value ) {
                foreach ( $value as $category ) {
                    Category::create([
                        'vacancy_id' => $vacancy->id,
                        'type' => $type,
                        'name' => $category
                    ]);
                }
            }
        }

        return redirect()->route('vacancies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return Inertia::render('Vacancy/Show', [
            'vacancy' => new GetVacanciesResource( $vacancy ),
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
