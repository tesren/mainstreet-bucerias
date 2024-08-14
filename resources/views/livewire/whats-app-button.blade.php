<div>
    {{-- Nothing in the world is as soft and yielding as water. 523221805380 --}}
    <a href="https://wa.me/523221805380?text={{ urlencode(__('Hola, vengo del sitio web de Main Street Bucerías')) }}" class="position-fixed bottom-0 end-0 z-3 m-3" data-bs-toggle="tooltip" data-bs-title="{{ __('¡Envíanos un mensaje!') }}" target="_blank" rel="noopener noreferrer">
        <img width="70px" src="{{asset('img/whatsapp.webp')}}" alt="Contactar por WhatsApp">
    </a>

    @script
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        </script>
    @endscript
</div>
