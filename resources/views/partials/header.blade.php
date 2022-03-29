<header>
    <!-- Header top -->
    <div class="header-top">
       <!-- Container -->
        <div class="container">
           <!-- Header info -->
            <div class="header-info">
                <!-- Header info text -->
                <div class="header-info-text">
                    dc power visa
                </div>
                <!-- Header info text -->
                <div class="header-info-text">
                    additional dc sites
                </div>
            </div>
        </div>
    </div>

    <!-- Header bottom -->
    <div class="header-bottom">
        <!-- Container -->
        <div class="container">
           <!-- Header logo and menu -->
            <div class="header-logo-menu">
                <!-- Header logo -->
                <div class="header-logo">
                    <img src=" {{ asset('images/dc-logo.png') }} " alt="DC Logo">
                </div>
                <!-- Header menu -->
                <div class="header-menu">
                    <nav>
                        <ul class="menu">
                            <li class="{{ Request::route()->getName() === 'home' ? 'current' : '' }}">
                                <a href="{{route('home')}}">caracters</a>
                            </li>

                            <li class="{{Request::route()->getName() === 'movie-details' ? 'current' : '' }}" >
                                <a href="{{route('comics')}}">comics</a>
                            </li> 

                           

                            <li>
                                <a href="#">movies</a>
                            </li>

                            <li>
                                <a href="#">tv</a>
                            </li>

                            <li>
                                <a href="#">games</a>
                            </li>

                            <li>
                                <a href="#">collectibles</a>
                            </li>

                            <li>
                                <a href="#">videos</a>
                            </li>

                            <li>
                                <a href="#">fans</a>
                            </li>

                            <li>
                                <a href="#">news</a>
                            </li>

                            <li>
                                <a href="#">shop</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Header jumbotron -->
        <div class="header-jumbotron">
            <img src="{{ asset('images/jumbotron.jpg') }}" alt="DC jumbotrone image">
        </div>
    </div>


</header> 