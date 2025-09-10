@props(['tipo' => 'button', 'classe' => 'btn-primary', 'link' => '#'])

@if($link !== '#')
    <a href="{{ $link }}" class="btn {{ $classe }}">
        {{ $slot }}
    </a>
@else
    <button type="{{ $tipo }}" class="btn {{ $classe }}">
        {{ $slot }}
    </button>
@endif
