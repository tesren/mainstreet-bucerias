<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @section('titles')
        <title>Main Street Bucerías - {{__('Lista de condominios')}}</title>
        <meta name="description" content="{{__('Bienvenido a la página de búsqueda de condominios de Main Street Bucerías, donde podrás explorar nuestra exclusiva selección de condominios en preventa. Utiliza nuestras herramientas de filtrado para encontrar el hogar perfecto que se ajuste a tus necesidades y preferencias.')}}">
    @endsection

    <div class="position-relative mb-6">
        <img src="{{asset('img/downhouse-interior.webp')}}" alt="Main Street Bucerías" class="w-100 object-fit-cover" style="height: 30vh;">

        <div class="fondo-oscuro"></div>

        <div class="row justify-content-center position-absolute top-0 start-0 z-3 w-100 h-100">

            <div class="col-10 col-lg-3 align-self-center">
                <img src="{{asset('img/inventario-mira-nuestras-unidades.webp')}}" alt="Inventario, mira nuestras unidades" class="w-100">
            </div>

        </div>

    </div>

    <div class="position-relative">

        <img src="{{asset('img/palms-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 z-1" style="mix-blend-mode: multiply;">

        <div class="container position-relative z-2">

            <div class="row justify-content-between mb-5">

                <div class="col-12 col-lg-5">
                    <h1>{{__('Búsqueda de Condominios')}}</h1>
                    <p>{{__('Busca de forma más práctica por medio de nuestro formulario y nuestra tabla.')}}</p>
                    <div class="d-flex mb-4">
                        <div class="me-3">
                            <span class="px-2 py-1 bg-success text-success rounded-2">D</span> {{__('Disponible')}}
                        </div>

                        <div class="me-3">
                            <span class="px-2 py-1 bg-warning text-warning rounded-2">A</span> {{__('Apartado')}}
                        </div>

                        <div>
                            <span class="px-2 py-1 bg-danger text-danger rounded-2">V</span> {{__('Vendido')}}
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5 align-self-center">
                    <div class="mb-3 fs-5">{{__('Selecciona el estilo de inventario que te gustaría ver')}}</div>

                    <a href="#" class="btn btn-outline-brown me-3" wire:navigate><i class="fa-solid fa-image"></i> {{__('Gráfico')}}</a>

                    <a href="{{route('search')}}" class="btn btn-outline-brown" wire:navigate><i class="fa-solid fa-list"></i> {{__('Lista')}}</a>
                </div>

            </div>

            

            {{-- Formulario de búsqueda --}}
            <div class="row justify-content-center mb-5">

                <div class="col-12 px-2 px-lg-0">
                    <form wire:submit="search">

                        <div class="rounded-2 input-group shadow-4" id="search_input_group">
                                    
                            <div class="form-floating mb-3 mb-lg-0">
            
                                <select class="form-select" id="floor" wire:model="floor" aria-label="{{__('Piso')}}">
                                <option value="0">{{__('Cualquier piso')}}</option>
            
                                @for ($i=1; $i<=9; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                <option value="10">PH</option>
            
                                </select>
            
                                <label for="floor">{{__('Piso')}}</label>
                            </div>
            
                            <div class="form-floating mb-3 mb-lg-0">
                                <select class="form-select" id="bedrooms" wire:model="bedrooms" aria-label="{{__('Recámaras')}}">
                                <option value="0">{{__('Cualquier cantidad')}}</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                </select>
                                <label for="bedrooms">{{__('Recámaras')}}</label>
                            </div>

                            <div class="form-floating mb-3 mb-lg-0">
                                <select class="form-select" id="view" wire:model="view" aria-label="{{__('Vista')}}">
                                    <option value="0">{{__('Cualquier vista')}}</option>
                                    <option value="Mar">{{__('Mar')}}</option>
                                    <option value="Golf">{{__('Calle')}} </option>
                                </select>
                                <label for="view">{{__('Vista')}}</label>
                            </div>
            
                            <div class="form-floating mb-3 mb-lg-0">
                                <select class="form-select" id="min_price" wire:model="min_price" aria-label="{{__('Precio min.')}}">
                                    <option value="1">{{__('Sin mínimo')}}</option>
                                    @php
                                        $minPriceStart = 3000000;
                                        $maxPrice = 15000000;
                                    @endphp
                                    @for($price = $minPriceStart; $price <= $maxPrice; $price += 1000000)
                                        <option value="{{ $price }}">${{ number_format($price / 1000000) }}m</option>
                                    @endfor
                                </select>
                                <label for="min_price">{{__('Precio min.')}}</label>
                            </div>
                            
                            <div class="form-floating mb-3 mb-lg-0">
                                <select class="form-select" id="max_price" wire:model="max_price" aria-label="{{__('Precio max.')}}">
                                    <option value="9999999999">{{__('Sin máximo')}}</option>
                                    @php
                                        $maxPriceStart = 4000000;
                                        $maxPrice = 16000000;
                                    @endphp
                                    @for($price = $maxPriceStart; $price <= $maxPrice; $price += 1000000)
                                        <option  value="{{ $price }}">${{ number_format($price / 1000000) }}m</option>
                                    @endfor
                                </select>
                                <label for="max_price">{{__('Precio max.')}}</label>
                            </div>
                            
            
                            <button type="submit" class="btn btn-brown rounded-end-2 col-12 col-lg-1" aria-label="{{__('Buscar')}}">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            
            </div>

            {{-- Tabla --}}
            <div class="mb-6" style="min-height: 50vh;">
                <div class="table-responsive shadow-5 mb-3">
                    <table class="table table-sm table-light mb-0">
        
                        <thead>
                            <th class="text-center">{{__('Unidad')}}</th>
                            <th class="text-center">{{__('Piso')}}</th>
                            <th class="text-center">{{__('Recámaras')}}</th>
                            <th class="d-none d-lg-table-cell">{{__('Vista')}}</th>
                            <th class="text-center">{{__('m²')}}</th>
                            <th>{{__('Precio')}}</th>
                            <th></th>
                        </thead>
        
                        <tbody>
        
                            @if ($units->isNotEmpty())
                                @foreach ($units as $unit)
                                    @php
                                        if($unit->status == 'Disponible'){
                                            $badgeBg = 'bg-success';
                                        }elseif($unit->status == 'Apartada'){
                                            $badgeBg = 'bg-warning';
                                        }
                                        else{
                                            $badgeBg = 'bg-danger';
                                        }
                                    @endphp
        
                                    <tr wire:key={{$unit->id}}>
        
                                        <td class="{{$badgeBg}} text-light text-center fw-bold">{{ $unit->name }}</td>
                                        <td class="text-center">{{ $unit->floor }}</td>
        
                                        <td class="text-center">                         
                                            {{ $unit->bedrooms }}
                                        </td>
        
                                        <td class="d-none d-lg-table-cell">{{ $unit->view }}</td>
        
                                        <td>
                                            @if ($unit->status == 'Disponible')
                                                {{ $unit->total_const }}
                                            @endif
                                        </td>

                                        <td>
                                            @if ($unit->price != 0 and $unit->status == 'Disponible')
                                                ${{ number_format($unit->price) }} {{$unit->currency}}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('unit', ['name'=>$unit->name]) }}" class="btn btn-brown" target="_blank" rel="noopener noreferrer">
                                                {{__('Ver más')}}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            
                                <tr>
                                    <td class="text-center fs-5 py-3" colspan="9">
                                        {{__('Lo sentimos, no hay resultados para su búsqueda')}}
                                    </td>
                                </tr>
        
                            @endif
        
                        </tbody>
        
                    </table>
                </div>
        
                {{-- $units->links(data: ['scrollTo' => false]) --}}
        
            </div>
        
            @script
                <script>
                    const form_inputs = document.getElementById('search_input_group');
        
                    if(form_inputs){
        
                        if (window.innerWidth <= 768) {
                            // Código a ejecutar solo en dispositivos móviles (ancho menor o igual a 768px)
                            form_inputs.classList.remove('input-group');
                            form_inputs.classList.remove('shadow');
                        }else{
                            form_inputs.classList.add('input-group');
                            form_inputs.classList.add('shadow');
                        }
        
                    }
                </script>
            @endscript

        </div>

    </div>

</div>
