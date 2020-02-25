<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('images/site.webmanifest')}}">
        <title>GorientFoods/welcome...</title>
        <!-- Fonts -->
        
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/fbdde16cdd.js" crossorigin="anonymous" async></script> 
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
    
       <header>
            @if(Request::is('/'))
                    @include('PARTS.headersection')
            @endif
            @include('PARTS.navbar') 
       </header>

        <div id="slider">
            @yield('content')
        </div>

       @include('BODY.footer')
       <!-- Modal nav for mobile-->
        <div id="modal" > 
         <div class="modal-close" data-dismiss="modal" aria-label="Close">&times;</div>
            <div class="Modal-content">
                <div id="mobilenavModal">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="mobilenav"><a href="/about">About us</a></li>
                        <li class="mobilenav"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
       <script src="{{asset('js/app.js')}}"></script>
       <script src="{{asset('js/navstyle.js')}}"></script>
    </body>
</html>
