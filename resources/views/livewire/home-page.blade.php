<div>
    
    @section('titles')
        <title>Main Street Bucerías - {{__('Preventa de Departamentos en Bucerías, Nayarit')}}</title>
        <meta name="description" content="{{__('¡Bienvenidos a Main Street Bucerías! Ubicado Bucerías, Nayarit, nuestra torre de condominios en preventa ofrece una combinación única de lujo, comodidad y estilo de vida costero. Este exclusivo desarrollo residencial está diseñado para quienes buscan comprar un hogar elegante y moderno, a solo unos pasos de las hermosas playas del Pacífico Mexicano.')}}">
    @endsection

    {{-- Inicio --}}
    <div class="position-relative mb-0 mb-lg-5">

        <video class="w-100 object-fit-cover" src="{{asset('videos/home-video.mp4')}}" autoplay muted loop poster="{{asset('img/home-poster.webp')}} " style="height: 91.5vh;"></video>

        <div class="bg-green-linear-gradient"></div>

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
    <div class="row justify-content-center justify-content-lg-start mb-6 pt-5 position-relative" id="info">

        <div class="col-12 col-lg-5 mb-5 mb-lg-0 px-0" data-aos="fade-down">

            <div id="carouselExample" class="carousel slide">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/img/building-home-new.webp')}}" alt="Fachada trasera Main Street Bucerías" class="w-100" loading="lazy">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('/img/building-front-new.webp')}}" class="d-block w-100" alt="Fachada frontal Main Street Bucerías">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>

        </div>

        <div class="col-12 col-lg-7 align-self-center position-relative z-3" data-aos="fade-up">

            <div class="row justify-content-center">

                <div class="col-12 col-lg-6">
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

                    <a href="{{route('inventory')}}" wire:navigate class="btn btn-green w-100 mb-3">{{__('Ver inventario disponible')}}</a>
                    <a class="btn btn-outline-light w-100" href="http://matchmakerpublicalb-1286503868.us-east-2.elb.amazonaws.com:90/?inventoryid=6690c3f14173acc240f3bf20" target="_blank" rel="noopener noreferrer">{{__('Ver recorrido virtual')}}</a>
                </div>

            </div>

        </div>

        {{-- Palmas decorativas --}}
        <img src="{{asset('/img/palms-decoration-left.webp')}}" class="position-absolute top-0 start-0 px-0 z-2 d-none d-lg-block" style="width: 250px;" alt="" loading="lazy">
        <img src="{{asset('/img/palms-decoration-right.webp')}}" class="position-absolute top-0 end-0 px-0 z-2 d-none d-lg-block" style="width: 200px;" alt="" loading="lazy">
        <img src="{{asset('/img/palms-decoration-bottom.webp')}}" class="position-absolute bottom-0 end-0 px-0 z-2" style="width: 200px;" alt="" loading="lazy">

    </div>

    {{-- Lugar ideal --}}
    <div class="row justify-content-end mb-6">

        <div class="col-12 px-0 position-relative" data-aos="fade-down">

            <div class="position-absolute top-0 start-0 m-4 z-3 bg-white p-4 rounded-3 shadow">
                @if (app()->getLocale() == 'en')
                    <img width="260px" src="{{asset('img/the-ideal-place.webp')}}" alt="{{__('The ideal place')}}"> 
                @else
                    <img width="260px" src="{{asset('img/el-lugar-ideal.webp')}}" alt="{{__('El lugar ideal')}}">
                @endif
            </div>

            <h2 class="d-none d-lg-block position-absolute bottom-0 start-0 ms-4 mb-5 z-3 bg-darkgreen px-4 py-2 rounded-3 shadow fs-4 fw-light">
                {{__('Lo mejor de Bucerías')}}
            </h2>
            
            <div id="carouselExampleIndicators" class="carousel slide">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner shadow">

                    <div class="carousel-item active">
                        <img src="{{asset('img/surfboard-beach.webp')}}" class="d-block w-100 object-fit-cover" alt="Playa Bucerías" style="height:90vh;" loading="lazy">
                        <div class="position-absolute end-0 bottom-0 z-3 rounded-start-3 bg-darkgreen py-2 px-4 fs-4 mb-5">
                            <i class="fa-solid fa-umbrella-beach"></i> {{__('Magníficas playas')}}
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('img/clima-ideal.webp')}}" class="d-block w-100 object-fit-cover" alt="Atardeceres en Bucerías" style="height:90vh; object-position:bottom;" loading="lazy">
                        <div class="position-absolute end-0 bottom-0 z-3 rounded-start-3 bg-darkgreen py-2 px-4 fs-4 mb-5">
                            <i class="fa-solid fa-sun"></i> {{__('Clima perfecto')}}
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('img/ambiente-pueblo-magico.webp')}}" class="d-block w-100 object-fit-cover" alt="Atardeceres en Bucerías" style="height:90vh;" loading="lazy">
                        <div class="position-absolute end-0 bottom-0 z-3 rounded-start-3 bg-darkgreen py-2 px-4 fs-4 mb-5">
                            <i class="fa-solid fa-shop"></i> {{__('Ambiente de pueblo mágico')}}
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('img/variedad-gastronomica.webp')}}" class="d-block w-100 object-fit-cover" alt="Gastronomía Mexicana" style="height:90vh;" loading="lazy">
                        <div class="position-absolute end-0 bottom-0 z-3 rounded-start-3 bg-darkgreen py-2 px-4 fs-4 mb-5">
                            <i class="fa-solid fa-utensils"></i> {{__('Variedad gastronómica')}}
                        </div>
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
            <img src="{{asset('img/living-in-paradise-amenities.webp')}}" class="col-10 col-lg-4 col-xxl-3 mb-5" alt="Living in Paradise" data-aos="fade-down">  
        @else
            <img src="{{asset('img/viviendo-en-el-paraiso.webp')}}" class="col-10 col-lg-4 col-xxl-3 mb-5" alt="Viviendo en el Paraíso" data-aos="fade-down">
        @endif
        
        <div class="row justify-content-evenly justify-content-lg-center" data-aos="fade-down">

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/pool.svg')}}" alt="Alberca Infinita" class="w-100 mb-3">
                <div class="fs-5">{{__('Alberca Infinita')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/sundecks.svg')}}" alt="Asoleaderos" class="w-100 mb-3">
                <div class="fs-5">{{__('Asoleaderos')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/terraza.svg')}}" alt="Terraza Lounge" class="w-100 mb-3">
                <div class="fs-5">{{__('Terraza Lounge')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/jacuzzi.svg')}}" alt="Jacuzzi" class="w-100 mb-3">
                <div class="fs-5">{{__('Jacuzzi')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/bar-lounge.svg')}}" alt="Terraza Bar" class="w-100 mb-3">
                <div class="fs-5">{{__('Terraza Bar')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/cameras.svg')}}" alt="Vigilancia 24/7" class="w-100 mb-3">
                <div class="fs-5">{{__('Vigilancia 24/7')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/concierge.svg')}}" alt="Concierge" class="w-100 mb-3">
                <div class="fs-5">{{__('Concierge')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/golf-cart.svg')}}" alt="Carrito de Golf" class="w-100 mb-3">
                <div class="fs-5">{{__('Carrito de Golf')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/spa.svg')}}" alt="Spa" class="w-100 mb-3">
                <div class="fs-5">{{__('Spa')}}</div>
            </div>

            <div class="col-5 col-lg-1 mb-5 px-2 px-lg-4">
                <img src="{{asset('img/amenities/coffe-shop.svg')}}" alt="Cafetería" class="w-100 mb-3">
                <div class="fs-5">{{__('Cafetería')}}</div>
            </div>

        </div>

    </div>

    {{-- Ubicación --}}
    @include('components.location-section')

    @script
        <script>
            AOS.init();
        </script>
    @endscript

</div>
