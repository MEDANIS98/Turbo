<?php

declare(strict_types=1);

namespace App\Nova;

use Spatie\Translatable\HasTranslations;
use Whitecube\NovaPage\Pages\OptionResource;

class Option extends OptionResource
{
    use HasTranslations;

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __(config('novapage.labels.options'));
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __(config('novapage.labels.option'));
    }
}
