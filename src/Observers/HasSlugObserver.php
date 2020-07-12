<?php

namespace CodeTech\Sluggable\Observers;

use Illuminate\Support\Str;

class HasSlugObserver
{
    /**
     * Listen to the saved event.
     *
     * @param $model
     */
    public function saving($model)
    {
        $modelSlug = empty($model->slug) ? '' : Str::slug($model->slug);

        $index  = 1;
        $suffix = '';

        do {
            $slug = $modelSlug . $suffix;

            $suffix = '-' . $index;
            $index++;

            $matches = $model::where('slug', $slug);

            if ($model->id !== null) {
                $matches->where('id', '!=', $model->id);
            }
        } while ($matches->count());

        $model->slug = $slug;
    }
}
