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
        $sluggable = $model->sluggableAttribute();

        $modelSlug = empty($model->{$sluggable}) ? '' : Str::slug($model->{$sluggable});

        $index  = 1;
        $suffix = '';

        do {
            $slug = $modelSlug . $suffix;

            $suffix = '-' . $index;
            $index++;

            $matches = $model::where($sluggable, $slug);

            if ($model->id !== null) {
                $matches->where('id', '!=', $model->id);
            }
        } while ($matches->count());

        $model->{$sluggable} = $slug;
    }
}
