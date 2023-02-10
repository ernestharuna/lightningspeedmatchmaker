@props(['active'])

@php
    $classes = $active ?? false ? 'border-bottom border-2 border-primary text-decoration-none text-dark d-inline m-3' : 'text-decoration-none text-dark d-inline m-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
