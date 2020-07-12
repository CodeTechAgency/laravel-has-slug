<?php

namespace CodeTech\Sluggable;

use CodeTech\Sluggable\Observers\HasSlugObserver;

trait HasSlug
{
    /**
     * Initializes the trait.
     */
    public function initializeHasSlug()
    {
        $this->fillable[] = 'slug';
    }

    /**
     * Boots the trait
     *
     * @return void
     */
    public static function bootHasSlug()
    {
        static::observe(HasSlugObserver::class);
    }
}
