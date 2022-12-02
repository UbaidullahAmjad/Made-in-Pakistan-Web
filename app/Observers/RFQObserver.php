<?php

namespace App\Observers;

use App\Models\Rfq;

class RFQObserver
{
    /**
     * Handle the rfq "created" event.
     *
     * @param  \App\Models\Rfq  $rfq
     * @return void
     */
    public function created(Rfq $rfq)
    {
        //
    }

    /**
     * Handle the rfq "updated" event.
     *
     * @param  \App\Models\Rfq  $rfq
     * @return void
     */
    public function updated(Rfq $rfq)
    {
        //
    }

    /**
     * Handle the rfq "deleted" event.
     *
     * @param  \App\Models\Rfq  $rfq
     * @return void
     */
    public function deleted(Rfq $rfq)
    {
        //
    }

    /**
     * Handle the rfq "restored" event.
     *
     * @param  \App\Models\Rfq  $rfq
     * @return void
     */
    public function restored(Rfq $rfq)
    {
        //
    }

    /**
     * Handle the rfq "force deleted" event.
     *
     * @param  \App\Models\Rfq  $rfq
     * @return void
     */
    public function forceDeleted(Rfq $rfq)
    {
        //
    }
}
