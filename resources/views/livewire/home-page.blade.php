<div>
    
    @section('titles')
        <title>Main Street Bucerías - {{__('Preventa de Departamentos en Bucerías, Nayarit')}}</title>
        <meta name="description" content="{{__('¡Bienvenidos a Main Street Bucerías! Ubicado Bucerías, Nayarit, nuestra torre de condominios en preventa ofrece una combinación única de lujo, comodidad y estilo de vida costero. Este exclusivo desarrollo residencial está diseñado para quienes buscan comprar un hogar elegante y moderno, a solo unos pasos de las hermosas playas del Pacífico Mexicano.')}}">
    @endsection

    {{-- Inicio --}}
    <div class="position-relative mb-5">

        <video class="w-100 object-fit-cover" src="{{asset('videos/home-video.mp4')}}" autoplay muted loop poster="{{asset('img/home-poster.webp')}} " style="height: 91.5vh;"></video>

        <div class="bg-brown-linear-gradient"></div>

        <div class="position-absolute bottom-0 start-0 row justify-content-center w-100 z-3">
            <div class="col-12 col-lg-4 col-xxl-3 text-center">

                @if (app()->getLocale() == 'en')
                    <img src="{{asset('img/the-place-for-you.webp')}}" alt="The place for you" class="w-100 mb-5">  
                @else
                    <img src="{{asset('img/el-lugar-para-ti.webp')}}" alt="El lugar para ti" class="w-100 mb-5">
                @endif

                <a href="#info" class="link-light text-decoration-none mb-5 d-block">
                    <i class="fa-solid fa-circle-chevron-down fa-2x fa-bounce"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- Info general --}}
    <div class="row justify-content-evenly mb-6 pt-5" id="info">

        <div class="col-12 col-lg-5">
            <img src="{{asset('/img/building-home.webp')}}" alt="Fachada Main Street Bucerías" class="w-100">
        </div>

        <div class="col-12 col-lg-3 align-self-center">

            @if (app()->getLocale() == 'en')
                <img src="{{asset('img/condominiums-in-bucerias.webp')}}" alt="Condominiums in Bucerías" class="w-100 mb-4"> 
            @else
                <img src="{{asset('img/condominios-en-bucerias.webp')}}" alt="Condominios en Bucerías" class="w-100 mb-4">
            @endif

            <h1 class="fs-4 mb-4">{{__('Factores que determinarán una plusvalía sin precedentes en los ultimos años.')}}</h1>
            <ul class="fs-5 mb-5">

                <li>
                    {{__('Remodelación del aeropuerto.')}}
                </li>

                <li>
                    {{__('Nueva autopista a Guadalajara.')}}
                </li>

                <li>
                    {{__('Fenómeno nómada digital.')}}
                </li>

                <li>
                    {{__('Lugar de retiro de americanos y canadienses.')}}
                </li>
            </ul>

            <a href="#" class="btn btn-brown w-100">{{__('Ver inventario disponible')}}</a>

        </div>

    </div>

    {{-- Lugar ideal --}}
    <div class="row justify-content-end mb-6">

        <div class="col-12 col-lg-3 align-self-center me-0 me-lg-5 pe-3 pe-lg-5">
            <h2 class="fs-4 mb-4">{{__('El lugar ideal')}}</h2>
            <p class="fs-5">{{__('Bucerías, un lugar que lo tiene todo:')}}</p>
            <ul class="fs-5 mb-4">

                <li>
                    {{__('Magníficas playas')}}
                </li>

                <li>
                    {{__('Clima perfecto')}}
                </li>

                <li>
                    {{__('Ambiente de pueblo mágico')}}
                </li>

                <li>
                    {{__('Variedad gastronómica')}}
                </li>
            </ul>

            <div class="mb-4 fs-5">{{__('Y todas las comodidades de un destino de clase mundial.')}}</div>

            <a href="#" class="btn btn-brown w-100">{{__('Ver inventario disponible')}}</a>
        </div>

        <div class="col-12 col-lg-6 align-self-center px-3 px-lg-0">
            
            <div id="carouselExampleIndicators" class="carousel slide">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner shadow">
                    <div class="carousel-item active">
                    <img src="{{asset('img/surfboard-beach.webp')}}" class="d-block w-100 object-fit-cover" alt="Playa Bucerías" style="height:500px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/sunset.webp')}}" class="d-block w-100 object-fit-cover" alt="Atardeceres en Bucerías" style="height:500px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/mexican-food.webp')}}" class="d-block w-100 object-fit-cover" alt="Gastronomía Mexicana" style="height:500px;">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>

    </div>

    {{-- Amenidades --}}
    <div class="text-center mb-6">

        @if (app()->getLocale() == 'en')
            <img src="{{asset('img/living-in-paradise-amenities.webp')}}" class="col-10 col-lg-4 col-xxl-3 mb-5" alt="Living in Paradise">  
        @else
            <img src="{{asset('img/viviendo-en-el-paraiso.webp')}}" class="col-10 col-lg-4 col-xxl-3 mb-5" alt="Viviendo en el Paraíso">
        @endif
        
        <div class="row justify-content-center">

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/pool.svg')}}" alt="Alberca Infinita" class="w-100 mb-3">
                <div class="fs-4">{{__('Alberca Infinita')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/sundecks.svg')}}" alt="Asoleaderos" class="w-100 mb-3">
                <div class="fs-4">{{__('Asoleaderos')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/terraza.svg')}}" alt="Terraza Lounge" class="w-100 mb-3">
                <div class="fs-4">{{__('Terraza Lounge')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/jacuzzi.svg')}}" alt="Jacuzzi" class="w-100 mb-3">
                <div class="fs-4">{{__('Jacuzzi')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/bar-lounge.svg')}}" alt="Terraza Bar" class="w-100 mb-3">
                <div class="fs-4">{{__('Terraza Bar')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/cameras.svg')}}" alt="Vigilancia 24/7" class="w-100 mb-3">
                <div class="fs-4">{{__('Vigilancia 24/7')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/concierge.svg')}}" alt="Concierge" class="w-100 mb-3">
                <div class="fs-4">{{__('Concierge')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/golf-cart.svg')}}" alt="Carrito de Golf" class="w-100 mb-3">
                <div class="fs-4">{{__('Carrito de Golf')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/spa.svg')}}" alt="Spa" class="w-100 mb-3">
                <div class="fs-4">{{__('Spa')}}</div>
            </div>

            <div class="col-4 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/coffe-shop.svg')}}" alt="Cafetería" class="w-100 mb-3">
                <div class="fs-4">{{__('Cafetería')}}</div>
            </div>

        </div>

    </div>

    {{-- Ubicación --}}
    @include('components.location-section')

</div>
