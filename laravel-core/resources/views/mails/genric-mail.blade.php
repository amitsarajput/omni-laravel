<div>
    @foreach($mailData as $key=>$value)
        {{ $key .':'.$value}} <br>
        @if($key=='url_current')
            <br><br><br>
            This message was sent from {{ $value }}
        @endif
    @endforeach
</div>
