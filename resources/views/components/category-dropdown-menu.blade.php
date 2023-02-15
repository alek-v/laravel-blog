@props(['trigger'])

<div x-data="{ open: false }">
    {{-- trigger --}}
    <div @click="open = true">
        {{ $trigger }}
    </div>

    {{-- dropdown links --}}
    <div x-show="open" @click.away="open = false" style="display: none;position: absolute;width: 100%;background-color: #fff;">
        {{ $slot }}
    </div>
</div>
