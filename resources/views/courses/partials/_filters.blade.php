<p class="list-group">
    <a href="{{ route('courses.index') }}">Clear All</a>
</p>

@foreach(App\Filters\Course\CourseFilters::mappings() as $key => $map)
    @include('courses.partials._filter_list', compact('key', 'map'))
@endforeach

