@props(['location'])

<div class="element clearfix rectangle col1-1 contact">
    <div class="padding-wrapper">
        <div class="grey-bg full-height">
            <div class="box-parent">
                <div class="child">
                    <h3 class="header">{{ $location->name }}</h3>
                    <div class="break"></div>
                    @if ($location->address)
                        <p class="small">Address</p>
                        <p>{!! nl2br(e($location->address)) !!}</p>
                    @endif
                    @if ($location->phone)
                        <p class="small">Phone</p>
                        <p>{{ $location->phone }}</p>
                    @endif
                    <div class="break"></div>

                    {{-- Menggunakan fa-2x dan kelas .icon-block --}}
                    @php
                        $locationIconClass = $location->icon ?? 'fa-building';
                        // Coba fa-2x, Anda bisa ganti ke fa-lg jika terlalu besar
                        $locationIconSizeClass = 'fa-2x';
                    @endphp
                    @if ($location->icon)
                        <i class="fa {{ $locationIconClass }} {{ $locationIconSizeClass }} icon-block"
                            aria-hidden="true"></i>
                    @else
                        <i class="fa fa-building {{ $locationIconSizeClass }} icon-block" aria-hidden="true"></i>
                    @endif

                    {{-- Pastikan nama field Maps_url sesuai di model/migration --}}
                    @php $mapsUrl = $location->Maps_url ?? $location->Maps_url; @endphp
                    @if ($mapsUrl)
                        <p><a href="{{ $mapsUrl }}" data-title="View Map" target="_blank"
                                rel="noopener noreferrer">Get Directions</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
