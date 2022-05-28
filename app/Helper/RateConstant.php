<?php
/**
 * @Author Admin
 * @Date   May 21, 2022
 */

namespace App\Helper;

class RateConstant
{
    const PROMOTIONAL_PRODUCTS = 'promotional-products';
    const LATEST_PRODUCTS = 'latest-product';
    const FEATURED_PRODUCTS = 'featured-products';
    const PUBLISHED = 'PUBLISHED';
    const UNPUBLIC = 'UNPUBLIC';

    const ALL
        = [
            self::PROMOTIONAL_PRODUCTS,
            self::LATEST_PRODUCTS,
            self::FEATURED_PRODUCTS,
            self::PUBLISHED,
            self::UNPUBLIC,
        ];
}