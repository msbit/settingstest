<?php

namespace Craft;

require_once(__DIR__ . '/../../app/bootstrap.php');

craft()->plugins->loadPlugins();

$settingsTestPlugin = craft()->plugins->getPlugin('settingstest');

switch ($_SERVER['argv'][3]) {
    case 'store':
        /*
         * Format of `forms.dateTimeField` input value
         * from settings form
         */
        craft()->plugins->savePluginSettings($settingsTestPlugin, [
            'dateTime' => new DateTime()
        ]);
        break;
    case 'load':
        $settings = $settingsTestPlugin->getSettings();
        // Settings Model
        var_dump($settings);
        // Individual setting
        var_dump($settings['dateTime']);
        // Contents of `settings` column
        $command = craft()->db->createCommand("SELECT `cp`.`settings` FROM `craft_plugins` AS `cp` WHERE `cp`.`class` = 'SettingsTest'");
        var_dump($command->queryScalar());
        break;
}

exit(0);
