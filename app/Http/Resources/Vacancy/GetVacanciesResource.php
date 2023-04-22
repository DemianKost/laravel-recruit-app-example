<?php

namespace App\Http\Resources\Vacancy;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetVacanciesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
            'categories' => [
                'workType' => $this->workTypes,
                'programmingLanguages' => $this->programmingLanguages,
                'devLevels' => $this->devLevels
            ],
            'created_at' => $this->created_at
        ];
    }
}
