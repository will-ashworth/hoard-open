<?php

namespace GetHoard\Models;

use Illuminate\Database\Eloquent\Model;


class Favourite extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'favourites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'snippet_id'];
   
	public function user() {
		return $this->belongsTo('GetHoard\Models\User', 'user_id');
	}
	
	public function snippet() {
		return $this->belongsTo('GetHoard\Models\Snippet', 'snippet_id');
	}
  
}
