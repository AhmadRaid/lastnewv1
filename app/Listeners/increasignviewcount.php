<?php

namespace App\Listeners;

use App\Events\opennewspage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class increasignviewcount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(opennewspage $event)
    {
        $this->increas_count_visitor($event -> Visit_Count);
    }

    function increas_count_visitor($view_count){

        $view_count -> Visit_Count = $view_count -> Visit_Count +1;
        $view_count->save();
    }
}
