<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 7:19 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/refund Shopify API Reference for Refund
 */

namespace PHPShopify;


/*
 * --------------------------------------------------------------------------
 * Refund -> Custom actions
 * --------------------------------------------------------------------------
 * @method array calculate()      Calculate a Refund.
 *
 */
class Refund extends ShopifyAPI
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'refund';

    /**
     * @inheritDoc
     */
    protected $customPostActions = array (
        'calculate',
    );
}