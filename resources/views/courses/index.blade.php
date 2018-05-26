@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"> 
            <div class="card-header">Filters</div>
            @include('courses.partials._filters')
        </div>
        <div class="col-md-9">
            <div class="card-header">Courses</div>
            <div class="card-body">
                @if($courses->count())
                    @each('courses.partials._course', $courses, 'course');
                @else
                    No courses
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
