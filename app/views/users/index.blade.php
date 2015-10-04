@extends('layouts.master')

@section('content')

    <div class="container">
        <!-- Team Members Row -->
        <h2 class="page-header">All Users</h2>

        <div class="row">
            <div class='col-md-8'>
                @foreach($users as $user)
                <div class="col-xs-3 col-md-5 text-center">
                    <img class="img-circle img-center img-thumbnail" src="{{ $user->profile->image_url }}" alt="">
                    <h3>{{ $user->username }}

                    </h3>
                </div>
                @endforeach
                {{ $users->links() }}
            </div>
            <div class="col-md-4">
                <div class="well">
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
            </div>
        </div>
    </div>

    <!-- /.container -->

@stop