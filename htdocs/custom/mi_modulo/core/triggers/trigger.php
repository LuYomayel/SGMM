<?php

require_once DOL_DOCUMENT_ROOT . '/core/triggers/dolibarrtriggers.class.php';

class InterfaceAutoValidateOrder extends DolibarrTriggers
{
    public $family = 'orders';
    public $description = "Triggers of this module add actions on automatic order validation";

    public function runTrigger($action, $object, User $user, Translate $langs, Conf $conf)
    {
        if ($action === 'ORDER_CREATE') {
            $object->valid($user);
            return 0;
        }

        return -1;  // or return 0 to do nothing
    }
}
