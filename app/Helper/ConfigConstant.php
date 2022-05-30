<?php
/**
 * @Author Admin
 * @Date   May 21, 2022
 */

namespace App\Helper;

use App\Config;

class ConfigConstant
{
    const PUBLISHED            = 'PUBLISHED';
    const UNPUBLIC             = 'UNPUBLIC';

    const ALL
        = [
            self::PUBLISHED,
            self::UNPUBLIC,
        ];


    public function getConfig($config) {

       return Config::query()->where('slug', $config)->first();
    }

}