<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-5">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ url('/index') }}">
            Goolaya
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <!-- Home -->
                <li class="nav-item mx-2">
                    <a href="{{ url('index/') }}"
                        class="nav-link ps-2 d-flex justify-content-between align-items-center">
                        Home
                    </a>
                </li>
                <!-- About -->
                <li class="nav-item mx-2">
                    <a href="{{ url('index/#about') }}"
                        class="nav-link ps-2 d-flex justify-content-between align-items-center">
                        About
                    </a>
                </li>
                <!-- Journaling -->
                <li class="nav-item mx-2">
                    <a href="{{ url('journaling') }}"
                        class="nav-link ps-2 d-flex justify-content-between align-items-center">
                        Journaling
                    </a>
                </li>
                <!-- Quran -->
                <li class="nav-item mx-2">
                    <a href="{{ url('quran') }}"
                        class="nav-link ps-2 d-flex justify-content-between align-items-center">
                        Quran
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>