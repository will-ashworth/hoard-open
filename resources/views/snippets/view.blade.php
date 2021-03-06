@extends('layouts.master')

@section('title', 'hoard')

@section('content')
            <div id="picker-container">
                <div class="picker-label">
                    <span class="sortby">Most recent <i class=
                    "fa fa-sort"></i></span>{{ count($snippets) }} @if(Route::getCurrentRequest()->path() == 'snippets/favourites') favourites @else snippets @endif @if(isset($search)) matching '@if(strlen($search) > 40){{ substr($search, 0, 39).'...' }}@else{{ $search }}@endif' @endif
                </div>
                
                @foreach($snippets as $key => $snippet)
                <div id="{{ $snippet->id }}" class="snippet-preview @if($key == 0) active @endif">
                    <div class="snippet-title">
                        <img class="avatar" src=
                        "{!! $snippet->author->avatar() !!}">
                        {{ $snippet->name }}.{{ $snippet->extension }}
                    </div>
                    <div class="snippet-date">
                        updated {{ $snippet->getDate() }} by {{ $snippet->author->firstName() }}
                    </div>
                    <div class="snippet-desc">
                        {{ $snippet->descShort() }}
                    </div>
                    <div class="snippet-tags">
                        <span class="tag favourite @if($snippet->isFavourited()) active @endif" id="{{ $snippet->id }}"><i class="fa fa-heart"></i></span>
                        <span class="tag" style="background: #3498db;">Sample
                        Tag</span>
                    </div>
                </div>
                @endforeach
                <div class="snippet-end"><img src="{{ asset('img/acornend.png') }}"></div>
            </div>
            <div id="inline-container">
	        @foreach($snippets as $key => $snippet)
				<div id="inline-content" snippet="{{ $snippet->id }}" @if($key == 0) class="visible" @else class="hidden" @endif>
					<div class="small-12 large-12 columns">
						<h1 class="snippet-title">{{ $snippet->name }}.{{ $snippet->extension }}
							<div class="snippet-tags">
								<span class="tag favourite @if($snippet->isFavourited()) active @endif" id="{{ $snippet->id }}"><i class="fa fa-heart"></i></span>
								<span class="tag" style="background: #3498db;">Sample Tag</span>
                			</div>
                		</h1>

						<p>{{ $snippet->description }}</p>
						</div>
						<div class="small-12 large-8 columns">

							<pre class="line-numbers language-{{ $snippet->getLangFromExtension() }}" data-start="0"><code class="language-{{ $snippet->getLangFromExtension() }}">{{ $snippet->getContents() }}</code></pre>
  
  
					</div>
					<div class="small-12 large-4 columns snippet-sidebar">
						<div class="author">
						<img class="avatar" src="{!! $snippet->author->avatar() !!}">{{ $snippet->author->name }}<span class="date">updated {{ $snippet->getDate() }} </span>
						</div>

						<ul class="snippet-sidebar-nav">

			                <li class="snippet-sidebar-divider">Meta</li>
			                <li class="snippet-sidebar-link">
			                    <i class="fa fa-code"></i> File type: <strong>{{ strtoupper($snippet->extension) }}</strong>
			                </li>
			                <li class="snippet-sidebar-link">
			                	<i class="fa fa-file-code-o"></i> File size: <strong>{{ $snippet->getSize() }}</strong>
			                </li>
			                <li class="snippet-sidebar-divider">Actions</li>
			                <li class="snippet-sidebar-link">
			                
			                    <a id="{{ $snippet->id}}" class="favourite remove @if(!$snippet->isFavourited()) hidden @endif">
				                    <i class="fa fa-heart" style="color: #b92c24;"></i> 
				                    Remove from Favourites
				                </a>
			                    <a id="{{ $snippet->id}}" class="favourite add @if($snippet->isFavourited()) hidden @endif">
				                    <i class="fa fa-heart" style="color: #bbb;"></i> 
				                    Add to Favourites
				                </a>
			                </li>
        				</ul>
					</div>
			  </div>
			@endforeach
        </div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
	
	var fun = function(e) {
		e.preventDefault();
		
		var id = $(this).attr('id');
		$.each($('.tag.favourite'), function() {
			if($(this).attr('id') === id) {
				$(this).toggleClass("active");
			}
		});
		$.each($('.favourite.add'), function() {
			if($(this).attr('id') === id) {
				$(this).toggleClass("hidden");
			}
		});
		$.each($('.favourite.remove'), function() {
			if($(this).attr('id') === id) {
				$(this).toggleClass("hidden");
			}
		});
		$.post("{!! action('FavouriteController@postFavourite') !!}", { 'snippet_id': id, '_token': '{!! csrf_token() !!}' }).done(function( ret ) {
		
		});
	};
	
	
	$('.tag.favourite').click(fun);
	$('.add.favourite').click(fun);
	$('.remove.favourite').click(fun);
});
</script>
@endsection