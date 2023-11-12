<?php

namespace Konnec\MaterializedViews\Traits;

use Exception;
use Konnec\MaterializedViews\Jobs\CreateView;

trait MaterializedView
{
    protected string $view = '';

    protected static function booted(): void
    {
        if (!static::$view) throw new Exception('View not defined');

        static::created(function (mixed $model) {
            CreateView::dispatch(static::$view, $model);
        });
        static::updated(function () {
        });
        static::deleted(function () {
        });
    }
}
