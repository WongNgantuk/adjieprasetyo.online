use public\css\app
 <!-- Start Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-1 fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="fs-4 fw-bold">Adjie Prasetyo</p>
                  </a>
              <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink">

                  @guest
                    @if (Route::has('login'))
                    <li><a class="btn btn-primary mx-3" href="{{ route('login') }}" role="button"> <i class="bi bi-box-arrow-in-right"></i> Log IN</a></li>
                    @endif
                  @else
                    <li><a class="btn btn-primary my-3" href="{{ url('dashboard') }}" role="button"> <i class="bi bi-clipboard-plus"></i></i> Dashboard</a></li>

                    <li><a class="btn btn-primary mb-3" href="{{ route('logout') }}" role="button"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form></li>
                  @endguest
                </ul>
                </li>
              </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
    <!-- End Navbar -->