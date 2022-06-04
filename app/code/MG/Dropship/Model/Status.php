<?php

namespace MG\Dropship\Model;

class Status
{
    const NO = '0';
    const YES = '1';
    /**
     * @param bool|false $notSelected
     *
     * @return array
     */
    public static function getStatus()
    {
        $options = [];
        $options[self::NO] = __('No');
        $options[self::YES] = __('Yes');
       
        return $options;
    }
}
