@extends('layouts.master')

@section('content')
	<div class="container">
		<h4>Search</h4>
        <div class="input-group">
            <form class="search-input navbar-form navbar-right" method="GET" role="search" action="#">
                <div class="form-group">
                    <input name="search" type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    


        <!-- Team Members Row -->
    <div>
        <h2 class="page-header">Scroll through our Caregivers and Patients</h2>
    </div>
        <div class="row">
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-xs-6 col-md-3 text-center">
                <img class="img-circle img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
        </div>

    </div>
    <!-- /.container -->

@stop