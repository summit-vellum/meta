<?php

namespace Quill\Meta\Listeners;

class RegisterMetaPermissionModule
{ 
    public function handle()
    {
        return [
            'Meta' => [
                'view'
            ]
        ];
    }
}
