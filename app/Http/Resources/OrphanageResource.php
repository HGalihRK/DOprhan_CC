<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrphanageResource extends JsonResource
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
            'name' => $this->name,
            'photo_url' => $this->photo_url,
            'description' => $this->description,
            'member_count' => $this->member_count,
            'user' => User::find($this->user_id)->makeHidden(['email', 'money', 'phone_number', 'api_key', 'email_verified_at', 'two_factor_confirmed_at', 'current_team_id']),
            'orphans' => $this->orphans,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
