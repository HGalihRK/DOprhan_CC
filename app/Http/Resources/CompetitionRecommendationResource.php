<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionRecommendationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tutor' => $this->tutor,
            'orphanage' => $this->orphanage,
            'competition' => $this->competition,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
