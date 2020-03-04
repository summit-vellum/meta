<?php

namespace Quill\Meta\Resource;

use Quill\Html\Fields\ID;
use Quill\Meta\Models\Meta;
use Vellum\Contracts\Formable;

class MetaResource extends Meta implements Formable
{
    public function fields()
    {
        return [
            ID::make()->sortable()->searchable(),
        ];
    }

    public function filters()
    {
        return [
            //
        ];
    }

    public function actions()
    {
        return [
            new \Vellum\Actions\EditAction,
            new \Vellum\Actions\ViewAction,
            new \Vellum\Actions\DeleteAction,
        ];
    }

    public function excludedFields()
    {
    	return [
    		//
    	];
    }
}
