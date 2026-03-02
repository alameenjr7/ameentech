<?php

namespace App\Models;

use App\Models\Traits\HasFormattedDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationReview extends Model
{
    use HasFactory, HasFormattedDate;

    protected $fillable = ['rate', 'full_name', 'publication_id', 'email', 'review','status'];
}
