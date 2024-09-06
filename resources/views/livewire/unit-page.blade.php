<div>
    {{-- Success is as dangerous as failure. --}}

    @section('titles')
        <title>{{__('Condominio')}} {{$unit->name}} - Main Street Bucerías</title>
        <meta name="description" content="{{__('Descubre este espectacular condominio que combina lujo, comodidad y vistas impresionantes. Con un diseño espacioso y moderno, esta unidad cuenta con :bedrooms recámaras, :bathrooms baños, y un área total de :area m². Imagina despertar cada mañana con la brisa marina y disfrutar de atardeceres desde la comodidad de tu hogar, todo en una ubicación privilegiada en Bucerías, Nayarit. Vive la experiencia de un estilo de vida costero de primera clase en Main Street Bucerías.', 
                [
                    'bedrooms' => $unit->bedrooms,
                    'bathrooms' => $unit->bathrooms,
                    'area' => $unit->total_const
                ])}}">
    @endsection

    {{-- Inicio --}}
    <div class="row justify-content-center mb-5">

        @php
            $gallery = $unit->getMedia('gallery');

            $status_class = $unit->status;

            switch ($status_class) {
                case 'Disponible':
                    $status_class = 'bg-success';
                    break;

                case 'Apartada':
                    $status_class = 'bg-warning';
                    break;

                case 'Vendida':
                    $status_class = 'bg-danger';
                    break;
                
                default:
                    $status_class = 'bg-success';
                    break;
            }
        @endphp

        @if (count($gallery) >= 3)
            <div class="col-12 col-lg-7 p-0 p-lg-1 position-relative">
                <img src="{{ $gallery[0]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="w-100 object-fit-cover" style="height: 60vh;" data-fancybox="gallery">

                <a href="#gallery-1" class="btn btn-outline-light rounded-3 position-absolute end-0 bottom-0 m-4 z-3 fs-5 shadow">
                    <i class="fa-regular fa-images"></i> {{__('Ver Imágenes')}}
                </a>
            </div>

            <div class="col-12 col-lg-5 p-0 p-lg-1">
                <img src="{{ $gallery[1]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="d-none d-lg-block w-100 object-fit-cover pb-2" style="height: 30vh;" data-fancybox="gallery">
                <img src="{{ $gallery[2]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="d-none d-lg-block w-100 object-fit-cover" style="height: 30vh;" data-fancybox="gallery">
            </div>
        @endif
        

        @if ( count($gallery) > 3 )
            @for ($i=3; $i<count($gallery); $i++)
                <img src="{{ $gallery[$i]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="d-none" data-fancybox="gallery">
            @endfor
        @endif

    </div>

    {{-- Características --}}
    <div class="row justify-content-evenly mb-6">

        <div class="col-12 col-lg-5 mb-5 mb-lg-0">
            <h1>{{__('Unidad')}} {{$unit->name}}</h1>
            <p class="mb-5">
                {{__('Descubre este espectacular condominio que combina lujo, comodidad y vistas impresionantes. Con un diseño espacioso y moderno, esta unidad cuenta con :bedrooms recámaras, :bathrooms baños, y un área total de :area m². Imagina despertar cada mañana con la brisa marina y disfrutar de atardeceres desde la comodidad de tu hogar, todo en una ubicación privilegiada en Bucerías, Nayarit. Vive la experiencia de un estilo de vida costero de primera clase en Main Street Bucerías.', 
                [
                    'bedrooms' => $unit->bedrooms,
                    'bathrooms' => $unit->bathrooms,
                    'area' => $unit->total_const
                ])
                }}
            </p>

            <div class="text-center text-lg-start">
                <h2 class="fs-3 mb-4 mb-lg-2">{{__('Características')}}</h2>
                <div class="row fs-5 fw-normal mb-5">
    
                    <div class="col-12 col-lg-4 mb-3">
                        <i class="fa-solid fa-bed"></i> {{$unit->bedrooms}} {{__('Recámaras')}}
                    </div>
    
                    <div class="col-12 col-lg-4 mb-3">
                        <i class="fa-solid fa-bath"></i> {{$unit->bathrooms}} {{__('Baños')}}
                    </div>
    
                    <div class="col-12 col-lg-4 mb-3">
                        <i class="fa-solid fa-arrow-turn-up"></i> {{__('Nivel')}} {{$unit->floor}}
                    </div>
    
                </div>
    
                @if ($unit->total_const != 0)
                    <h2 class="fs-3 mb-4 mb-lg-2">{{__('Dimensiones')}}</h2>
                    <div class="row fs-5 fw-normal">
        
                        <div class="col-12 col-lg-4 mb-3">
                            <i class="fa-solid fa-ruler-combined"></i> {{__('Interior')}}: {{$unit->interior_const}}m²
                        </div>
        
                        @if ($unit->exterior_const > 0)
                            <div class="col-12 col-lg-4 mb-3">
                                <i class="fa-solid fa-expand"></i> {{__('Exterior')}}: {{$unit->exterior_const}}m²
                            </div>
                        @endif
        
                        <div class="col-12 col-lg-4 mb-3">
                            <i class="fa-solid fa-house-chimney"></i> {{__('Total')}}: {{$unit->total_const}}m²
                        </div>
        
                    </div>
                @endif
                
            </div>
        </div>

        <div class="col-12 col-lg-4 text-center align-self-center">

            @if ($unit->status != 'Vendida' and $unit->price != 0)
                <div class="badge {{$status_class}} rounded-pill fw-normal fs-5 mb-2">
                    {{__($unit->status)}}
                </div>

                <div class="fs-1 mb-2">
                    ${{ number_format($unit->price, 2) }} {{$unit->currency}}
                </div>

                <a href="https://wa.me/523221805380?text={{ urlencode(__('Hola, vengo del sitio web de Main Street Bucerías')) }}" target="_blank" rel="noreferrer noopener" class="btn btn-green">{{__('¿Necesitas más información?')}}</a>

            @elseif($unit->status == 'Disponible' and $unit->price == 0 )

                <div class="badge {{$status_class}} rounded-pill fw-normal fs-5 mb-2">
                    {{__($unit->status)}}
                </div>

                <div class="fs-3 fw-regular mb-3">
                    {{__('¿Te interesa esta Unidad? Da clic en el siguiente botón para más información')}}
                </div>

                <a href="https://wa.me/523221805380?text={{ urlencode(__('Hola, vengo del sitio web de Main Street Bucerías')) }}" target="_blank" rel="noreferrer noopener" class="btn btn-green shadow">{{__('Más información')}}</a>

            @else
                <div class="text-center">
                    <div class="badge {{$status_class}} rounded-pill fw-normal fs-4 mb-2">
                        {{__('Unidad')}} {{__($unit->status)}}
                    </div>
    
                    <a href="https://wa.me/523221805380?text={{ urlencode(__('Hola, vengo del sitio web de Main Street Bucerías')) }}" target="_blank" rel="noreferrer noopener" class="btn btn-green d-block w-50 mx-auto">{{__('¿Necesitas algo similar?')}}</a>
    
                </div>            
            @endif


        </div>

    </div>

    
    <div class="row justify-content-evenly mb-6 position-relative z-2">

        {{-- Planos --}}
        <div class="col-12 col-lg-5 mb-5 mb-lg-0 align-self-center">
            <h3 class="fs-2">{{__('Planos')}}</h3>
            <img src="{{ asset('media/'.$unit->blueprint_path) }}" alt="{{__('Planos de la unidad')}} {{$unit->name}}" class="w-100" data-fancybox="blueprint" data-caption="{{__('Planos de la unidad')}} {{$unit->name}}" loading="lazy">

            @if ($unit->lockoff_path)
                <h3 class="fs-2 mt-5">{{__('Planos con opción a Lockoff')}}</h3>
                <img src="{{ asset('media/'.$unit->lockoff_path) }}" alt="{{__('Planos de la unidad')}} {{$unit->name}}" class="w-100" data-fancybox="blueprint" data-caption="{{__('Planos de la unidad')}} {{$unit->name}}" loading="lazy">
            @endif

        </div>

        {{-- Planes de pago --}}
        @if ($unit->status != 'Vendida' and $unit->floor != 3)
            
            <div class="col-12 col-lg-4 text-center align-self-center">

                <div class="row">

                    <div class="col-12 col-lg-11 order-2 order-lg-1 px-0">
                        <div class="tab-content" id="myTabContent">
                            @php $j = 1; @endphp
                            @foreach ( $unit->paymentPlans as $plan )

                                <div class="tab-pane bg-light text-success shadow p-4 p-lg-5 fade @if($j==1) show active @endif" id="tab-pane-{{$plan->id}}" role="tabpanel" aria-labelledby="plan-tab-{{$plan->id}}" tabindex="0">
                                    <h3 class="fs-2 fw-bold">{{__('Esquema')}}</h3>
                                    <div class="mb-4">{{__('Descuento del')}} {{$plan->discount}}%</div>

                                @php
                                    $discounted_price = $unit->price * ((100 - $plan->discount)/100 );
                                    $down_payment = $discounted_price * ( $plan->down_payment/100 );
                                    $months_total = $discounted_price * ( $plan->months_percent/100 );
                                    $final_payment = $discounted_price * ( $plan->closing_payment/100 );
                                @endphp 

                                    <table class="table table-striped mb-4">
                                        
                                        <tbody>

                                        <tr>
                                            <td>{{__('Precio de Lista')}}</td>
                                            <td class="text-decoration-line-through">${{ number_format($unit->price, 2) }} {{$unit->currency}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{__('Precio con :discount% de descuento', ['discount'=>$plan->discount] )}}</td>
                                            <td>${{ number_format($discounted_price, 2) }} {{$unit->currency}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{$plan->down_payment }}% {{__('de enganche a 6 pagos')}}</td>
                                            <td>${{ number_format($down_payment, 2) }} {{$unit->currency}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{__(':percent% en :amount mensualidades', ['percent'=>$plan->months_percent, 'amount'=>$plan->months_amount ] )}}</td>
                                            <td>${{ number_format($months_total, 2) }} {{$unit->currency}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{$plan->closing_payment }}% {{__('de pago final')}}</td>
                                            <td>${{ number_format($final_payment, 2) }} {{$unit->currency}}</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>

                                    <a href="https://wa.me/523221805380?text={{ urlencode(__('Hola, vengo del sitio web de Main Street Bucerías')) }}" target="_blank" rel="noreferrer noopener" class="btn btn-green fs-5 px-5">{{__('Agenda una cita')}}</a>

                                </div>
            
                                @php $j++; @endphp
                            @endforeach
            
                        </div>
                    </div>

                    <div class="col-12 col-lg-1 order-1 order-lg-2 px-0">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">

                            @php $i = 1; @endphp
                            @foreach ($unit->paymentPlans as $plan)

                                <li class="nav-item mb-0 mb-lg-3 me-2 me-lg-0" role="presentation">
                                    <button class="nav-link @if($i==1) active @endif" id="plan-tab-{{$plan->id}}" data-bs-toggle="tab" data-bs-target="#tab-pane-{{$plan->id}}" type="button" role="tab" aria-controls="tab-pane-{{$plan->id}}" @if($i==1) aria-selected="true" @endif>
                                        {{$plan->name}}
                                    </button>
                                </li>

                                @php $i++; @endphp
                            @endforeach
                            
                        </ul>
                    </div>

                </div>

            </div>
        @endif

    </div>

    @script
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
    @endscript

</div>
