{{ Form::open() }}
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
        
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password'])}}
    </div>
{{ Form::close() }}