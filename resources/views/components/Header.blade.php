<nav class="navbar navbar-expand-lg bg-primary mb-4" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Car Rental</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mx-auto">
                @auth
                    @if (auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashbord') ? 'active' : '' }}"
                                href={{ URL('/dashbord') }}>Dashbord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('customers.create') ? 'active' : '' }} {{ request()->routeIs('customers.index') ? 'active' : '' }} {{ request()->routeIs('customers.edit') ? 'active' : '' }}"
                                href={{ route('customers.index') }}>Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('cars.create') ? 'active' : '' }} {{ request()->routeIs('cars.index') ? 'active' : '' }} {{ request()->routeIs('cars.edit') ? 'active' : '' }}"
                                href={{ route('cars.index') }}>Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('rentals.create') ? 'active' : '' }} {{ request()->routeIs('rentals.index') ? 'active' : '' }} {{ request()->routeIs('rentals.edit') ? 'active' : '' }} "
                                href={{ route('rentals.index') }}>Rentals</a>
                        </li>
                    @endif
                    @if (auth()->user()->isCustomer())
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href={{ URL('/') }}>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.rentals.currentBooking') ? 'active' : '' }}"
                                href={{ route('frontend.rentals.currentBooking', auth()->user()->id) }}>Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.rentals.history') ? 'active' : '' }}"
                                href={{ route('frontend.rentals.history', auth()->user()->id) }}>Rental
                                History</a>
                        </li>
                    @endif
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href={{ URL('/') }}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href={{ URL('/about') }}>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href={{ URL('/contact') }}>Contact</a>
                    </li>
                @endguest
            </ul>
            @guest
                <a class="btn btn-secondary my-2 my-sm-0" href="/login">Login</a>
            @endguest
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                        <div class="dropdown-menu">
                            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
