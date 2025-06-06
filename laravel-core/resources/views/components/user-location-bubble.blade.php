@php
$classes = ( $bubbleclosed == 1 )
            ? 'location-bubble location-bubble--closed'
            : 'location-bubble';
$location_locale=[
	'eu'=>'European',
	'it'=>'europeo',
	'es'=>'Spanish',
	'fr'=>'French',
	'apac'=>'Asian',
	'mea'=>'Middle East and Africa',
	'us'=>'American',
	'ca'=>'Canadian',
	'row'=>'Rest of the World'
	];
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
	<!--Region Notification-->
	<a class="location-bubble--close" data-bubble="1" data-url="{{route('location.bubblestate.update')}}" data-csrf="{{ csrf_token() }}" >X</a>
	{!! Form::open(['route'=>'location.update', 'method'=>'post', 'class'=>'location-bubble--form']) !!}
	<div class="location-bubble--inner">
		<div class="location-bubble--col bubble-text">@lang('You are currently viewing the :language website. If you wish to change the region, please select it from the drop-down list and press continue.', ['language'=>$location_locale[$location]])</div>
		<div class="location-bubble--col bubble-select">
			<select class="selectpicker" name='location'> 
				@foreach ($all_locations as $key=>$value)
					<option data-icon="omniicon-location-pin" 
							value="{{ $value }}" 
							{{ ($value === $location ) ? 'selected="selected"' : '' }}
							> {{ __(strtoupper($key)) }} </option>
				@endforeach
			</select>
		</div>
		<div class="location-bubble--col bubble-button">
			<button class="button button-dark btn-block" type='submit'>Continue</button>		
		</div>
	</div>
	{!! Form::close() !!}
</div>