<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionRecommendation extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function orphanage()
    {
        return $this->belongsTo(Orphanage::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
