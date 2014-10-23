<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        {{ HTML::style('css/foundation.css')}}
        {{ HTML::script('js/vendor/modernizr.js')}}
    </head>

<body>

    <!-- Header and Nav -->
 
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">ODOT</a></h1>
            </li>
        </ul>
    </nav>
 
    <!-- End Header and Nav -->
        
    @if (Session::has('message'))
        <div class="alert-box success">
            {{ Session::get('message')}}
         </div>
    @endif
       

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© Team Treehouse</p>
                </div>
            </div>
        </div>
    </footer>

    {{ HTML::script('js/vendor/jquery.js')}}
    {{ HTML::script('js/foundation.min.js')}}
    {{ HTML::script('js/app.js')}}
    <script>
      $(document).foundation();
    </script>
    </body>
</html>