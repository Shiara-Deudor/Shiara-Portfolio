@extends('app')

@section('contents')
    <div class="p-home">
        @include('sections.showcase.home')
        @include('sections.showcase.experience')
        @include('sections.showcase.service')
        @include('sections.showcase.project')
        @include('sections.showcase.testimonial')
    </div>
@endsection
