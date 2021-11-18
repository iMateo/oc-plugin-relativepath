<?php namespace IHORCHYSHKALA\RelativePath;

use System\Classes\PluginBase;
use Cms\Classes\Theme;
use Config;

/**
 * RelativePath Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'RelativePath',
            'description' => 'filter themel returns a relative file path without domain and protocol, to the asset specified in the filter parameter.',
            'author'      => 'IHORCHYSHKALA',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

        /**
     * Register new Twig filter |themel
     *
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'themel' => [$this, 'getRelativePath'],
            ],
        ];
    }

    public function getRelativePath(string $path = ''): string
    {   
        return sprintf('%s/%s/%s', 
                       Config::get('cms.themesPath', '/themes'), 
                       Theme::getActiveTheme()->getDirName(), 
                       $path
              );
    }

}
