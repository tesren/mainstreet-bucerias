<div>
    {{-- In work, do what you enjoy. --}}
    @section('titles')
        <title>{{__('Avances de Obra')}} - Main Street Bucerías</title>
        <meta name="description" content="{{ __('Mantente informado sobre cada etapa de construcción de Main Street Bucerías a través de nuestra página de avances de obra. Aquí encontrarás actualizaciones mensuales que documentan el desarrollo de este exclusivo proyecto de condominios, con fotos y videos que capturan cada detalle. Desde la cimentación hasta los acabados finales, podrás ver cómo tu futuro hogar toma forma, con la calidad y dedicación que caracterizan a nuestro equipo. Explora el proceso constructivo y acompáñanos en esta emocionante travesía hacia la creación de un nuevo ícono en Bucerías, Nayarit.') }}">
    @endsection


    {{-- Inicio --}}
    <div class="position-relative mb-6">
        <img src="{{asset('img/mainstreet-bucerias-rooftop.webp')}}" alt="Main Street Bucerías" class="w-100 object-fit-cover" style="height: 30vh;">

        <div class="fondo-oscuro"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 z-3 w-100 h-100">

            <div class="col-10 col-lg-3 align-self-center">
                @if (app()->getLocale() == 'en')
                    <img src="{{asset('img/construction.webp')}}" alt="Construction" class="w-100">
                @else
                    <img src="{{asset('img/avances-de-obra.webp')}}" alt="Avances de obra" class="w-100">
                @endif
            </div>

        </div>

    </div>

    @if ( isset($const_updates) )
    
        <div class="row justify-content-center mb-6 position-relative z-2">

            <img src="{{asset('img/palms-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 z-1">

            @foreach ($const_updates as $update)
                <div class="card rounded-0 col-11 col-lg-8 col-xxl-7 mb-5 p-0 shadow-5 position-relative z-2">
                    
                    @php
                        $portrait = asset('media/'.$update->portrait_path);
                        $date = __(date_format($update->date, 'F')).' '.date_format($update->date, 'Y');
                        $images = $update->getMedia('gallery_construction');
                    @endphp

                    <div class="position-relative">
                        <img src="{{$portrait}}" class="w-100" alt="Avance de Obra Main Street Bucerías - {{$date}}" style="max-height: 470px; object-fit:cover;">
                        <div class="row position-absolute top-0 start-0 justify-content-center h-100">
                            <div class="col-12 text-center align-self-center">
                                <a href="#construction-{{$update->id}}-1"  class="link-light" aria-label="Ver avance de obra de {{$date}}"><i class="fa-solid fa-4x fa-play"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-darkgreen d-flex position-relative overflow-hidden">

                        <img class="me-5 ms-4 align-self-center" src="{{asset('img/logo-simple-white.webp')}}" alt="Logo de Main Street Bucerías" width="60px">            
                        <h2 class="mb-0 lh-1 fw-light">{{$date}} <br> <span class="fs-5">{{__('Avance de Obra')}}</span> </h2>
                        
                    </div>

                    @if ($update->video_link)
                        <a href="{{$update->video_link}}" data-fancybox="construction-{{$update->id}}" class="d-none">{{__('Video de avance de obra')}} Main Street Bucerías - {{$date}}</a>
                    @endif

                    @foreach ($images as $image)
                        <img src="{{$image->getUrl('large')}}" alt="Avance de Obra Main Street Bucerías - {{$date}}" class="w-100 d-none" data-fancybox="construction-{{$update->id}}">
                    @endforeach
                      
                </div>
            @endforeach
        </div>

        {{-- $const_updates->links() --}}
        
    @endif


    @script
        <script>
            // This Javascript will get executed every time this component is loaded onto the page...
            Fancybox.bind("[data-fancybox]", {
                Hash: true,
            });
        </script>
    @endscript

</div>
