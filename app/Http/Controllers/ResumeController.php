<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Http\Requests\Resume\UpdateResumeRequest;

class ResumeController extends Controller
{
    /**
     * Update resume of current user
     * @param App\Http\Requests\Resume\UpdateResumeRequest $request
     * 
     * @return void
     */
    public function update(UpdateResumeRequest $request)
    {
        $resume = auth()->user()->resume;

        $data = $request->validated();

        $resume->update($data);
    }
}
