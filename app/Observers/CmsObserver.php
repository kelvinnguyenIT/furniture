<?php

namespace App\Observers;

use App\Models\Cms;
use App\Services\ImageService;

class CmsObserver
{
    /**
     * @var ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * Handle the cms "created" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function created(Cms $cms)
    {
        //
    }

    /**
     * Handle the cms "created" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function updating(Cms $cms)
    {
        $this->imageService->delete($cms->getOriginal('value'));
    }

    /**
     * Handle the cms "updated" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function updated(Cms $cms)
    {
        //
    }

    /**
     * Handle the cms "deleted" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function deleted(Cms $cms)
    {
        $this->imageService->delete($cms->value);
    }

    /**
     * Handle the cms "restored" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function restored(Cms $cms)
    {
        //
    }

    /**
     * Handle the cms "force deleted" event.
     *
     * @param Cms $cms
     * @return void
     */
    public function forceDeleted(Cms $cms)
    {
        //
    }
}
