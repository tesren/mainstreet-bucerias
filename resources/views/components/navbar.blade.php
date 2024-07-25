<nav class="navbar bg-brown sticky-top shadow navbar-expand-xl py-0">
    <div class="container-fluid position-relative py-2 overflow-hidden">

        <img src="{{asset('/img/palm-nav-bg.webp')}}" alt="" class="position-absolute top-0 start-0 z-1" style="mix-blend-mode: luminosity; opacity:0.1;">

        <a class="navbar-brand px-3 z-2" href="{{route('home')}}" wire:navigate>
            <img src="{{asset('/img/logo-mainstreet-simple.webp')}}" alt="Logo de Main Street Bucerías" width="60px">
        </a>

        <button class="navbar-toggler z-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header bg-brown">
                <div class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="{{asset('img/mainstreet-full-logo.webp')}}" alt="Logo de Main Street Bucerías" class="w-100 px-4">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body bg-brown">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#" wire:navigate>{{__('Estilo de Vida')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" wire:navigate>{{__('Nosotros')}}</a>
                    </li>
                    
                    <li class="nav-item d-flex justify-content-center d-lg-none">
                        <a href="https://www.facebook.com/C21OceanRealty" target="_blank" rel="noopener noreferrer" class="nav-link me-3 fs-4">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/mainstreetbucerias.c21" target="_blank" rel="noopener noreferrer" class="nav-link fs-4">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>
</nav>