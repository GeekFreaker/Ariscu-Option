<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToDoList</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/app.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        img {
            float:left;
        }

        h5 {
            float:right;
            text-align: center;
            padding-left: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-3 mb-5 bg-white rounded">
      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/To-Do_List.png') }}" width="20" height="20" class="d-inline-block align-top" alt=""/>
        <h5 class="text">To-Do List</h5>
      </a>

      <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="padding:5px">
                                <li>
                                  <a href="{{ url('/logout') }}">
                                    <i style="color:green" class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                                <li>
                                  <form action="/search" method="POST" role="search">
                                      {{ csrf_field() }}
                                      <div class="input-group">
                                          <input type="text" class="form-control" name="q"
                                              placeholder="Search tasks"> <span class="input-group-btn">
                                              <button type="submit" class="btn btn-info">
                                                  <span class="glyphicon glyphicon-search"></span>
                                              </button>
                                          </span>
                                      </div>
                                  </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
