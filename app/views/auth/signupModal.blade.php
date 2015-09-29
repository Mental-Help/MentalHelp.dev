<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Signup</h4>
            </div>
            <div class="modal-body">
                {{ Form::open() }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            {{Form::label('first_name', 'First Name')}}
                            {{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                        </div>
                            
                        <div class="form-group col-md-6">
                            {{Form::label('last_name', 'Last Name')}}
                            {{Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            {{Form::label('email', 'Email')}}
                            {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {{Form::label('password', 'Password')}}
                            {{Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                        </div>
                        <div class="form-group col-md-6">
                            {{Form::label('password', 'Password Confirm')}}
                            {{Form::text('password_confirm', null, ['class' => 'form-control', 'placeholder' => 'Password Confirm'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="dropdown form-group col-md-6">
                            {{Form::label('role', 'Role')}}
                            {{ Form::select('role', ['M' => 'Mental Health Client', 'C' => 'Caregiver'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown'])}}
                        </div>
                        <div class="form-group col-md-6">
                            {{Form::label('zip', 'Zip Code')}}
                            {{ Form::number('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip Code'])}}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <div class="modal-footer">
                <div class="login-redirect">
                    Already a member?
                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" href="#">Sign Up</a>
                </div>
                {{ Form::submit('Submit', ['class' => 'btn btn-default submit-btn']) }}
            </div>
        </div>
    </div>
</div>