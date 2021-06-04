<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;

class Topic extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Topic::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'question','description','body'
    ];


    public static function softDeletes()
    {
        return false;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Uuid')
                ->onlyOnDetail()
                ->readonly(),

            Boolean::make('Published')->sortable()
                ->rules('required', 'boolean'),

            Number::make('Order')
                ->sortable()
                ->rules('required', 'numeric',),

            BelongsTo::make('Service', 'service', 'App\Nova\Service'),

            Text::make('Title')
                ->sortable()
                ->rules('required', 'string', 'max:60'),

            Text::make('Question')
                ->sortable()
                ->rules('required', 'string', 'max:120'),

            Textarea::make('Description')
                ->sortable()
                ->alwaysShow()
                ->rules('required', 'string', 'max:255'),


            Trix::make('Body')
                ->sortable()
                ->alwaysShow()
                ->withFiles(config('filesystems.default'))
                ->path(\App\Models\Topic::STORAGE)
                ->rules('required', 'string', 'max:4086'),

            Boolean::make('Value')->hideFromIndex()
                ->rules('required', 'boolean'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
