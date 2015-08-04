<?php namespace Mcc\ContentTypeHook;
use Backend;
use Event;

use System\Classes\PluginBase;

/**
 * ContentTypeHook Plugin Information File
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
            'name'        => 'ContentTypeHook',
            'description' => 'No description provided yet...',
            'author'      => 'Mcc',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
            
        Event::listen('backend.form.extendFieldsBefore', function ($formWidget) {
            // var_dump($formWidget->model);
            // if ($formWidget->model instanceof \Cms\Classes\Page)
                // ContentType::extendPageForm($formWidget);
        });

        Event::listen('backend.page.beforeDisplay', function($formWidget) {
           
        });


        Event::listen('cms.page.display', function ($controller, $url, $page, $result) {
            // echo"here";
            // return ContentType::getCmsPage($result, $controller);
        });

    }

}
