<?php

namespace App\Http\Resources;

use App\Models\CourseBookingDayTimeRange;
use App\Models\DayTimeRange;
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
        
        return [
            'id' => $this->id,
            'course' => $this->course,
            'hour_count' => $this->hour_count,
            'start_date' => $this->start_date,
            'status' => $this->status,
            'total_price' => $this->total_price,
            'transaction' => $this->transaction,
            'orphanage' => $this->orphanage,
            'orphans' =>  Orphan::whereIn('id', $this->orphanCourseBookings->pluck('orphan_id'))->get(),
            'schedule' => DayTimeRange::whereIn('id', $this->courseBookingDayTimeRanges->pluck('day_time_range_id'))->get(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
          ];
    }
}
