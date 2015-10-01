@extends('layouts.master')

@section('content')
<div class="container col-md-12">
    <div class="col-md-6">
        <h2>Events</h2>
        <div class="slider3" id="event-slider">
            <div class="thumbelina-but vert top">&#708;</div>
            <ul>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
            </ul>
            <div class="thumbelina-but vert bottom">&#709;</div>
        </div>
    </div>

    <div class="col-md-6">
        <h2>Stories</h2>
        <div class="slider3" id="story-slider">
            <div class="thumbelina-but vert top">&#708;</div>
            <ul>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
                <li><img src="http://placehold.it/580x175"></li>
            </ul>
            <div class="thumbelina-but vert bottom">&#709;</div>
        </div>
    </div>
</div>
@stop

@section('script')
    <script src="https://cdn.rawgit.com/StarPlugins/thumbelina/master/thumbelina.js"></script>
    <script type="text/javascript">
        $(function(){
            
            $('#event-slider').Thumbelina({
                orientation:'vertical',         // Use vertical mode (default horizontal).
                $bwdBut:$('#event-slider .top'),     // Selector to top button.
                $fwdBut:$('#event-slider .bottom')   // Selector to bottom button.
            });
          
        });

        $(function(){
            
            $('#story-slider').Thumbelina({
                orientation:'vertical',         // Use vertical mode (default horizontal).
                $bwdBut:$('#story-slider .top'),     // Selector to top button.
                $fwdBut:$('#story-slider .bottom')   // Selector to bottom button.
            });
          
        });
    </script>
@stop