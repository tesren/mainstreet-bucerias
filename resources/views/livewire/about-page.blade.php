<div>

    @section('titles')
        <title>Main Street Bucerías - {{__('Nosotros')}}</title>
        <meta name="description" content="{{__('En Main Street Bucerías, nos enorgullece contar con el respaldo y la experiencia de Campero Desarrollador Inmobiliario, una empresa líder en el sector de bienes raíces. Con una sólida trayectoria en la creación de proyectos residenciales de alta calidad, Campero Desarrollador Inmobiliario se ha consolidado como sinónimo de excelencia, innovación y compromiso con la satisfacción de sus clientes.')}}">
    @endsection


    {{-- Inicio --}}
    <div class="row mb-6">
        <div class="col-12 col-lg-7 px-0">
            <img src="{{asset('img/campero.webp')}}" alt="Campero Desarrollador Inmobiliario" class="w-100">
        </div>

        <div class="col-12 col-lg-5 px-3 px-lg-5 my-5 align-self-center">

            @if ( app()->getLocale() == 'en' )
                <img class="w-100 mb-5" src="{{asset('img/we-are-your-best-investment.webp')}}" alt="We are your best investment">
            @else
                <img class="w-100 mb-5" src="{{asset('img/somos-tu-mejor-inversion.webp')}}" alt="Somos tu mejor Inversión">
            @endif
            
            <p class="fs-5">
                {{__('Con más de dos décadas de experiencia, lidera el mercado con desarrollos que prometen no solo un retorno seguro, sino también un impacto positivo en la comunidad.')}}
            </p>
        </div>
    </div>

    <div class="position-relative">
        <img src="{{asset('img/palms-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 z-1" style="mix-blend-mode: multiply;">
        
        <h1 class="text-center mb-5">{{__('Nuestros Desarrollos')}}</h1>

        <div class="container row justify-content-center position-relative z-2 text-center">

            <div class="col-12 col-lg-3 mb-5">
                <h2 class="fs-3">Main Street Valle Real</h2>
                <p class="fs-5">
                    2024 - {{__('Entrega')}} 2026, 55 m2 a 266 m2, Guadalajara, Jal.
                </p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h2 class="fs-3">Main Street La Americana</h2>
                <p class="fs-5">
                    2024 - {{__('Entrega')}} 2026, 42 m2 a 111 m2, Guadalajara, Jal.
                </p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h2 class="fs-3">Luum</h2>
                <p class="fs-5">
                    2022 - {{__('Entrega')}} 2024, 50 m2 a 107 m2, Guadalajara, Jal.
                </p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h2 class="fs-3">Libu</h2>
                <p class="fs-5">
                    2022 - {{__('Entrega')}} 2024, Bucerías, Nayarit.
                </p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h3>Garibaldi</h3>
                <p class="fs-5">{{__('32 Departamentos y 6 oficinas.')}}</p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h3>Alarcón</h3>
                <p class="fs-5">{{__('22 Departamentos y 2 comercios.')}}</p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h3>Makare</h3>
                <p class="fs-5">20 {{__('Apartamentos')}}, Bucerías, Nayarit.</p>
            </div>

            <div class="col-12 col-lg-3 mb-5">
                <h3>Arenka</h3>
                <p class="fs-5">12 {{__('Apartamentos')}}, Bucerías, Nayarit.</p>
            </div>

        </div>

    </div>

    @script
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));            
        </script>
    @endscript

</div>