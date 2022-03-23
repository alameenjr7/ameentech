<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'status', 'is_parent', 'parent_id'];

    public static function shiftChild($cat_id)
    {
        return Category::whereIn('id',$cat_id)->update(['is_parent'=>1]);
    }

    public static function getChildByParentID($id)
    {
        return Category::where('parent_id',$id)->pluck('title','id');
    }

    public function realisations()
    {
        return $this->hasMany('App\Models\Realisation','categorie_id','id')->where('status','active');
    }

    public function publications()
    {
        return $this->hasMany('App\Models\Publication','cat_id','id')->where('status','active');
    }
}
