<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisationReview extends Model
{
    use HasFactory;

    protected $fillable = ['rate', 'full_name', 'realisation_id', 'email', 'review','status'];

    public function getCreatedAt()
    {
        setlocale(LC_TIME, "fr_FR");
        return strftime("%e %B %Y", strtotime($this->created_at));
    }
}
