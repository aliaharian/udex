@extends('layouts.profile.master')

<<<<<<< HEAD
@section('page-title', 'Architectionary')

@section('content')
    <article class="content-inner">
        <!-- Dashboard Heading -->
        <div class="heading-dashboard">
            <div class="row align-items-end">
                <div class="col-2">
                    <img src="{{ asset('public/assets/site/images/base/dashboard/dashboard-icon.svg') }}" alt="Getting to know your project">
                </div>
                <div class="col-10 content-col-heading">
=======
@section('page-title', 'Projects')

@section('content')
    <article class="content-inner ">
        <!-- Dashboard Heading -->
        <div class="heading-dashboard">
            <div class="row align-items-end">
                <div class="col-md-2 col-12 text-center text-md-start mb-md-0 mb-4">
                    <img src="{{ asset('public/assets/site/images/base/dashboard/dashboard-icon.svg') }}" alt="Getting to know your project">
                </div>
                <div class="col-md-10 col-12 content-col-heading text-center text-md-start ps-md-5 ps-3">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                    <div class="h-text">Getting to know your project</div>
                    <div class="excerpt">From writing a project brief, to telling us about your plans and timeframes, this is a really important bit that gives us all we need to know.</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Item -->
        <div class="list-services">
            <div class="item">
                <div class="item-inner">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-auto image-col">
                            <img alt="Create a project brief for our designers" src="{{ asset('public/assets/site/images/base/dashboard/create-project.svg') }}">
                        </div>
                        <div class="col content-col">
                            <div class="h-text">Create a project brief for our designers</div>
                            <div class="excerpt">Answer a few quick questions to tell us all about your home, the ideas you have for your project, and to share any inspiration photos</div>
                        </div>
                        <div class="col-3 cta-col">
=======
                        <div class="col-md-auto image-col text-center text-md-start mb-md-0 mb-4">
                            <img alt="Create a project brief for our designers" src="{{ asset('public/assets/site/images/base/dashboard/create-project.svg') }}">
                        </div>
                        <div class="col-md content-col text-center text-md-start mb-md-0 mb-4">
                            <div class="h-text">Create a project brief for our designers</div>
                            <div class="excerpt">Answer a few quick questions to tell us all about your home, the ideas you have for your project, and to share any inspiration photos</div>
                        </div>
                        <div class="col-md-3 cta-col text-center text-md-start">
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
                            @if($UserHaveProject == 0)
                                <a href="{{ url('profile/project/create') }}" class="cta-item">Create Project Brief</a>
                            @else
                                <a href="{{ url('profile/project/create') }}" class="cta-item">View Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="item">--}}
            {{--                <div class="item-inner">--}}
            {{--                    <div class="row align-items-center">--}}
            {{--                        <div class="col-auto image-col">--}}
            {{--                            <img src="{{ asset('public/assets/site/images/base/dashboard/calender.svg') }}" alt="Construction planning">--}}
            {{--                        </div>--}}
            {{--                        <div class="col content-col">--}}
            {{--                            <div class="h-text">Construction planning</div>--}}
            {{--                            <div class="excerpt">Once your designs are ready you'll be all set to start building. Before then, its good to be prepared for the construction phase ahead.</div>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-3 cta-col">--}}
            {{--                            <a href="{{ url('profile/construction-planning') }}" class="cta-item">View/Edit</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </article>
@endsection
