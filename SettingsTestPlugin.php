<?php

namespace Craft;

class SettingsTestPlugin extends BasePlugin
{
    public function getVersion()
    {
        return '0.0.1';
    }

    public function getDeveloper()
    {
        return 'msbit';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/msbit';
    }

    protected function getSettingsModel()
    {
        return new SettingsTest_SettingsModel($this->defineSettings());
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('settingstest/SettingsTest_Settings', [
            'settings' => $this->getSettings()
        ]);
    }
}

