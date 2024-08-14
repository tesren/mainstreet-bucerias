<?php

namespace App\Nova;

use App\Nova\View;
use App\Nova\Shape;
use Laravel\Nova\Panel;
use App\Nova\PaymentPlan;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use App\Nova\Actions\ChangeStatus;
use Laravel\Nova\Fields\BelongsTo;
use App\Nova\Actions\ChangeUnitView;
use Laravel\Nova\Fields\BelongsToMany;
use App\Nova\Actions\AssignPaymentPlan;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Unit extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Unit::class;

    public function title(){
        return 'Unidad '.$this->name;
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Unidad');
    }

    public static function label()
    {
        return __('Unidades');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable()->hideFromDetail()->hideFromIndex(),

            Text::make('Unidad', 'name')->rules('required', 'max:50')->sortable()->placeholder('Nombre o número de la unidad'),

            Select::make('Vista', 'view')->options([
                'Vista a la calle' => 'Vista a la calle',
                'Vista al mar' => 'Vista al mar',
            ])->displayUsingLabels()->rules('required')->sortable()->filterable(),

            Number::make('Piso', 'floor')->rules('required')->min(0)->max(35)->step(0.5)->sortable(),

            Number::make('Precio', 'price')->rules('required')->min(0)->step(0.01)->sortable()
            ->displayUsing(
                function($value){
                    return '$'.number_format($value,2).' '.$this->currency;
                }
            ),

            Select::make('Moneda', 'currency')->options([
                'USD' => 'USD',
                'MXN' => 'MXN',
            ])->rules('required')->default('MXN')->onlyOnForms(),

            Select::make('Estatus', 'status')->options([
                'Disponible' => 'Disponible',
                'Apartada' => 'Apartada',
                'Vendida' => 'Vendida',
            ])->rules('required')->default('Disponible')->onlyOnForms()->filterable(),

            Badge::make('Estatus', 'status')->map([
                'Vendida' => 'danger',
                'Disponible' => 'success',
                'Apartada' => 'warning',
            ])->sortable(),

            Number::make('Recámaras', 'bedrooms')->rules('required')->min(0)->max(10)->sortable(),
            Number::make('Baños', 'bathrooms')->rules('required')->min(0)->max(10)->step(0.5)->sortable(),

            Boolean::make('Lockoff', 'lockoff')->help('Marque la casilla si esta unidad tiene opción de hacer Lockoff'),
            //BelongsToMany::make('Planes de pago', 'paymentPlans', PaymentPlan::class),

            Tag::make('Planes de pago', 'paymentPlans', PaymentPlan::class)->hideFromIndex(),

            Panel::make('Medidas', $this->sizesFields()),

            Panel::make('Planos', $this->imgFields()),

            HasOne::make('Polígono', 'shape', Shape::class),
     ];
    }

    /**
     * Get the sizes fields for the resource.
     *
     * @return array
     */
    protected function sizesFields()
    {
        return [
            Number::make('Interior', 'interior_const')->hideFromIndex()->placeholder('Metros cuadrados del interior')->min(0)->max(99999)->rules('required')->step(0.01)
            ->displayUsing(
                function($value){
                    return $value.' m²';
                }
            ),
            Number::make('Exterior', 'exterior_const')->hideFromIndex()->placeholder('Metros cuadrados de la terraza')->min(0)->max(99999)->rules('required')->step(0.01)
            ->displayUsing(
                function($value){
                    return $value.' m²';
                }
            ),
           
            Number::make('Const. Total', 'total_const')->sortable()->placeholder('Metros cuadrados totales')->min(0)->max(99999)->rules('required')->step(0.01)
            ->displayUsing(
                function($value){
                    return $value.' m²';
                }
            )->dependsOn(
                ['interior_const', 'exterior_const'],
                function (Number $field, NovaRequest $request, FormData $formData) {
                    $total_meters = 0;

                    if ($formData->interior_const != null) {
                        $total_meters = $total_meters + $formData->interior_const;
                    }

                    if ($formData->exterior_const != null) {
                        $total_meters = $total_meters + $formData->exterior_const;
                    }

                    $field->default(round($total_meters, 2));
                }
            ),
        ];
    }

    /**
     * Get the sizes fields for the resource.
     *
     * @return array
     */
    protected function imgFields()
    {
        return [
            //Image::make('Ubicación en planta', 'location_img_path')->disk('media')->maxWidth(300)->hideFromIndex(),
            Image::make('Planos de la Unidad', 'blueprint_path')->disk('media')->maxWidth(300)->hideFromIndex(),
            Image::make('Planos Lockoff', 'lockoff_path')->disk('media')->maxWidth(300)->hideFromIndex()
            ->dependsOn(
                ['lockoff'],
                function (Image $field, NovaRequest $request, FormData $formData) {
                    if ($formData->lockoff == true) {
                        $field->show()->rules('required');
                    }
                    else{
                        $field->hide();
                    }
                }
            ),
            Images::make('Galería', 'gallery')->hideFromIndex()->enableExistingMedia(),

        ];
    }


    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            new AssignPaymentPlan,
            new ChangeStatus,
        ];
    }
}
