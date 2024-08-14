<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @section('titles')
        <title>{{__('Inventario')}} - Main Street Bucerías</title>
        <meta name="description" content="{{ __('Bienvenido a nuestra página de inventario, donde podrás explorar de manera visual y detallada los distintos condominios disponibles en Main Street Bucerías. Hemos diseñado una experiencia interactiva que te permite ver todos los detalles de cada unidad en un solo vistazo, facilitando tu proceso de selección.') }}">
    @endsection


    {{-- Inicio --}}
    <div class="position-relative mb-4">
        <img src="{{asset('img/downhouse-interior.webp')}}" alt="Main Street Bucerías" class="w-100 object-fit-cover" style="height: 30vh;">

        <div class="fondo-oscuro"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 z-3 w-100 h-100">

            <div class="col-10 col-lg-3 align-self-center">
                @if (app()->getLocale() == 'en')
                    <img src="{{asset('img/inventory-take-a-look.webp')}}" alt="Inventory, take a look at our units" class="w-100">
                @else
                    <img src="{{asset('img/inventario-mira-nuestras-unidades.webp')}}" alt="Inventario, mira nuestras unidades" class="w-100">
                @endif
            </div>

        </div>

    </div>

    <div class="row justify-content-evenly position-relative">

        <img src="{{asset('img/palms-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 z-1">

        {{-- Vistas --}}
        <div class="col-12 col-lg-7 px-0 position-relative z-2 order-2 order-lg-1">

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-oceanview" role="tabpanel" aria-labelledby="pills-oceanview-tab" tabindex="0">
                    <div class="position-relative">
                        <img src="{{asset('img/inventory-ocean.webp')}}" alt="Fachada con vista al mar - Main Street Bucerías" class="w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0 px-0 h-100" viewBox="0 0 1200 1200">

                            @foreach ($oceanview_units as $unit)
                                <a href="#unit-{{$unit->id}}" data-bs-toggle="modal" data-bs-target="#unit-{{$unit->id}}" class="text-decoration-none link-light">
    
                                    <polygon class="{{ strtolower($unit->status) }}-class" points="{{$unit->shape->points ?? '0,0'}}"></polygon>
                                    
                                    <text x="{{$unit->shape->text_x ?? 0;}}" y="{{$unit->shape->text_y ?? 0; }}"
                                        font-size="32" font-weight="light" fill="#fff">
                
                                        <tspan class="fw-semibold">{{$unit->name}}</tspan>
                                        
                                    </text>
                                </a>  
                                
                            @endforeach
                        </svg>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="pills-streetview" role="tabpanel" aria-labelledby="pills-streetview-tab" tabindex="0">
                    <div class="position-relative">
                        <img src="{{asset('img/inventory-street.webp')}}" alt="Fachada con vista a la calle - Main Street Bucerías" class="w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="position-absolute start-0 top-0 px-0 h-100" viewBox="0 0 1200 1200">

                            @foreach ($streetview_units as $unit)
                                <a href="#unit-{{$unit->id}}" data-bs-toggle="modal" data-bs-target="#unit-{{$unit->id}}" class="text-decoration-none link-light">
    
                                    <polygon class="{{ strtolower($unit->status) }}-class" points="{{$unit->shape->points ?? '0,0'}}"></polygon>
                                    
                                    <text x="{{$unit->shape->text_x ?? 0;}}" y="{{$unit->shape->text_y ?? 0; }}"
                                        font-size="32" font-weight="light" fill="#fff">
                
                                        <tspan class="fw-semibold">{{$unit->name}}</tspan>
                                        
                                    </text>
                                </a>  
                                
                            @endforeach
                        </svg>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-12 col-lg-5 align-self-center position-relative z-2 order-1 order-lg-2">

            <div class="text-center text-lg-start d-none d-lg-block">
                @if (app()->getLocale() == 'en')
                    <img class="w-75 mb-5" src="{{asset('img/inventory-brown.webp')}}" alt="{{__('Inventory, take a look at our units')}}">
                @else
                    <img class="w-75 mb-5" src="{{asset('img/inventario-cafe.webp')}}" alt="{{__('Inventario, mira nuestras unidades')}}">  
                @endif
            </div>

            <h1 class="fs-2">{{__('Elige la vista que más te guste')}}</h1>
            <p class="fs-5 mb-4">{{__('Da clic en una unidad para ver más detalles')}}</p>

            <div class="d-flex mb-5 fs-5">
                <div class="me-3 me-lg-4">
                    <span class="px-2 py-1 bg-success text-success rounded-2">D</span> {{__('Disponible')}}
                </div>

                <div class="me-3 me-lg-4">
                    <span class="px-2 py-1 bg-warning text-warning rounded-2">A</span> {{__('Apartado')}}
                </div>

                <div>
                    <span class="px-2 py-1 bg-danger text-danger rounded-2">V</span> {{__('Vendido')}}
                </div>
            </div>

            {{-- Navegción entre pestañas --}}
            <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">

                <li class="nav-item me-3" role="presentation">
                    <button class="nav-link active px-5" id="pills-oceanview-tab" data-bs-toggle="pill" data-bs-target="#pills-oceanview" type="button" role="tab" aria-controls="pills-oceanview" aria-selected="true">{{__('Vista a la Playa')}}</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5" id="pills-streetview-tab" data-bs-toggle="pill" data-bs-target="#pills-streetview" type="button" role="tab" aria-controls="pills-streetview" aria-selected="false">{{__('Vista Frontal')}}</button>
                </li>
                
            </ul>


            {{-- Tipo de inventario --}}
            <h2 class="fs-4 mb-4">{{__('Selecciona el estilo de inventario que te gustaría ver')}}</h2>
            <a href="{{route('inventory')}}" class="btn btn-outline-brown me-3 px-4 px-lg-5 fs-5" wire:navigate><i class="fa-solid fa-image"></i> {{__('Gráfico')}}</a>
            <a href="{{route('search')}}" class="btn btn-outline-brown px-4 px-lg-5 fs-5" wire:navigate><i class="fa-solid fa-list"></i> {{__('Lista')}}</a>

        </div>

    </div>


    @foreach ($units as $unit)

        {{-- Modal --}}
        <div class="modal fade" id="unit-{{$unit->id}}" tabindex="-1" aria-labelledby="unit-{{$unit->id}}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-brown">

                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="unit-{{$unit->id}}Label">{{__('Unidad')}} {{$unit->name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body text-center">
                        @php
                            $blueprint = asset('media/'.$unit->blueprint_path);
                        @endphp

                        @if ($unit->blueprint_path)
                            <img src="{{ $blueprint }}" alt="{{__('Unidad')}} {{$unit->name}} " class="w-100">
                        @endif

                        <div class="d-flex justify-content-center fs-5 mt-4 mb-3">

                            <div class="me-3">
                                <i class="fa-solid fa-bed"></i> {{$unit->bedrooms}}@if($unit->flexrooms == 1).5 @endif
                            </div>
            
                            <div class="me-3">
                                <i class="fa-solid fa-bath"></i> {{$unit->bathrooms}}
                            </div>
                            
                            <div class="me-3">
                                <i class="fa-solid fa-house"></i> {{$unit->total_const}}m²
                            </div>
                        </div>

                        @if ($unit->status != 'Vendida')
                            <div class="fw-light fs-3">
                                ${{ number_format($unit->price, 2) }} {{$unit->currency}}
                            </div>

                            @if ($unit->lockoff)
                                <div class="mb-3"><i class="fa-regular fa-circle-check"></i> {{__('Opción a Lockoff')}}</div>
                            @endif

                        @else
                            <div class="badge bg-danger rounded-pill fw-normal fs-4 mb-2">
                                {{__($unit->status)}}
                            </div>
                        @endif
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-brown" data-bs-dismiss="modal">{{__('Cerrar')}}</button>
                        <a href="{{route('unit', ['name' => $unit->name])}}" wire:navigate class="btn btn-brown">{{__('Más información')}}</a>
                    </div>

                </div>
            </div>
        </div>

    @endforeach


</div>