<?php

namespace GetHoard\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Snippet extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'snippets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'extension', 'code'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function user() {
        return $this->belongsTo('GetHoard\Models\User');
    }
    
    public function generateCode() {
	    if($this->code == null) {
		    $code = substr(md5(microtime()),rand(0,26),8);
		    while (Snippet::where('code', $code)->count() != 0) {
			    $code = substr(md5(microtime()),rand(0,26),8);
		    }
		    $this->code = $code;
		    $this->save();
		    
		    return $code;
	    }
    }
    
    public function getContents() {
	    $contents = Storage::disk('local')->get($this->code);
	    return $contents;
    }
    
    public function updateContents($contents) {
        Storage::disk('local')->put($this->code, $contents);
    }
}
