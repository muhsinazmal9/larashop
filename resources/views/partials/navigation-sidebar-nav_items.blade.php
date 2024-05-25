@php
    $nav_items = [
        [
            'caption' => __('Dashboard'),
            'items' => [
                [
                    'name' => __('Dashboard'),
                    'icon' => 'custom-status-up',
                    'route' => 'dashboard',
                ],
            ],
        ],
        [
            'caption' => __('Users'),
            'items' => [
                [
                    'name' => __('Users'),
                    'icon' => 'custom-user-square',
                    'route' => 'users.index',
                ],
            ],
        ],
    ];
@endphp

@isset($nav_items)
    @foreach ($nav_items as $nav_item)
        <x-nav-components.grouped-nav-item :caption="$nav_item['caption']" :items="$nav_item['items']" />
    @endforeach
@endisset
