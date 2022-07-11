<?php

namespace App\Listeners;
use App\Events\ProjectSaved;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OptimizeProjectImage implements ShouldQueue
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
     * @param  \App\Events\ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {
        $image = Image::make(Storage::get($event->project->image))
            ->widen(500)
            ->limitColors(220)
            ->encode();

        Storage::put($event->project->image, (string) $image);
    }
}
