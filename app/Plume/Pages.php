<?php

declare(strict_types=1);

namespace App\Plume;

use Illuminate\Http\Request;
use Meetplume\Plume\NavGroup;
use Meetplume\Plume\Page;
use Meetplume\Plume\Vault;

class Pages extends Vault
{
    protected string $prefix = '';

    protected string $path = 'content/pages';

    protected string $layout = 'page';

    public function pages(): array
    {
        return [
            Page::make('laravel-zero-homepage')
                ->slug('/'),
        ];
    }

    public function canAccess(Request $request): bool
    {
        return true;
    }
}
