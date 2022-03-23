<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'title', 'description', 'status', 'url','is_language','framework_id'];

    public static function shiftChild($language_id)
    {
        return Language::whereIn('id',$language_id)->update(['is_language'=>1]);
    }

    public static function getChildByFrameworkID($id)
    {
        return Language::where('framework_id',$id)->pluck('title','id');
    }

    public function realisations()
    {
        return $this->hasMany('App\Models\Realisation','language_id','id')->where('status','active');
    }

    public function publications()
    {
        return $this->hasMany('App\Models\Publication','language_id','id')->where('status','active');
    }
}
