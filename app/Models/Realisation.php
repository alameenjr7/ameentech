<?php

namespace App\Models;

use App\Models\Traits\HasFormattedDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory, HasFormattedDate;

    protected $fillable = ['photo', 'title', 'contenu', 'language_id', 'categorie_id', 'child_cat_id', 'child_lang_id', 'slug', 'status', 'condition', 'client_id'];

    public function categorie()
    {
        return $this->belongsTo(Category::class, 'categorie_id', 'id');
    }

    public function rel_reals()
    {
        return $this->hasMany(Realisation::class, 'categorie_id', 'categorie_id')->where('status','active')->limit(5);
    }

    public function reviews()
    {
        return $this->hasMany(RealisationReview::class);
    }
}
