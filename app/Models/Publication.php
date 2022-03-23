<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'contenu', 'language_id', 'photo', 'cat_id', 'child_cat_id', 'child_cat_id', 'child_lang_id', 'conditions', 'status'];


    public function getCreatedAt()
    {
        setlocale(LC_TIME, "fr_FR");
        return strftime("%e %B %Y", strtotime($this->created_at));
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }

    public function rel_pubs()
    {
        return $this->hasMany('App\Models\Publication','cat_id','cat_id')->where('status','active')->limit(5);
    }

    public function reviews()
    {
        return $this->hasMany(PublicationReview::class);
    }
}
