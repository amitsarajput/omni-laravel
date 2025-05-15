<div {{ $attributes->merge(['class' => 'contact-form ']) }} >
    {!! Form::open(['route'=>'form.contact','method'=>'post', 'id'=>'contact-form','class'=>'omniform']) !!}
        {{ Form::hidden('mobile', '') }}
        {{ Form::hidden('url_current', url()->current()) }}
        {{ Form::hidden('g-recaptcha-response', '',['id'=>'g-recaptcha-response']) }}
        <h4>{{__("SEND AN ENQUIRY")}}</h4>
        @if ($errors->any())
            <div class="alert alert-danger  error horizontal" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='grid'>
            <div class="col-3">
                {{ Form::text('name', '', ['class'=>'sm-form-control required','placeholder'=>__('NAME*')]) }}
            </div>
            <div class="col-3">
                {{ Form::email('email', '', ['class'=>'sm-form-control required email','placeholder'=>__('EMAIL*')]) }}
            </div>
            <div class="col-3">
                {{ Form::email('phone', '', ['class'=>'sm-form-control required email','placeholder'=>__('PHONE*')]) }}
            </div>

            <div class="col-3">
                {{ Form::text('country', '', ['class'=>'sm-form-control required','placeholder'=>__('COUNTRY*')]) }}
            </div>
        </div>	
        <div class='grid'>
            <div class="col-12">
                {{ Form::textarea('message', '', ['class'=>'sm-form-control required','placeholder'=>__('MESSAGE')]) }}
            </div>
        </div>
        <div class='grid'>
            <div class="col-12">
            {{ Form::button(__('Send'),['type'=>'submit','id'=>'submit','class'=>"knopf red sharp heading-font ls-1 p"]); }}
            <span class="required-field"><i>{{__("*Required field")}}</i></span>
            </div>
        </div>  
        
        @if (session('status'))
        <div class="alert alert-success result" role="alert">
            {{ session('status') }}
        </div>
        @endif
    {!! Form::close() !!}
</div>
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('services.recaptcha.site') }}', { action: 'submit' }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>