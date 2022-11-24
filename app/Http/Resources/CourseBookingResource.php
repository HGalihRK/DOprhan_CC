<?php

namespace App\Http\Resources;

use App\Models\Orphan;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseBookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $getOrphans = Orphan::whereIn('id', $this->orphanCourseBookings->pluck('orphan_id'))->get();
        return [
            'id' => $this->id,
            'course' => $this->course,
            'transaction' => $this->transaction,
            'orphanage' => $this->orphanage,
            'orphans' => $getOrphans,
            'hour_count' => $this->hour_count,
            'start_date' => $this->start_date,
            'status' => $this->status,
            'total_price' => $this->total_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
