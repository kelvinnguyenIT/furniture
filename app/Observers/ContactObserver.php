<?php

namespace App\Observers;

use App\Mail\FeedbackMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactObserver
{
    /**
     * Handle the contact "created" event.
     *
     * @param Contact $contact
     * @return void
     */
    public function created(Contact $contact)
    {
        Mail::to($contact->email)->send(new FeedbackMail($contact->email));
    }

    /**
     * Handle the contact "updated" event.
     *
     * @param Contact $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        //
    }

    /**
     * Handle the contact "deleted" event.
     *
     * @param Contact $contact
     * @return void
     */
    public function deleted(Contact $contact)
    {
        //
    }

    /**
     * Handle the contact "restored" event.
     *
     * @param Contact $contact
     * @return void
     */
    public function restored(Contact $contact)
    {
        //
    }

    /**
     * Handle the contact "force deleted" event.
     *
     * @param Contact $contact
     * @return void
     */
    public function forceDeleted(Contact $contact)
    {
        //
    }
}
