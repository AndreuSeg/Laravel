<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\PostReaderListener;
use App\Events\PostReadedEvent;
use App\Listeners\SaveAuthorOnCreatePostListener;
use App\Events\SaveAuthorOnCreatePostEvent;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        /**
         * En el eventServiceProvider tienes que poner el evento
         * y el listener dentro del evento
         */
        PostReadedEvent::class => [
            PostReaderListener::class
        ],
        SaveAuthorOnCreatePostEvent::class => [
            SaveAuthorOnCreatePostListener::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
