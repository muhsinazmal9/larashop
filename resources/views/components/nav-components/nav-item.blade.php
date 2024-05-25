@props(['item'])

<li class="pc-item">
    <a href="{{ route($item['route']) }}" class="pc-link">
        <span class="pc-micon">
            <svg class="pc-icon">
                <use xlink:href="#{{ $item['icon'] }}"></use>
            </svg>
        </span>
        <span class="pc-mtext">{{ $item['name'] }}</span>
    </a>
</li>
