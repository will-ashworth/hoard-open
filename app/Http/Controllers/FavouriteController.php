<?php

namespace GetHoard\Http\Controllers;

use GetHoard\Models\Auth\User;
use GetHoard\Models\Snippet;
use GetHoard\Models\Favourite;
use Validator;
use Auth;
use GetHoard\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => '']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'user_id' => 'required|integer|exists:users,id',
            'snippet_id' => 'required|integer|exists:snippets,id',
        ]);
    }

    /**
     * Create a new Favourite instance after a valid submission.
     *
     * @param  array  $data
     * @return Snippet
     */
    protected function create(array $data)
    {
        $favourite = Favourite::create();
        $favourite->user()->associate(Auth::user());
        $favourite->snippet()->associate(Snippet::find($data['snippet_id']));
        $favourite->save();
        
        return $favourite;
    }
   
    public function postFavourite(Request $request) {
	    if(!$request->has('snippet_id')) {
		    return "fail";
	    }
	    $validator = $this->validator($request->all());
		if($validator->fails()) {
            return "fail";
        }
        
        $q = Favourite::where('user_id', Auth::user()->id)
        			  ->where('snippet_id', $request->get('snippet_id'));
        $exists = $q->count() > 0 ? true : false;
        
        if($exists) {
	        $q->first()->delete();
	        return "deleted";
	    } else {
	        $this->create($request->all());
	        return "success";
        }
    }
}
