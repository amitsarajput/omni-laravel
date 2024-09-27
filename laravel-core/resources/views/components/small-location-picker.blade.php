@props(['bubbleclosed'=>0, 'all_location'=>array(''),'location'=>''])
@php
$classes = ( $bubbleclosed == 1 )
            ? 'shown'
            : '';
@endphp
{!! Form::open(['route'=>'location.update', 'method'=>'post', 'class'=>'location-bubble--form']) !!}
<div class="location-picker small-location-picker {{ $classes }}">
    <select class="selectpicker" name='location' > 
        @foreach ($all_locations as $key=>$value)
        <option data-icon="omniicon-location-pin" value="{{ $value }}" 
                    {{ ($value === $location ) ? 'selected="selected"' : '' }} 
                    > {{ strtoupper($key) }} </option>
        @endforeach
    </select>
</div>                    
{!! Form::close() !!}