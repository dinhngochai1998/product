<?php
/**
 * @Author Admin
 * @Date   May 28, 2022
 */

/**
 * @Author Admin
 * @Date   May 21, 2022
 */

namespace App\Helper;

class StatusConstant
{
    const PUBLISHED            = 'PUBLISHED';
    const UNPUBLIC             = 'UNPUBLIC';

    const ALL
        = [
            self::PUBLISHED,
            self::UNPUBLIC,
        ];
}