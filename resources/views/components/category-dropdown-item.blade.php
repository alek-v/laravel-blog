@props(['active' => false])

@php
    $classes = 'd-block p-1';

    if ($active) $classes .= ' bg-secondary text-light rounded';
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>
