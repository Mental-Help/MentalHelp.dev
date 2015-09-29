<div class="modal fade bs-example-modal-lg" id="addStoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Write Your Story</h4>
            </div>
            <div class="modal-body">
                {{ Form::open() }}
                    <div class="form-group">
                        {{ Form::open() }}
                            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}

                            {{Form::textarea('story', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '10', 'placeholder' => 'Content Here'])}}
                        {{ Form::close() }}
                    </div>
                {{ Form::close() }}
            </div>
            <div class="modal-footer">
                {{ Form::submit('Save', ['class' => 'btn btn-default save-btn']) }}
            </div>
        </div>
    </div>
</div>