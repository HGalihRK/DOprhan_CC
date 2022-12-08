<?php

namespace App\Http\Resources;

use App\Models\Course;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TutorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => User::find($this->user_id)->makeHidden(['email', 'money', 'phone_number', 'api_key', 'email_verified_at', 'two_factor_confirmed_at', 'current_team_id']),
            'description' => $this->description,
            'skills' => Skill::whereIn('id', $this->courses->pluck('skill_id'))->get(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
