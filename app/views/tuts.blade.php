@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Story Teller</h2>
                <p class="lead">As a Story Teller you are provided with a profile. You can choose to make the profile public or private. Your profile includes your name/username, e-mail if you wish to provide it, and "about me" section, and a story that you can post to. You cas also choose if you want to let people contact you. Caregivers are meant to be there to help you, so our goal is to make it eay to search through their profiles and reach out to them whenever you need to. And lastly you can create digital and/or physical support groups for people in your area.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-cirlce img-responsive center-block story-teller" src="/img/story-teller.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Advocate</h2>
                <p class="lead">As an Advocate you are provided with a profile with your name/username, profile picture, e-mail, an "about me" section and a place to share your story. Our main goal for each caregiver is to help out people in need. Reaching out to a patient or creating a digital and/or physical support group is a great and easy way to do it.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-circle img-responsive center-block" src="/img/caregiverheart.jpg" alt="Generic placeholder image">
            </div>
        </div>

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    @stop