<?php

namespace Quill\Meta\Models;

use Illuminate\Support\Str;
use Quill\Meta\Events\MetaCreating;
use Quill\Meta\Events\MetaCreated;
use Quill\Meta\Events\MetaSaving;
use Quill\Meta\Events\MetaSaved;
use Quill\Meta\Events\MetaUpdating;
use Quill\Meta\Events\MetaUpdated;
use Quill\Meta\Models\Meta;

class MetaObserver
{

    public function creating(Meta $meta)
    {
        // creating logic... 
        event(new MetaCreating($meta));
    }

    public function created(Meta $meta)
    {
        // created logic...
        event(new MetaCreated($meta));
    }

    public function saving(Meta $meta)
    {
        // saving logic...
        event(new MetaSaving($meta));
    }

    public function saved(Meta $meta)
    {
        // saved logic...
        event(new MetaSaved($meta));
    }

    public function updating(Meta $meta)
    {
        // updating logic...
        event(new MetaUpdating($meta));
    }

    public function updated(Meta $meta)
    {
        // updated logic...
        event(new MetaUpdated($meta));
    }

}