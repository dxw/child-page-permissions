<?php

namespace ChildPagePermissions;

class Settings
{
    const PLUGIN_NAME = 'Child Page Permissions';
    const PLUGIN_ID = 'child_page_permissions';
    const METAKEY = '_child_page_permissions';

    public function pluginName() : string
    {
        return self::PLUGIN_NAME;
    }

    public function pluginID() : string
    {
        return self::PLUGIN_ID;
    }

    public function metakey() : string
    {
        return self::METAKEY;
    }
}
