<!--===========================
 * Hoard Snippets Manager (gethoard.net)
 * Dashboard Template (index.html)
 * Copyright © 2015 Adam Greenough <adam@amazorize.com>
 * Licensed for use under GNU Affero General Public License
=============================-->
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Hoard - Code Snippets')</title>
    <link href="{!! asset('css/foundation.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/hoard.css?v='.time()) !!}" rel="stylesheet">
    <link href=
    'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
    rel='stylesheet' type='text/css'>
    <link href=
    "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('favicon.png') !!}">
    <script src="{!! asset('js/vendor/modernizr.js') !!}">
    </script>
    <link href="{!! asset('css/jquery.jscrollpane.css') !!}" media="all" rel="stylesheet" type=
    "text/css">
        <link href="{!! asset('css/prism.css') !!}" rel="stylesheet">
</head>
<body>
    <nav class="tab-bar">
        <section class="left-small">
            <a class="menu-icon" id="menu-toggle"><span></span></a>
        </section>
        <section class="middle tab-bar-section">
            <img src="{!! asset('img/logo.png') !!}">
        </section>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{!! route('home') !!}"><img src="{!! asset('img/logo.png') !!}"></a>
                </li>
                <li class="sidebar-addnew">
                    <a class="button addnew" href="{!! action('SnippetController@getUpload') !!}"><i class=
                    "fa fa-code"></i> Create Snippet</a>
                </li>
                <li class="sidebar-divider">Menu</li>
                <li class="sidebar-link">
                    <a href="{!! route('dashboard') !!}"><i class="fa fa-tachometer"></i> Dashboard</a>
                </li>
                <li class="sidebar-link">
                    <a href="#"><i class="fa fa-cogs"></i> Preferences</a>
                </li>
                
                @if(Auth::check())
                <li class="sidebar-divider">Tags</li>
                <li class="sidebar-tag">
                    <a href="{!! action('SnippetController@getFavourites') !!}" @if(Route::getCurrentRequest()->path() == "snippets/favourites") class="active" @endif>
	                <i class="fa fa-heart" style=
                    "color: #b92c24;"></i> Favourites <span class=
                    "sidebar-tag-count">{{ Auth::user()->favourites()->count() }}</span></a>
                </li>
                <li class="sidebar-tag">
                    <a href="#"><i class="fa fa-circle" style=
                    "color: #318fd8;"></i> Sample Tag <span class=
                    "sidebar-tag-count">3</span></a>
                </li>
                <li class="sidebar-tag">
                    <a href="#"><i class="fa fa-circle"></i> Uncategorised
                    <span class="sidebar-tag-count">33</span></a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /Sidebar -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="user-bar">
                <div id="user-bar-right">
	               <form action="{!! action('SnippetController@postSearch') !!}" method='POST' id="searchForm">
		           {!! csrf_field() !!}
                   <input type="text" id="search-bar" name="search" placeholder="Search snippets" /><a id="search"><i class="fa fa-search"></i></a>
	               </form>
                </div>
                <div id="user-bar-left">
	                @if(Auth::check())
                    <img class="avatar" src="{!! auth::user()->avatar() !!}">
                    Welcome back, <a href="#">{{ Auth::user()->firstName() }}</a>!
                    @else
                    <img class="avatar" src=
                    "https://pbs.twimg.com/profile_images/601886235531939840/kIPyMEdW.png">
                    Welcome back, Guest. <a href="{!! action('Auth\AuthController@getLogin') !!}">Log in</a> or <a href="{!! action('Auth\AuthController@getRegister') !!}">Register</a>!
                    @endif
                </div>
            </div>
            
            @yield('content')
        </div>
        <!-- /Page Content -->

    </div>
 
    <script src="{!! asset('js/vendor/jquery.js') !!}"></script>
    <script src="{!! asset('js/foundation.min.js') !!}"></script> 
    <script src="{!! asset('js/prism.js?v='.time()) !!}"></script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="{!! asset('js/toggle-class.js') !!}"></script> 
    <script src="{!! asset('js/app.js?v='.time()) !!}"></script>
    
    @yield('scripts')
    
</body>
</html>