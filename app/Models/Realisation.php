<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'title', 'contenu', 'language_id', 'categorie_id', 'child_cat_id', 'child_lang_id', 'slug', 'status', 'condition', 'client_id'];

    public function getCreatedAt()
    {
        setlocale(LC_TIME, "fr_FR");
        return strftime("%e %B %Y", strtotime($this->created_at));
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Category','categorie_id','id');
    }

    public function rel_reals()
    {
        return $this->hasMany('App\Models\Realisation','categorie_id','categorie_id')->where('status','active')->limit(5);
    }

    public function reviews()
    {
        return $this->hasMany(RealisationReview::class);
    }
}
