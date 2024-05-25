@props(['caption', 'items'])

@isset($caption)
    <li class="pc-item pc-caption">
        <label>{{ $caption }}</label>
    </li>
@endisset

@isset($items)
    @foreach ($items as $item)
        <x-nav-components.nav-item :item="$item" />
    @endforeach
@endisset
