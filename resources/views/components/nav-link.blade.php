@props(['active'])

@php
    $classes = $active ?? false ? 'bg-primary text-white rounded px-1 text-decoration-none text-dark d-inline m-3' : 'text-decoration-none text-dark d-inline m-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
