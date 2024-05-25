@props(['caption'])

@isset($caption)
    <li class="pc-item pc-caption"><label>{{ $caption }}</label></li>
@endisset

@php
    $items = [
        [
            'name' => 'Dashboard',
            'icon' => 'custom-status-up',
            'route' => 'dashboard',
        ],
        [
            'name' => 'Products',
            'icon' => 'custom-status-up',
            'route' => 'dashboard',
        ],
    ];
@endphp


@foreach ($items as $item)
    <x-nav-components.nav-item :item="$item" />
@endforeach

