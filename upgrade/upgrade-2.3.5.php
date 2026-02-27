<?php

function upgrade_module_2_3_5($module)
{
    // Unregister hooks that were removed in PrestaShop 9.x
    $module->unregisterHook('header');
    $module->unregisterHook('orderDetailDisplayed');

    return true;
}
