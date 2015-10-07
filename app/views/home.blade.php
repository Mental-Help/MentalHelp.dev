@extends('layouts.master')

@section('content')
    <!-- Controls -->
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=depression" class="portfolio-box">
                        <img src="img/depression.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    Depression
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=anxiety" class="portfolio-box">
                        <img src="img/anxiety.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    Anxiety
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=other" class="portfolio-box">
                        <img src="img/domestic-violence.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    Domestic Violence
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=schizophrenia" class="portfolio-box">
                        <img src="img/schizophrenia.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    Personality Disorders
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=other" class="portfolio-box">
                        <img src="img/substance-abuse.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    Substance Use Disorders
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="you_are_not_alone?tags=post-traumatic-stress-disorder" class="portfolio-box">
                        <img src="img/ptsd.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and support groups for
                                </div>
                                <div class="project-name">
                                    PTSD
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container marketing">

        <div class="mini-marketing">
        <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-rounded" src="/img/story-teller.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Do you want help?</h2>
                    <h4>Become a Story Teller</h4>
                    <p>As a Story Teller you are provided with a profile. You can choose to make the profile public or private. Your profile includes your name/username, e-mail if you wish to provide it, an "about me" section, and a storyboard that you can post to. You can also choose if you want to let people contact you.</p> 
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/caregiverheart.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Do you want to help someone?</h2>
                    <h4>Become an Advocate</h4>
                    <p>As an Advocate you are provided with a profile with your name/username, profile picture, e-mail, an "about me" section and a place to share your story. Our main goal for each Advocate is to help Story Tellers and other Advocates.</p>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div>
        {{-- <a class="signup-home" href="{{ action('AuthController@create') }}"><button class="btn btn-default signup-home">Sign Up</button></a> --}}
    <div>

@stop