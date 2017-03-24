<?php namespace Edps\TawkTo\Components;

use Cms\Classes\ComponentBase;
use \stdClass;

class TawkTo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'edps.tawkto::lang.components.tawkto.name',
            'description' => 'edps.tawkto::lang.components.tawkto.description'
        ];
    }
  	public function defineProperties()
    {
        return [
            'apikey' => [
                'title'             => 'edps.tawkto::lang.components.tawkto.apikey.value.title',
                'description'       => 'edps.tawkto::lang.components.tawkto.apikey.value.description',
                'default'           => 'YOUR_API_KEY_TAWK_TO',
                'type'              => 'string',
            ],
            'widgetname' => [
                'title'             => 'edps.tawkto::lang.components.tawkto.widgetname.value.title',
                'description'       => 'edps.tawkto::lang.components.tawkto.widgetname.value.description',
                'default'           => 'default',
                'type'              => 'text',
            ],
        ];
    }
  	public function onRun()
    {
        $TawkTo = new stdClass();

        $TawkTo->apikey             = $this->property('apikey');
        $TawkTo->widgetname         = $this->property('widgetname');

        $this->page['dataToTawkTo'] = $TawkTo;
   	}

}
