<?php

namespace CleanupBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class CleanupBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use PackageVersionTrait;

    public function getComposerPackageName(): string
    {
        return 'mpk/cleanup-bundle';
    }

    public function getCssPaths(): array
    {
        return [
            '/bundles/cleanup/css/icons.css',
        ];
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/cleanup/js/startup.js',
            '/bundles/cleanup/js/settings.js',
        ];
    }

    public function getEditmodeJsPaths(): array
    {
        return [];
    }

    public function getEditmodeCssPaths(): array
    {
        return [];
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
