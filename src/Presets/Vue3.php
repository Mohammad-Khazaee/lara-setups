<?php

namespace Larasetups\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class Vue3 extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateBootstrapping();
        static::updateComponent();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'resolve-url-loader' => '^3.1.2',
            'sass' => '^1.32.11',
            'sass-loader' => '^11.0.1',
            "vue" => "^3.2.2",
            "vue-loader" => "^16.5.0"
        ] + Arr::except($packages, [
            '@babel/preset-react',
            'react',
            'react-dom',
        ]);
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/vue3-stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the example component.
     *
     * @return void
     */
    protected static function updateComponent()
    {
        (new Filesystem)->delete(
            resource_path('js/components/Example.js')
        );

        copy(
            __DIR__.'/vue3-stubs/ExampleComponent.vue',
            resource_path('js/components/ExampleComponent.vue')
        );
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/vue3-stubs/app.js', resource_path('js/app.js'));
    }
}
