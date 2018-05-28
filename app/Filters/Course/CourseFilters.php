<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;
use App\Filters\Course\{ 
    AccessFilter, 
    DifficultyFilter,
    StartedFilter,
    SubjectFilter,
    TypeFilter,
    OrderFilter,
 };

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'order' => OrderFilter::class,
    ];

    public static function mappings()
    {
        $map = [
            'access' => [
                'free' => 'Free',
                'premium' => 'Premium',
            ],
            'difficulty' => [
                'beginner' => 'Beginner',
                'intermediate' => 'Intermediate',
                'advanced' => 'Advanced',
            ],
            'type' => [
                'snippet' => 'Snippet',
                'project' => 'Project',
                'theory' => 'Theory',
            ],
            'subjects' => \App\Subject::get()->pluck('name', 'slug')->toArray()
        ];

        if (auth()->check()) {
            $map = array_merge($map, [
                'started' => [
                    'true' => 'Started',
                    'false' => 'Not started',
                ]
            ]);
        }

        return $map;
    }
}
