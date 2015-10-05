@extends('layouts.master')

@section('content')
<div class="container col-md-12">
    <div class="col-md-6">
        <h2>Support Groups</h2>
        <div class="slider3" id="event-slider">
            <div class="thumbelina-but vert top">&#708;</div>
            <ul>
                {{-- <li><img src="http://placehold.it/580x175"></li> --}}
                <li>
                    @forelse ($events as $event)
                        <div class="slider-item">
                                <h3 class="slider-title"><a class="read-more slider-title" href="{{{ action('CalendarEventsController@show', $event->id) }}}">{{{ $event->title }}}</a></h3>
                                <p><small class="slider-time">When: {{{ $event->start_time }}}</small></p>
                                <p class="slider-description">{{{ Str::words($event->description, 20)}}}
                                    <a class="read-more" href="{{{ action('CalendarEventsController@show', $event->id) }}}">Read More</a>
                                </p>
                        </div>
                    @empty
                        <h3>There aren't any events to display at this time.</h3>
                    @endforelse
                </li>
            </ul>
            <div class="thumbelina-but vert bottom">&#709;</div>
        </div>
    </div>

    <div class="col-md-6">
        <h2>Stories</h2>
        <div class="slider3" id="story-slider">
            <div class="thumbelina-but vert top">&#708;</div>
            <ul>
                <li>
                    @forelse ($stories as $story)
                        <div class="slider-item">
                            <h3 class="slider-title"><a id="slider-title" class="read-more" href="{{{ action('UserStoriesController@show', $story->id) }}}">{{{ $story->title }}}</a></h3>
                            <p><small class="slider-time">Date Created: {{{ $story->created_at }}}</small></p>
                            <p class="slider-time">{{{ Str::words($story->body, 20)}}}
                                <a class="read-more" href="{{{ action('UserStoriesController@show', $story->id) }}}">Read More</a>
                            <p>
                        </div>
                    @empty
                        <h3>There aren't any stories to display at this time.</h3>
                    @endforelse
                </li>
            </ul>
            <div class="thumbelina-but vert bottom">&#709;</div>
        </div>
    </div>
</div>
@stop

@section('script')
    <script type="text/javascript" src="/js/thumbelina.js"></script>
    <script type="text/javascript">
        $(function(){
            
            $('#event-slider').Thumbelina({
                orientation:'vertical',         // Use vertical mode (default horizontal).
                $bwdBut:$('#event-slider .top'),     // Selector to top button.
                $fwdBut:$('#event-slider .bottom')   // Selector to bottom button.
            });
          
            $('#story-slider').Thumbelina({
                orientation:'vertical',         // Use vertical mode (default horizontal).
                $bwdBut:$('#story-slider .top'),     // Selector to top button.
                $fwdBut:$('#story-slider .bottom')   // Selector to bottom button.
            });
        });
    </script>
@stop