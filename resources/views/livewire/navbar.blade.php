<div>
    {{-- Success is as dangerous as failure. --}}
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
    
                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link" href="{{route('home')}}" wire:navigate>{{__('Inicio')}}</a>
                        </li>

                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link" href="{{route('inventory')}}" wire:navigate>{{__('Inventario')}}</a>
                        </li>

                        @php
                            $const_updates = App\Models\ConstructionUpdate::all();
                        @endphp

                        @if ( count($const_updates) > 0)
                            <li class="nav-item me-0 me-lg-4">
                                <a class="nav-link" href="{{route('construction')}}" wire:navigate>{{__('Avances de Obra')}}</a>
                            </li>
                        @endif
    
                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link" href="{{route('lifestyle')}}" wire:navigate>{{__('Estilo de Vida')}}</a>
                        </li>
    
                        <li class="nav-item me-0 me-lg-4">
                            <a class="nav-link" href="{{route('about')}}" wire:navigate>{{__('Nosotros')}}</a>
                        </li>
    
                        @php
                            $route = Route::currentRouteName();
                            $lang = app()->getLocale();
                        @endphp
    
                        @if ($lang == 'en')
                            @if($route != 'en.unit' and $route != 'es.livewire.update')
    
                                <a href="{{$url = route($route, request()->query(), true, 'es')}}" wire:navigate class="d-block align-self-center me-3 link-brown fs-4" title="{{__('Cambiar idioma')}}">
                                    <i class="fa-solid fa-language"></i>
                                </a>
                            @else
    
                                <a class="d-block align-self-center me-3 link-brown fs-4" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('unit', ['name'=>$unit_name, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'es');}}">
                                    <i class="fa-solid fa-language"></i>
                                </a>
    
                            @endif
    
                        @else
                            @if($route != 'es.unit' and $route != 'es.livewire.update')
    
                                <a href="{{$url = route($route, request()->query(), true, 'en')}}" wire:navigate class="d-block align-self-center me-3 link-brown fs-4" title="{{__('Cambiar idioma')}}">
                                    <i class="fa-solid fa-language"></i>
                                </a>
    
                            @else
                                
                                <a class="d-block align-self-center me-3 link-brown fs-4" title="{{__('Cambiar idioma')}}" wire:navigate href="{{$url = route('unit', ['name'=>$unit_name, 'utm_campaign' => request()->query('utm_campaign'), 'utm_source' => request()->query('utm_source'), 'utm_medium' => request()->query('utm_medium')], true, 'en');}}">
                                    <i class="fa-solid fa-language"></i>
                                </a>
    
                            @endif
                        @endif
                        
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
    
</div>
