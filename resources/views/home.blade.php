@extends('layouts.master')

@section('title', 'hoard')

@section('content')
            <div id="picker-container">
                <div class="picker-label">
                    <span class="sortby">Most recent <i class=
                    "fa fa-sort"></i></span>6 under 'favourites'
                </div>
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
                <div class="snippet-preview active">
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
	  <h1 class="snippet-title">element-debug.css	  <div class="snippet-tags">
                        <span class="tag" style=
                        "background: #b92d25;"><i class="fa fa-heart"></i></span>
                        <span class="tag" style="background: #3498db;">Sample
                        Tag</span>
                    </div></h1>

	  <p>Create a red outline around all HTML elements for layout debugging positioning/hidden elements.</p>
  </div>
	    <div class="small-12 large-8 columns">

<pre class="line-numbers" data-start="0"><code class="language-css">/* This is a code comment 
	http://adamgreenough.com/ */
	
.snippet-preview:hover {
	background: #ebebeb;
}

.snippet-preview .snippet-title {
	font-size: 16px;
	font-weight: 700;
}

.snippet-preview .snippet-title .avatar {
	height: 20px;
	width: 20px;
	border-radius: 10px;
	margin-right: 5px;
}

.snippet-preview .snippet-date {
	font-size: 10px;
	opacity: 0.6;
	padding-left: 30px;
	margin-top: -3px;
}

.snippet-preview .snippet-desc {
	font-size: 12px;
	opacity: 0.8;
	line-height: 1.3;
	padding-left: 30px;
	margin-top: 3px;
}

.snippet-preview .snippet-tags {
	padding-left: 30px;
	margin-top: 3px;
}

.snippet-preview .snippet-tags .tag {
	font-size: 9px;
	color: #fff;
	text-transform: uppercase;
	padding: 3px 5px;
	border-radius: 2px;
}

.snippet-end {
	text-align: center;
	padding-top: 40px;
	padding-bottom: 40px;
	opacity: 0.08;
}

.snippet-end img {
	width: 50px;	
	display: block;
	margin: auto;
}
</code></pre>
	  
	  
	</div>
  <div class="small-12 large-4 columns snippet-sidebar">
	 <div class="author">
  	<img class="avatar" src="https://pbs.twimg.com/profile_images/601886235531939840/kIPyMEdW.png">Adam Greenough<span class="date">updated 1st November, 2015 </span>
	 </div>
	 
	             <ul class="snippet-sidebar-nav">
   
                <li class="snippet-sidebar-divider">Meta</li>
                <li class="snippet-sidebar-link">
                    <i class="fa fa-code"></i> File type: <strong>CSS</strong>
                </li>
                <li class="snippet-sidebar-link">
                	<i class="fa fa-file-code-o"></i> File size: <strong>24 bytes</strong>
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