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
        $this->fillable[] = $this->sluggableAttribute();
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

    /**
     * The sluggable attribute name,
     *
     * @return string
     */
    public function sluggableAttribute()
    {
        return 'slug';
    }
}
