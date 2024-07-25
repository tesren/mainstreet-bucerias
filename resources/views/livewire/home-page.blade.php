<div>
    
    @section('titles')
        <title>Main Street Bucerías - {{__('Preventa de Departamentos en Bucerías, Nayarit')}}</title>
        <meta name="description" content="">
    @endsection

    {{-- Inicio --}}
    <div class="position-relative mb-6">

        <video class="w-100 object-fit-cover" src="{{asset('videos/home-video.mp4')}}" autoplay muted loop poster="{{asset('img/home-poster.webp')}} " style="height: 91.5vh;"></video>

        <div class="bg-brown-linear-gradient"></div>

        <div class="position-absolute bottom-0 start-0 row justify-content-center w-100 z-3">
            <div class="col-12 col-lg-4 col-xxl-3 text-center">
                <img src="{{asset('img/el-lugar-para-ti.webp')}}" alt="El lugar para ti" class="w-100 mb-5">

                <a href="#info" class="link-light text-decoration-none mb-5 d-block">
                    <i class="fa-solid fa-circle-chevron-down fa-2x fa-bounce"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- Info general --}}
    <div class="row justify-content-evenly mb-6">

        <div class="col-12 col-lg-5">
            
        </div>

        <div class="col-12 col-lg-4">
            
        </div>

    </div>

</div>
