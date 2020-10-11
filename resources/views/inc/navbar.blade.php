<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" 
  aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
            <li class="nav-item"><a class="nav-link" href="/services">Services</a>
            <li class="nav-item"><a class="nav-link" href="/posts">Blog</a>
      </li>
    </ul>
        <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> Login &nbsp</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">&nbsp Register </a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="/home">Dashboard</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    {{-- <ul class="nav navbar-nav navbar-right">
    <li><a href="/posts/create">Create Post</a></li> --}}
  </div>
</nav>