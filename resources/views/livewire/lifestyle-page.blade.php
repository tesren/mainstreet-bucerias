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
                <img src="{{asset('img/lifestyle-en-desktop.webp')}}" alt="Lifestyle in Bucerías" class="w-100" style="height: 91vh;">
            </picture>
        @else
            <picture>
                <!-- Imagen para pantallas de escritorio -->
                <source media="(min-width: 768px)" srcset="{{asset('img/lifestyle-desktop.webp')}}">
            
                <!-- Imagen para pantallas de teléfono -->
                <source media="(max-width: 767px)" srcset="{{ asset('/img/lifestyle-mobile.webp') }}">
            
                <!-- Fallback para navegadores que no soportan <picture> -->
                <img src="{{asset('img/lifestyle-desktop.webp')}}" alt="Estilo de vida Bucerías" class="w-100" style="height: 91vh;">
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

        <div class="container position-relative z-2">
            <p class="fs-5 text-start mb-5">
                {{__('Un pintoresco pueblo costero con gran desarrollo ubicado en la Riviera Nayarit, es un destino que combina la belleza natural con la calidez de su gente y una atmósfera relajada pero con muchisimas actividades a tu disposición. Estos son algunos de los puntos más destacables de Bucerías.')}}
            </p>

            <a href="{{route('inventory')}}" wire:navigate class="btn btn-brown fs-5 px-5">{{__('Ver inventario disponible')}}</a>


            <div class="row mt-6 text-start">

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/people-walking-beach.webp')}}" alt="Playa Bucerías" class="w-100 mb-3">
                    <h1 class="fs-5 fw-bold">{{__('Playas Relajantes y Escenarios Pintorescos')}}</h1>
                    <p>{{__('Las playas de Bucerías son un remanso de tranquilidad. Desde la dorada arena hasta las aguas cristalinas del Pacífico, cada rincón ofrece una vista impresionante. Puedes caminar por la orilla, tomar el sol o simplemente contemplar el horizonte.')}}</p>

                </div>

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/kayaks-river.webp')}}" alt="{{__('Deportes Acuáticos y Aventuras Marinas')}}" class="w-100 mb-3">
                    <h2 class="fs-5 fw-bold">{{__('Deportes Acuáticos y Aventuras Marinas')}}</h2>
                    <p>{{__('Si buscas emociones, Bucerías tiene opciones emocionantes. Practica el buceo, el paddleboarding o el kayak en las aguas cálidas del Pacífico. Las excursiones en barco también son populares para avistar ballenas y delfines.')}}</p>

                </div>

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/waterfall.webp')}}" alt="{{__('Montañas y Senderos Escénicos')}}" class="w-100 mb-3">
                    <h2 class="fs-5 fw-bold">{{__('Montañas y Senderos Escénicos')}}</h2>
                    <p>{{__('Si eres amante de la naturaleza, no puedes perderte las montañas que rodean Bucerías. Desde sus cimas, se obtienen vistas panorámicas del océano y los exuberantes paisajes verdes. Los senderos para caminatas son ideales para explorar la flora y fauna local.')}}</p>

                </div>

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/mexican-food-2.webp')}}" alt="{{__('Gastronomía para Todos los Gustos')}}" class="w-100 mb-3">
                    <h3 class="fs-5 fw-bold">{{__('Gastronomía para Todos los Gustos')}}</h3>
                    <p>{{__('Los restaurantes de Bucerías ofrecen una variedad de opciones culinarias. Desde mariscos frescos hasta platillos tradicionales mexicanos, hay algo para todos. No te pierdas la oportunidad de probar ceviche, tacos al pastor o tamales.')}}</p>

                </div>

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/mexican-art.webp')}}" alt="{{__('Arte y Cultura en Cada Esquina')}}" class="w-100 mb-3">
                    <h2 class="fs-5 fw-bold">{{__('Arte y Cultura en Cada Esquina')}}</h2>
                    <p>{{__('Galerías de arte, talleres de artesanías y eventos culturales llenan las calles de Bucerías. Los artistas locales exhiben sus obras, y puedes encontrar coloridas artesanías que reflejan la identidad de la región.')}}</p>

                </div>

                <div class="col-12 col-lg-6 px-2 px-lg-4 mb-5">

                    <img src="{{asset('img/people-sunset.webp')}}" alt="{{__('Hospitalidad Inigualable')}}" class="w-100 mb-3">
                    <h3 class="fs-5 fw-bold">{{__('Hospitalidad Inigualable')}}</h3>
                    <p>{{__('Los lugareños de Bucerías son conocidos por su amabilidad genuina. Te recibirán con una sonrisa y estarán dispuestos a compartir historias sobre su comunidad y tradiciones.')}}</p>

                </div>

                <div class="col-12 px-2 px-lg-4 mb-5">
                    <img src="{{asset('img/surfboard-beach.webp')}}" alt="{{__('Sensación de Paz y Seguridad')}}" class="w-100 mb-3">
                    <h3 class="fs-5 fw-bold">{{__('Sensación de Paz y Seguridad')}}</h3>
                    <p>{{__('Bucerías es un oasis de tranquilidad. A diferencia de los destinos turísticos masificados, aquí puedes desconectar y disfrutar de la serenidad. La seguridad es una prioridad, lo que permite a los visitantes relajarse sin preocupaciones.')}}</p>
                    <p>{{__('En resumen, Bucerías es un lugar donde el tiempo parece detenerse. Sus playas, su gente acogedora y su entorno natural te invitan a descubrir un paraíso escondido en la costa mexicana.')}}</p>

                </div>

            </div>


        </div>

    </div>

    {{-- Ubicación --}}
    @include('components.location-section')

</div>
