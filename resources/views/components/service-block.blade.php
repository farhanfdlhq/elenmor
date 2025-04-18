@props(['service'])

<div class="element clearfix rectangle col1-1 services">
    <div class="padding-wrapper">
        <div class="grey-bg full-height">
            <div class="box-parent">
                <div class="child">
                    {{-- Menggunakan fa-2x dan kelas .icon-block --}}
                    @php
                        $serviceIconClass = $service->icon ?? 'fa-briefcase';
                        // Coba fa-2x, Anda bisa ganti ke fa-3x jika kurang besar
                        $serviceIconSizeClass = 'fa-2x';
                    @endphp
                    @if ($service->icon)
                        <i class="fa {{ $serviceIconClass }} {{ $serviceIconSizeClass }} icon-block"
                            aria-hidden="true"></i>
                    @else
                        <i class="fa fa-briefcase {{ $serviceIconSizeClass }} icon-block" aria-hidden="true"></i>
                    @endif

                    <h3 class="header">{{ $service->title }}</h3>
                    <div class="break"></div>
                    <p class="small">Includes</p>
                    <ul class="unordered-list">
                        @if (is_array($service->includes) && count($service->includes) > 0)
                            @foreach ($service->includes as $feature)
                                <li><i>{{ $feature }}</i></li>
                            @endforeach
                        @else
                            <li><i>Default Feature 1</i></li>
                            <li><i>Default Feature 2</i></li>
                        @endif
                    </ul>
                    <p class="price">
                        @if ($service->price)
                            <span>$</span>{{ $service->price }}
                        @endif
                        @if ($service->price_unit)
                            <span class="recurrance">{{ $service->price_unit }}</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
