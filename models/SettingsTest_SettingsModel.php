<?php

namespace Craft;

class SettingsTest_SettingsModel extends Model
{
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), [
            'dateTime' => AttributeType::DateTime
        ]);
    }
}
