<?php
/**
 * SmallAndLightEnrollmentStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Small And Light
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * OpenAPI spec version: v1
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
 * SmallAndLightEnrollmentStatus Class Doc Comment
 *
 * @category Class
 * @description The Small and Light enrollment status of the item.
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmallAndLightEnrollmentStatus
{
    /**
     * Possible values of this enum
     */
    const ENROLLED = 'ENROLLED';
const NOT_ENROLLED = 'NOT_ENROLLED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENROLLED,
self::NOT_ENROLLED,        ];
    }
}
