<?php

namespace App\Cms;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['project', 'section_id', 'imagen'];

    protected $table = 'projects';

    public function section()
    {
    	return $this->belongsTo('App\Cms\Section', 'section_id');
    }
}
