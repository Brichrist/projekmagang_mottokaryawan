
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Moto</title>
        <link rel="icon" type="image/x-icon" href="{{asset('tmplt')}}/assets/icons-1.3.0/icons/alarm.svg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('tmplt')}}/css/styles.css" rel="stylesheet" />
        <link href="{{asset('tmplt')}}/css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            @auth
                <div class="mt-4" style="float: left;">
                    <a href="/profile" class="btn btn-primary" ><input type="image" src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-6--v1.png" />
                        <div>hai, {{auth()->user()->name}}</div> 
                    </a>
                </div>
            @else
                <div class="mt-4" style="float: left;">
                    <a href="#" class="btn btn-primary" ><input type="image" src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-6--v1.png" />
                        <div>you are my guest, hi</div> 
                    </a>
                </div>
            @endauth
            
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
            @yield('foto')
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a class="nav-link" href="/content">content</a></li>
                    <li class="nav-item"><a class="nav-link" href="/add">add</a></li>
                    <li class="nav-item"><a class="nav-link" href="/update">update</a></li>
                </ul>
            </div>
                @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf                
                            <button type="submit" class="btn btn-primary">log out</button>
                            {{-- <button type="button" id="btn-test" class="btn btn-success test ">click</button>
                            <button type="button" id="a" class="btn btn-success test">click1</button> --}}
                    </form>
                @else     
                    {{-- <a href="{{ route('login') }}" class="btn btn-outline-dark">log in</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">register</a> --}}
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('login') }}" class="btn btn-primary" type="button">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary" type="button">Register</a>
                    </div>
                @endauth
                
            
        </nav>

        <!-- Page Content-->
        <div class="co">
            <!-- konten-->
            @yield('konten')
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('tmplt')}}/js/scripts.js"></script>
        <script src="{{asset('tmplt')}}/js/custom.js"></script>
    </body>
</html>
