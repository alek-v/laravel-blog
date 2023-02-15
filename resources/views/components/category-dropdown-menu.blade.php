@props(['trigger'])

<div x-data="{ open: false }">
    {{-- trigger --}}
    <div @click="open = true">
        {{ $trigger }}
    </div>

    {{-- dropdown links --}}
    <div x-show="open" @click.away="open = false" class="rounded" style="display: none;position: absolute;min-width: 250px;background-color: #fff;">
        {{ $slot }}
    </div>
</div>
