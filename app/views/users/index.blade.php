@extends('layouts.master')

@section('content')
	<div class="container col-md-12">
		<h4>Search</h4>
        <div class="input-group">
            <form class="search-input navbar-form navbar-right" method="GET" role="search" action="#">
                <div class="form-group">
                    <input name="search" type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
	</div>
@stop