@include('courses.partials._filter_list',[
    'map' => ['free' => 'Free', 'premium' => 'Premium'],
    'key' => 'access'
])

@include('courses.partials._filter_list',[
    'map' => ['beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'],
    'key' => 'difficulty'
])

@include('courses.partials._filter_list',[
    'map' => ['snippet' => 'Snippet', 'project' => 'Project', 'theory' => 'Theory'],
    'key' => 'type'
])

@include('courses.partials._filter_list',[
    'map' => \App\Subject::get()->pluck('name','slug'),
    'key' => 'subject'
])
