<div class="mb-5 position-relative z-2">

    <div class="badge bg-light text-success fs-4 d-none d-lg-block rounded-pill position-absolute start-50 top-0 fw-normal shadow" style="transform: translate(-50%, -50%)">
        <i class="fa-solid fa-location-dot"></i> Francisco I. Madero 5, Flamingos, 63732 Bucerías, Nay.
    </div>

    <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.6403785520415!2d-105.3381529233492!3d20.755402830970205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842141005ebd8381%3A0xe20d3b48f0c61dbe!2sMain%20Street%20Bucerias!5e0!3m2!1ses-419!2smx!4v1722023202471!5m2!1ses-419!2smx" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    <div class="row justify-content-evenly">

        <div class="col-12 mb-5 text-center">
            @if (app()->getLocale() == 'en')
                <img class="px-4" width="400px" src="{{asset('img/travel-times.webp')}}" alt="{{__('Travel Times')}}">
            @else
                <img class="px-4" width="400px" src="{{asset('/img/tiempos-de-traslado.webp')}}" alt="{{__('Tiempos de traslado')}}">
            @endif
        </div>

        <div class="col-12 col-lg-5 mb-5 mb-lg-0">

            <div class="row bg-darkgreen-low-opacity mb-2 fs-4">
                <div class="col-7 col-lg-5">
                    <div class="">{{__('Lugar')}}</div>
                </div>

                <div class="col-5 col-lg-3 text-center">
                    <div class="">{{__('Caminando')}}</div>
                </div>

                <div class="col-4 text-center d-none d-lg-block">
                    <div class="">{{__('Bicicleta')}}</div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 col-lg-5 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-umbrella-beach"></i> {{__('Acceso a Playa')}}</div>
                </div>

                <div class="col-5 col-lg-3 pe-0 pe-lg-2">
                    <div class="bg-darkgreen-low-opacity text-center h-100">2 min. <i class="fa-solid fa-person-walking"></i></div>
                </div>

                <div class="col-4 px-0 d-none d-lg-block">
                    <div class="bg-darkgreen-low-opacity text-center">1 min. <i class="fa-solid fa-person-biking"></i></div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 col-lg-5 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-utensils"></i> {{__('Corredor Gastronómico')}}</div>
                </div> 
                <div class="col-5 col-lg-3 pe-0 pe-lg-2">
                    <div class="bg-darkgreen-low-opacity text-center h-100">3 min. <i class="fa-solid fa-person-walking"></i></div>
                </div> 
                <div class="col-4 px-0 d-none d-lg-block">
                    <div class="bg-darkgreen-low-opacity text-center h-100">2 min. <i class="fa-solid fa-person-biking"></i></div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 col-lg-5 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-city"></i> {{__('Centro de Bucerías')}}</div>
                </div> 
                <div class="col-5 col-lg-3 pe-0 pe-lg-2">
                    <div class="bg-darkgreen-low-opacity text-center h-100">4 min. <i class="fa-solid fa-person-walking"></i></div>
                </div> 
                <div class="col-4 px-0 d-none d-lg-block">
                    <div class="bg-darkgreen-low-opacity text-center">3 min. <i class="fa-solid fa-person-biking"></i></div>
                </div>
            </div>

        </div>

        <div class="col-12 col-lg-5">

            <div class="row bg-darkgreen-low-opacity mb-2 fs-4">
                <div class="col-7">
                    <div class="">{{__('Lugar')}}</div>
                </div>

                <div class="col-5 text-center">
                    <div class="">{{__('Automóvil')}}</div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-plane-departure"></i> {{__('Aeropuerto Internacional')}}</div>
                </div> 
                <div class="col-5 pe-0 text-center">
                    <div class="bg-darkgreen-low-opacity h-100">22 min. <i class="fa-solid fa-car-side"></i></div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-cross"></i> {{__('La Cruz de Huanacaxtle')}}</div>
                </div> 
                <div class="col-5 pe-0 text-center">
                    <div class="bg-darkgreen-low-opacity h-100">12 min. <i class="fa-solid fa-car-side"></i></div>
                </div>
            </div>

            <div class="fs-4 mb-2 row">
                <div class="col-7 px-0">
                    <div class="bg-darkgreen-low-opacity"><i class="fa-solid fa-anchor"></i> {{__('Punta de Mita')}}</div>
                </div> 
                <div class="col-5 pe-0 text-center">
                    <div class="bg-darkgreen-low-opacity h-100">25 min. <i class="fa-solid fa-car-side"></i></div>
                </div>
            </div>
        </div>

    </div>

</div>