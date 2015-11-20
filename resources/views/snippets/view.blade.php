@extends('layouts.master')

@section('title', 'hoard')

@section('content')
            <div id="picker-container">
                <div class="picker-label">
                    <span class="sortby">Most recent <i class=
                    "fa fa-sort"></i></span>{{ count($snippets) }} snippets
                </div>
                
                @foreach($snippets as $key => $snippet)
                <div class="snippet-preview @if($key == 0) active @endif">
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
                        <span class="tag" style=
                        "background: #b92d25;"><i class="fa fa-heart"></i></span>
                        <span class="tag" style="background: #3498db;">Sample
                        Tag</span>
                    </div>
                </div>
                @endforeach
                <div class="snippet-preview">
                    <div class="snippet-title">
                        <img class="avatar" src=
                        "https://pbs.twimg.com/profile_images/601886235531939840/kIPyMEdW.png">
                        element-debug.css
                    </div>
                    <div class="snippet-date">
                        updated 1st November, 2015 by Adam
                    </div>
                    <div class="snippet-desc">
                        Create a red outline around all HTML elements for
                        layout debugging positioning/hidden ele...
                    </div>
                    <div class="snippet-tags">
                        <span class="tag" style=
                        "background: #b92d25;"><i class="fa fa-heart"></i></span>
                        <span class="tag" style="background: #3498db;">Sample
                        Tag</span>
                    </div>
                </div>
                <div class="snippet-end"><img src="{{ asset('img/acornend.png') }}"></div>
            </div>
                        <div id="inline-container">
				  <div id="inline-content">
  <div class="small-12 large-12 columns">
	  <h1 class="snippet-title">{{ $snippets[0]->name }}.{{ $snippets[0]->extension }}	  <div class="snippet-tags">
                        <span class="tag" style=
                        "background: #b92d25;"><i class="fa fa-heart"></i></span>
                        <span class="tag" style="background: #3498db;">Sample
                        Tag</span>
                    </div></h1>

	  <p>{{ $snippets[0]->description }}</p>
  </div>
	    <div class="small-12 large-8 columns">

<pre class="line-numbers" data-start="0"><code class="language-{{ $snippets[0]->extension }}">{{ $snippets[0]->getContents() }}</code></pre>
	  
	  
	</div>
  <div class="small-12 large-4 columns snippet-sidebar">
	 <div class="author">
  	<img class="avatar" src="{!! $snippets[0]->author->avatar() !!}">{{ $snippets[0]->author->name }}<span class="date">updated {{ $snippets[0]->getDate() }} </span>
	 </div>
	 
	             <ul class="snippet-sidebar-nav">
   
                <li class="snippet-sidebar-divider">Meta</li>
                <li class="snippet-sidebar-link">
                    <i class="fa fa-code"></i> File type: <strong>{{ strtoupper($snippets[0]->extension) }}</strong>
                </li>
                <li class="snippet-sidebar-link">
                	<i class="fa fa-file-code-o"></i> File size: <strong>{{ $snippets[0]->getSize() }}</strong>
                </li>
                <li class="snippet-sidebar-divider">Actions</li>
                <li class="snippet-sidebar-link">
                    <a href="#"><i class="fa fa-heart" style=
                    "color: #b92c24;"></i> Remove from Favourites</a>
                </li>
            </ul>
  </div>
				  </div>
            </div>
@endsection