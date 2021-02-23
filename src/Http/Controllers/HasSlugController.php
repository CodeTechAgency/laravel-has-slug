<?php

namespace CodeTech\Sluggable\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HasSlugController extends Controller
{

    /**
     * Slugifies a text string.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function slugify(Request $request): JsonResponse
    {
        $text = $request->get('input') ?? null;

        return response()->json([
            'text' => $text,
            'slug' => Str::slug($text)
        ]);
    }
}
