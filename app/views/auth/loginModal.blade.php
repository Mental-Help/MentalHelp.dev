<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Login</h4>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <div class="signup-redirect">
                    Not a member yet?
                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" href="#">Sign Up</a>
                </div>
                {{ Form::submit('Login', ['class' => 'btn btn-default login-btn']) }}
            </div>
        </div>
    </div>
</div>