@extends('layouts.master')

@section('content')

<div class="container col-md-12">
    <div class="col-md-3"></div>
    <div class="form-background col-md-6">
        {{ Form::model($event, array('action' => array('CalendarEventsController@update', $event->id), 'method' => 'PUT', 'accept-charset' => 'UTF-8')) }}
            <div class="row">
                {{ Form::label('title', 'Title') }}
                <div class="form-group col-md-12" id="event-title">
                    {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Event Title']) }}
                </div>
            </div>
            <div class="row">
                {{ Form::label('when', 'When') }}<br>
                <div class="form-group col-md-6">
                    {{ Form::text('start_time', Input::old('start_time'), ['class' => 'form-control time-form start-time-form', 'id' => 'startsAtDateTimePicker_dark', 'placeholder' => 'Start Time'])}}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::text('end_time', Input::old('end_time'), ['class' => 'form-control time-form end-time-form', 'id' => 'endsAtDateTimePicker_dark', 'placeholder' => 'End Time'])}}
                </div>
            </div>
            <div class="row">
                {{ Form::label('description', 'Description') }}
                <div class="form-group col-md-12" id="description">
                    {{ Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'placeholder' => 'Description']) }}
                </div>
            </div>
            {{ Form::submit('Save', ['class' => 'btn btn-default form-control form-submit', 'id' => 'save']) }}
        {{ Form::close() }}
    </div>
    <div class="col-md-3"></div>
</div>

@stop

@section('script')
    <script>
        Date.parseDate = function( input, format ){
            return moment(input,format).toDate();
        };
        Date.prototype.dateFormat = function( format ){
            return moment(this).format(format);
        };
        jQuery('#startsAtDateTimePicker_dark').datetimepicker({
            format:'YYYY-MM-DD h:mm:00',
            formatTime:'h:mm a',
            formatDate:'DD-MM-YYYY'
        });
        jQuery('#endsAtDateTimePicker_dark').datetimepicker({
            format:'YYYY-MM-DD h:mm:00',
            formatTime:'h:mm a',
            formatDate:'DD-MM-YYYY'
        });
    </script>
@stop