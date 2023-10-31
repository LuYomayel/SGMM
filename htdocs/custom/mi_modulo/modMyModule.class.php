<?php

dol_include_once('/core/modules/DolibarrModules.class.php');

class modMyModule extends DolibarrModules
{
    public function __construct($db)
    {
        global $langs;

        $this->db = $db;
        $this->numero = 104010;  // Unique identifier for your module
        $this->rights_class = 'mymodule';
        $this->family = "technic";
        $this->module_position = '55';
        $this->name = $langs->trans("MyModule");
        $this->description = $langs->trans("MyModuleDescription");
        $this->version = '1.0';
        // ... other properties ...

        // This is where you register your trigger
        $this->triggers[] = array(
            'code' => 'MY_TRIGGER',
            'class' => '/mymodule/core/triggers/trigger.php',
            'function' => 'runTrigger',
            'description' => $langs->trans("MyTriggerDescription"),
            'type' => 'ORDER_CREATE',
        );
    }
}
