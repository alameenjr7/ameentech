<?php

namespace App\Models;

use App\Models\Traits\HasFormattedDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory, HasFormattedDate;

    protected $fillable = ['title', 'slug', 'contenu', 'language_id', 'photo', 'cat_id', 'child_cat_id', 'child_lang_id', 'conditions', 'status'];

    public function categorie()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function rel_pubs()
    {
        return $this->hasMany(Publication::class, 'cat_id', 'cat_id')->where('status','active')->limit(5);
    }

    public function reviews()
    {
        return $this->hasMany(PublicationReview::class);
    }
}
