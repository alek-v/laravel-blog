@props(['active' => false])

@php
    $classes = 'd-block p-2 rounded';

    if ($active) $classes .= ' bg-secondary text-light';
@endphp

<a {{ $attributes(['class' => $classes]) }}>{{ $slot }}</a>
