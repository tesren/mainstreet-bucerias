
<div class="position-relative">
    <div class="gradient-footer"></div>
    <img src="{{asset('img/waves-footer.webp')}}" alt="" class="w-100 position-relative z-2" loading="lazy">

    <footer class="position-relative z-2">

        <div class="row justify-content-evenly p-3 p-lg-5 bg-darkgreen">

            <div class="col-9 col-lg-3 mb-5 mb-lg-0 py-4 py-lg-0">
                <img src="{{asset('img/logo-full-blanco.webp')}}" alt="Logo de Main Street Bucerías" class="w-100">
            </div>

            <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                <div class="fs-4 mb-4">{{__('Contacto')}}</div>

                <a href="tel:+523221805380" class="d-block link-light fs-5 text-decoration-none mb-2">
                    <i class="fa-solid fa-phone"></i> 322 180 5380
                </a>

                <a href="mailto:ventas@mainstreetbucerias.com" class="d-block link-light fs-5 text-decoration-none mb-4">
                    <i class="fa-regular fa-envelope"></i> ventas@mainstreetbucerias.com
                </a>

                
                <a href="https://century21oceanrealty.com/" class="link-light text-decoration-none">
                    <img width="205px" src="{{asset('/img/c21-logo.svg')}}" alt="Logo de C21 Ocean Realty">
                    <div>{{__('Comercializador Exclusivo')}}</div>
                </a>
                
            </div>

            <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                <div class="fs-4 mb-4">{{__('Domicilio')}}</div>

                <a href="https://maps.app.goo.gl/EwD2KVgvFF3QvCxS6" class="link-light text-decoration-none fs-5 mb-4 d-block" target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-location-dot"></i> Francisco I. Madero 5, Flamingos, 63732 Bucerías, Nay.
                </a>

                <a href="{{route('privacy.policy')}}" wire:navigate class="d-block link-light fs-5 mb-3">
                    {{__('Aviso de Privacidad')}}
                </a>

                <a href="https://punto401.com" class="link-light text-decoration-none d-block fs-5">
                    {{__('Creado por')}} <img width="90px" src="{{asset('img/logo-p401.webp')}}" alt="Logo de Punto401 Marketing">
                </a>
            </div>

        </div>

        <div class="p-2 bg-green text-center">
            ©Copyright 2024 - {{date('Y')}}. {{__('Todos los derechos reservados por')}} Main Street Bucerías.
        </div>

    </footer>
</div>