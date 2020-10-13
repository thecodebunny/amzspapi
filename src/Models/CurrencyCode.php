<?php
/**
 * CurrencyCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
 * CurrencyCode Class Doc Comment
 *
 * @category Class
 * @description The currency code.
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyCode
{
    /**
     * Possible values of this enum
     */
    const USD = 'USD';
const GBP = 'GBP';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USD,
self::GBP,        ];
    }
}
