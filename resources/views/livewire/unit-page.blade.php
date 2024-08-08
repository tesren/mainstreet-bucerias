<div>
    {{-- Success is as dangerous as failure. --}}

    @section('titles')
        <title>{{__('Condominio')}} {{$unit->name}} - Main Street Bucerías</title>
        <meta name="description" content="">
    @endsection

    <div class="row justify-content-center">

        @php
            $gallery = $unit->getMedia('gallery');
        @endphp

        <div class="col-12 col-lg-7 p-0 p-lg-1 position-relative">
            <img src="{{ $gallery[0]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="w-100 object-fit-cover" style="height: 60vh;" data-fancybox="gallery">

            <a href="" class="btn btn-outline-light rounded-3 position-absolute end-0 bottom-0 m-4 z-3 fs-5">
                <i class="fa-regular fa-images"></i> {{__('Ver Imágenes')}}
            </a>
        </div>

        <div class="col-12 col-lg-5 p-0 p-lg-1">
            <img src="{{ $gallery[1]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="w-100 object-fit-cover pb-2" style="height: 30vh;" data-fancybox="gallery">
            <img src="{{ $gallery[2]->getUrl('medium') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="w-100 object-fit-cover" style="height: 30vh;" data-fancybox="gallery">
        </div>


        @if ( count($gallery) > 3 )
            @for ($i=3; $i<count($gallery); $i++)
                <img src="{{ $gallery[$i]->getUrl('large') }}" alt="{{__('Condominio')}} {{$unit->name}} Main Street Bucerías" class="d-none" data-fancybox="gallery">
            @endfor
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
