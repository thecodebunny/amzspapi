<?php
/**
 * ShippingSpeedCategory
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Thecodebunny\AmzSpApi\Models;
use \Thecodebunny\AmzSpApi\ObjectSerializer;

/**
 * ShippingSpeedCategory Class Doc Comment
 *
 * @category Class
 * @description The shipping method used for the fulfillment order.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingSpeedCategory
{
    /**
     * Possible values of this enum
     */
    const STANDARD = 'Standard';
const EXPEDITED = 'Expedited';
const PRIORITY = 'Priority';
const SCHEDULED_DELIVERY = 'ScheduledDelivery';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STANDARD,
self::EXPEDITED,
self::PRIORITY,
self::SCHEDULED_DELIVERY,        ];
    }
}
