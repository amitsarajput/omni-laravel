@php
    $omni = session('omni_data');
    $locationKey = $omni['country'] ?? $omni['region'];
@endphp

<img src="{{ asset("images/$srcPrefix-$locationKey.$extention") }}" alt="{{ $alt ?? 'Image' }}">
