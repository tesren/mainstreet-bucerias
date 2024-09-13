<div>

    @section('titles')
        <title>Main Street Bucerías - {{__('Estilo de vida')}}</title>
        <meta name="description" content="{{__('En Main Street Bucerías, no solo adquieres un hogar de lujo, sino también un estilo de vida costero inigualable. Ubicado en el pintoresco pueblo de Bucerías, Nayarit, este desarrollo residencial te ofrece la oportunidad de vivir rodeado de la belleza natural del Pacífico Mexicano y disfrutar de una comunidad vibrante y acogedora.')}}">
    @endsection
    
    <div class="position-relative mb-6">
        
        @if ( app()->getLocale() == 'en' )
            <picture>
                <!-- Imagen para pantallas de escritorio -->
                <source media="(min-width: 768px)" srcset="{{asset('img/lifestyle-en-desktop.webp')}}">
            
                <!-- Imagen para pantallas de teléfono -->
                <source media="(max-width: 767px)" srcset="{{ asset('img/lifestyle-en-mobile-min.webp') }}">
            
                <!-- Fallback para navegadores que no soportan <picture> -->
                <img src="{{asset('img/lifestyle-en-desktop.webp')}}" alt="Lifestyle in Bucerías" class="w-100 object-fit-cover" style="height: 91vh;">
            </picture>
        @else
            <picture>
                <!-- Imagen para pantallas de escritorio -->
                <source media="(min-width: 768px)" srcset="{{asset('img/lifestyle-desktop.webp')}}">
            
                <!-- Imagen para pantallas de teléfono -->
                <source media="(max-width: 767px)" srcset="{{ asset('/img/lifestyle-mobile.webp') }}">
            
                <!-- Fallback para navegadores que no soportan <picture> -->
                <img src="{{asset('img/lifestyle-desktop.webp')}}" alt="Estilo de vida Bucerías" class="w-100 object-fit-cover" style="height: 91vh;">
            </picture>
        @endif

        <div class="position-absolute bottom-0 start-0 row justify-content-center w-100 z-3">
            <div class="col-12 col-lg-4 col-xxl-3 text-center">
                <a href="#info" class="link-light text-decoration-none mb-5 d-block">
                    <i class="fa-solid fa-circle-chevron-down fa-2x fa-bounce"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="position-relative text-center mb-6" id="info">

        <img src="{{asset('img/palms-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 z-1" style="mix-blend-mode: multiply;">

        @if ( app()->getLocale() == 'en' )
            <img src="{{asset('img/treasure-on-the-riviera-bucerias.webp')}}" alt="Treasure on the riviera nayarit" class="col-8 col-lg-3 col-xxl-2 mb-5">
        @else
            <img src="{{asset('img/tesoro-en-la-riviera.webp')}}" alt="Tesoro en la riviera nayarit" class="col-8 col-lg-3 col-xxl-2 mb-5">
        @endif

        <div class="container position-relative z-2 mb-6">
            <p class="fs-5 text-start mb-5 fw-light">
                {{__('Un pintoresco pueblo costero con gran desarrollo ubicado en la Riviera Nayarit, es un destino que combina la belleza natural con la calidez de su gente y una atmósfera relajada pero con muchisimas actividades a tu disposición. Estos son algunos de los puntos más destacables de Bucerías.')}}
            </p>

            <a href="{{route('inventory')}}" wire:navigate class="btn btn-green fs-5 px-5">{{__('Ver inventario disponible')}}</a>
        </div>

        {{-- Playas relajantes --}}
        <div class="row px-0 mb-6 position-relative z-2">

            <div class="col-12 col-lg-7 ps-2 ps-lg-0 mb-4 mb-lg-0">

                <div class="row">
                    <div class="col-12 col-lg-6 p-1">
                        <img src="{{asset('/img/beach-2.jpg')}}" alt="Playa Bucerías" class="w-100 shadow" data-fancybox="beach">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/beach-3.jpg')}}" alt="Playa Bucerías" class="w-100 shadow" data-fancybox="beach">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/beach-4.jpg')}}" alt="Playa Bucerías" class="w-100 shadow object-fit-cover" data-fancybox="beach" style="height: 211px;">
                    </div>
                    <div class="col-12 col-lg-6 p-0">
                        <div class="row">
                            <div class="col-8 p-1">
                                <img src="{{asset('/img/beach-5.jpg')}}" alt="Playa Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="beach" style="height: 211px;">
                            </div>
                            <div class="col-4 p-1">
                                <img src="{{asset('/img/beach-1.jpg')}}" alt="Playa Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="beach" style="height: 211px;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4 px-4 px-lg-5 text-start align-self-center">
                <h1 class="fs-2 fw-bold">{{__('Playas Relajantes y Escenarios Pintorescos')}}</h1>
                <p class="fs-5 fw-light">{{__('Las playas de Bucerías son un remanso de tranquilidad. Desde la dorada arena hasta las aguas cristalinas del Pacífico, cada rincón ofrece una vista impresionante. Puedes caminar por la orilla, tomar el sol o simplemente contemplar el horizonte.')}}</p>
            </div>

        </div>

        {{-- Deportes acuaticos --}}
        <div class="row justify-content-center justify-content-lg-end px-0 mb-6">

            <div class="col-12 col-lg-4 px-4 px-lg-5 text-start align-self-center order-2 order-lg-1">
                <h2 class="fs-2 fw-bold">{{__('Deportes Acuáticos y Aventuras Marinas')}}</h2>
                <p class="fs-5 fw-light">{{__('Si buscas emociones, Bucerías tiene opciones emocionantes. Practica el buceo, el paddleboarding o el kayak en las aguas cálidas del Pacífico. Las excursiones en barco también son populares para avistar ballenas y delfines.')}}</p>
            </div>

            <div class="col-12 col-lg-7 pe-2 pe-lg-0 order-1 order-lg-2 mb-4 mb-lg-0">

                <div class="row">
                    <div class="col-12 col-lg-6 p-1">
                        <img src="{{asset('/img/sports-1.jpg')}}" alt="Deportes acuáticos Bucerías" class="w-100 shadow" data-fancybox="sports" loading="lazy">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/sports-4.jpg')}}" alt="Deportes acuáticos Bucerías" class="w-100 shadow" data-fancybox="sports" loading="lazy">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/sports-2.jpg')}}" alt="Deportes acuáticos Bucerías" class="w-100 shadow object-fit-cover" data-fancybox="sports" loading="lazy" style="height: 211px;">
                    </div>
                    <div class="col-12 col-lg-6 p-0">
                        <div class="row">
                            <div class="col-8 p-1">
                                <img src="{{asset('/img/sports-3.jpg')}}" alt="Deportes acuáticos Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="sports" style="height: 211px;" loading="lazy">
                            </div>
                            <div class="col-4 p-1">
                                <img src="{{asset('/img/sports-5.jpg')}}" alt="Deportes acuáticos Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="sports" style="height: 211px;" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- Gastronomia --}}
        <div class="row px-0 mb-6">

            <div class="col-12 col-lg-7 ps-2 ps-lg-0 mb-4 mb-lg-0">

                <div class="row">
                    <div class="col-12 col-lg-6 p-1">
                        <img src="{{asset('/img/food-1.jpg')}}" alt="Gastronomía de Bucerías" class="w-100 shadow" data-fancybox="food" loading="lazy">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/food-2.jpg')}}" alt="Gastronomía de Bucerías" class="w-100 shadow" data-fancybox="food" loading="lazy">
                    </div>
                    <div class="col-12 col-lg-6 p-1 d-none d-lg-block">
                        <img src="{{asset('/img/food-3.jpg')}}" alt="Gastronomía de Bucerías" class="w-100 shadow object-fit-cover" data-fancybox="food" loading="lazy" style="height: 211px;">
                    </div>

                    <div class="col-12 col-lg-6 p-0">
                        <div class="row">
                            <div class="col-8 p-1">
                                <img src="{{asset('/img/food-4.jpg')}}" alt="Gastronomía de Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="food" style="height: 211px;" loading="lazy">
                            </div>
                            <div class="col-4 p-1">
                                <img src="{{asset('/img/food-5.jpg')}}" alt="Gastronomía de Bucerías" class="w-100 object-fit-cover shadow" data-fancybox="food" style="height: 211px;" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4 px-4 px-lg-5 text-start align-self-center">
                <h2 class="fs-2 fw-bold">{{__('Gastronomía para Todos los Gustos')}}</h2>
                <p class="fs-5 fw-light">{{__('Los restaurantes de Bucerías ofrecen una variedad de opciones culinarias. Desde mariscos frescos hasta platillos tradicionales mexicanos, hay algo para todos. No te pierdas la oportunidad de probar ceviche, tacos al pastor o tamales.')}}</p>
            </div>

        </div>

        {{-- Galería --}}
        <div class="row">

            <div class="col-6 col-lg-4 p-1 order-2 order-lg-1">
                <img src="{{asset('img/people-walking-beach.webp')}}" alt="Playas hermosas" class="w-100 object-fit-cover" style="height: 430px; object-position:left;" data-fancybox="gallery" loading="lazy">
            </div>

            <div class="col-6 col-lg-5 p-1 order-3 order-lg-2">
                <img src="{{asset('img/kayaks-river.webp')}}" alt="Playas hermosas" class="w-100 object-fit-cover" style="height: 430px;" data-fancybox="gallery" loading="lazy">
            </div>

            <div class="col-12 col-lg-3 p-1 order-1 order-lg-3">
                <img src="{{asset('img/waterfall.webp')}}" alt="Playas hermosas" class="w-100 object-fit-cover" style="height: 430px;" data-fancybox="gallery" loading="lazy">
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-lg-5 p-0">
                <img src="{{asset('img/shrimp.jpg')}}" alt="Gastronomía Variada" class="w-100 object-fit-cover p-1" data-fancybox="gallery" loading="lazy" style="height: 295px;">
                <img src="{{asset('img/boats-ocean.jpg')}}" alt="Yates y pangas" class="w-100 object-fit-cover p-1" data-fancybox="gallery" loading="lazy" style="height: 295px;">
            </div>

            <div class="col-12 col-lg-5 p-1 d-none d-lg-block">
                <img src="{{asset('img/mexican-art.webp')}}" alt="Arte y Cultura" class="w-100 object-fit-cover" style="height: 590px;" data-fancybox="gallery" loading="lazy">
            </div>

            <div class="col-12 col-lg-2 p-1 d-none d-lg-block">
                <img src="{{asset('img/man-splashing.jpg')}}" alt="Playas hermosas" class="w-100 object-fit-cover" style="height: 590px;" data-fancybox="gallery" loading="lazy">
            </div>
        </div>

    </div>

    {{-- Ubicación --}}
    @include('components.location-section')

    @script
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
    @endscript

</div>
