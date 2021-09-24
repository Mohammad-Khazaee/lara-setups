<?php

namespace Larasetups\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Larasetups\Presets\Preset;

class Vue2 extends Preset
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
            'vue' => '^2.6.12',
            "vue-loader" => "^15.9.8",
            'vue-template-compiler' => '^2.6.12',
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
        if(!(new Filesystem)->exists(base_path('/resources/sass/app.scss'))){

            (new Filesystem)->ensureDirectoryExists(resource_path('sass'));
            copy(__DIR__.'/vue2-stubs/app.scss' , base_path('resources/sass/app.scss'));
            
        };
        copy(__DIR__.'/vue2-stubs/webpack.mix.js', base_path('webpack.mix.js'));
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
            __DIR__.'/vue2-stubs/ExampleComponent.vue',
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
        copy(__DIR__.'/vue2-stubs/app.js', resource_path('js/app.js'));
    }
}
