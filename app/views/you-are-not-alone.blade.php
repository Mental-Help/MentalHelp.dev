@extends('layouts.master')

<head>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/StarPlugins/thumbelina/master/thumbelina.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdn.rawgit.com/StarPlugins/thumbelina/master/thumbelina.js"></script>

<style type="text/css">
    .event-slider {
        position: relative;
        margin-top: 40px;
        width: 25%;
        height: 80%;
        border-left: 1px solid #aaa;
        border-right: 1px solid #aaa;
        margin-bottom: 40px;
    }

    .thumbelina-but.vert {
        width: 101%;
        height: ;
    }
</style>

</head>

@section('content')
<div class="container col-md-12">
    <div class="col-md-6">
        <div class="event-slider"> 
            <div class="">
                <div class="thumbelina-but vert top disabled">˄</div>
                <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="top: 0px;">
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image1.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image1.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image2.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image2.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image3.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image3.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image4.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image4.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image5.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image5.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image6.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image6.jpg'
                             ">
                    </li>
                </ul></div>
                <div id="fwd3" class="thumbelina-but vert bottom">˅</div>
            </div> {{-- end slider1 --}}
        </div>
    </div>

    <div class="col-md-6">
        <div class="event-slider"> 
            <div class="">
                <div class="thumbelina-but vert top disabled">˄</div>
                <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="top: 0px;">
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image1.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image1.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image2.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image2.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image3.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image3.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image4.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image4.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image5.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image5.jpg'
                             ">
                    </li>
                    <li style="display: block;">
                        <img class="cloudzoom-gallery" src="http://placehold.it/93x119" data-cloudzoom="
                             useZoom: '#zoom1',
                             image:'/sites/starplugins/images/jetzoom/small/image6.jpg',
                             zoomImage:'/sites/starplugins/images/jetzoom/large/image6.jpg'
                             ">
                    </li>
                </ul></div>
                <div id="fwd3" class="thumbelina-but vert bottom">˅</div>
            </div> {{-- end slider1 --}}
        </div>
    </div>
</div>



<!--div class="container col-md-12">
    <div class="col-md-6">
        <div class="slider event-slider">
            <div class="thumbelina-but vert top">˄</div>
            <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="top: -384px;">
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image1.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image1.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image2.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image2.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image3.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image3.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image4.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image4.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image5.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image5.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="http://placehold.it/350x150" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image6.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image6.jpg'
                         ">
                </li>
            </ul></div>
            <div id="fwd3" class="thumbelina-but vert bottom disabled">˅</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="slider story-slider">
            <div class="thumbelina-but vert top">˄</div>
            <div style="position:absolute;overflow:hidden;width:100%;height:100%;"><ul class="thumbelina" style="top: -384px;">
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image1.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image1.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image1.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image2.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image2.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image2.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image3.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image3.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image3.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image4.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image4.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image4.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image5.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image5.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image5.jpg'
                         ">
                </li>
                <li style="display: block;">
                    <img class="cloudzoom-gallery" src="/sites/starplugins/images/jetzoom/size81/image6.jpg" data-cloudzoom="
                         useZoom: '#zoom1',
                         image:'/sites/starplugins/images/jetzoom/small/image6.jpg',
                         zoomImage:'/sites/starplugins/images/jetzoom/large/image6.jpg'
                         ">
                </li>
            </ul></div>
            <div id="fwd3" class="thumbelina-but vert bottom disabled">˅</div>
        </div>
    </div>
</div-->
@stop


