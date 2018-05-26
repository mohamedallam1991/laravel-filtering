<div class="media">
    <div class="mr-3">
        <a href="#"><img src="//via.placeholder.com/64x64" alt="{{ $course->name }}"></a>
    </div>
    <div class="media-body">
        @if($course->subjects->count())
            <ul class="list-inline">
                @foreach($course->subjects as $subject)
                    <li>{{ $subject->name }}</li>
                @endforeach
            </ul>
        @endif
        <h4 class="mt-0">{{ $course->name }}</h4>
            <ul class="list-inline">
                <li class="list-inline-item">{{ $course->difficulty }}</li>
                <li class="list-inline-item">{{ $course->type }}</li>
                <li class="list-inline-item">{{ $course->free }}</li>
                <li class="list-inline-item">{{ $course->getFormatedStartedAttribute() }}</li>
            </ul>
    </div>
</div>
<hr>