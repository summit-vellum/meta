<?php 

namespace Quill\Meta\Events;


use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Quill\Meta\Models\Meta;

class MetaUpdated
{
    // use Dispatchable, InteractsWithSockets, 
    use SerializesModels;
 
    public $data;

    /**
     * Create a new event instance.
     *
     * @param  \Quill\Meta\Models\Meta  $data
     * @return void
     */
    public function __construct(Meta $data) 
    {
        $this->data = $data;  
    }
}
