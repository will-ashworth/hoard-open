@extends('layouts.master')

@section('title', 'hoard')

@section('content')

<div id="inline-container">
	<form method="POST" action="{!! action('SnippetController@postUpload') !!}" enctype="multipart/form-data">
	    {!! csrf_field() !!}
	    
	    
		@if (count($errors) > 0)
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		@endif
		
		<div>
		    {!! Form::label('Description') !!}
			{!! Form::textarea('description', old('description')) !!}
		</div>
		
		<div>
		    {!! Form::label('Snippet File') !!}
			{!! Form::file('file') !!}
		</div>
		
	    <div>
	        <button type="submit">Upload</button>
	    </div>
	</form>
</div>
@endsection