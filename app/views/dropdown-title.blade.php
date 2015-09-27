@extends('layouts.master')

@section('content')
    <h1 class="featurette-heading dropdown-featurette-title">Dropdown Title Name</h1>

    <div class="col-md-12">
        <div class="col-md-8">
            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading dropdown-featurette-heading">Create a support group. <span class="text-muted">It'll blow your mind.</span></h3>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-rounded img-responsive center-block" src="http://placehold.it/400x400" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h3 class="featurette-heading dropdown-featurette-heading">Another tutorial heading. <span class="text-muted">See for yourself.</span></h3>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-circle img-responsive center-block" src="http://placehold.it/400x400" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="featurette-heading dropdown-featurette-heading">And a third tutorial heading here. <span class="text-muted">Checkmate.</span></h3>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-rounded img-responsive center-block" src="http://placehold.it/400x400" alt="Generic placeholder image">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="well">
                <h4>Search</h4>
                <div class="input-group">
                    <form class="search-input navbar-form navbar-right" method="GET" role="search" action="http://alexandragutierrez.net/posts">
                        <div class="form-group">
                            <input name="search" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="well">
                {{-- @foreach --}}
                list of things in dropdown
            </div>
        </div>
    </div>
@stop