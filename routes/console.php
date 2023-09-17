<?php

declare(strict_types=1);

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('play', function () {
//   $category = \App\Models\Category::find(1);
//   dd($category->products[0]->name);

    $product = \App\Models\Product::find(1);
    dd($product->category->name);
});
