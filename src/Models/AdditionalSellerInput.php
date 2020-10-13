<?php
/**
 * AdditionalSellerInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

use \ArrayAccess;
use \Thecodebunny\AmzSpApi\ObjectSerializer;

/**
 * AdditionalSellerInput Class Doc Comment
 *
 * @category Class
 * @description Additional information required to purchase shipping.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdditionalSellerInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdditionalSellerInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_type' => 'string',
'value_as_string' => 'string',
'value_as_boolean' => 'bool',
'value_as_integer' => 'int',
'value_as_timestamp' => '\Thecodebunny\AmzSpApi\Models\Timestamp',
'value_as_address' => '\Thecodebunny\AmzSpApi\Models\Address',
'value_as_weight' => '\Thecodebunny\AmzSpApi\Models\Weight',
'value_as_dimension' => '\Thecodebunny\AmzSpApi\Models\Length',
'value_as_currency' => '\Thecodebunny\AmzSpApi\Models\CurrencyAmount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_type' => null,
'value_as_string' => null,
'value_as_boolean' => null,
'value_as_integer' => null,
'value_as_timestamp' => null,
'value_as_address' => null,
'value_as_weight' => null,
'value_as_dimension' => null,
'value_as_currency' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data_type' => 'DataType',
'value_as_string' => 'ValueAsString',
'value_as_boolean' => 'ValueAsBoolean',
'value_as_integer' => 'ValueAsInteger',
'value_as_timestamp' => 'ValueAsTimestamp',
'value_as_address' => 'ValueAsAddress',
'value_as_weight' => 'ValueAsWeight',
'value_as_dimension' => 'ValueAsDimension',
'value_as_currency' => 'ValueAsCurrency'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_type' => 'setDataType',
'value_as_string' => 'setValueAsString',
'value_as_boolean' => 'setValueAsBoolean',
'value_as_integer' => 'setValueAsInteger',
'value_as_timestamp' => 'setValueAsTimestamp',
'value_as_address' => 'setValueAsAddress',
'value_as_weight' => 'setValueAsWeight',
'value_as_dimension' => 'setValueAsDimension',
'value_as_currency' => 'setValueAsCurrency'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_type' => 'getDataType',
'value_as_string' => 'getValueAsString',
'value_as_boolean' => 'getValueAsBoolean',
'value_as_integer' => 'getValueAsInteger',
'value_as_timestamp' => 'getValueAsTimestamp',
'value_as_address' => 'getValueAsAddress',
'value_as_weight' => 'getValueAsWeight',
'value_as_dimension' => 'getValueAsDimension',
'value_as_currency' => 'getValueAsCurrency'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['value_as_string'] = isset($data['value_as_string']) ? $data['value_as_string'] : null;
        $this->container['value_as_boolean'] = isset($data['value_as_boolean']) ? $data['value_as_boolean'] : null;
        $this->container['value_as_integer'] = isset($data['value_as_integer']) ? $data['value_as_integer'] : null;
        $this->container['value_as_timestamp'] = isset($data['value_as_timestamp']) ? $data['value_as_timestamp'] : null;
        $this->container['value_as_address'] = isset($data['value_as_address']) ? $data['value_as_address'] : null;
        $this->container['value_as_weight'] = isset($data['value_as_weight']) ? $data['value_as_weight'] : null;
        $this->container['value_as_dimension'] = isset($data['value_as_dimension']) ? $data['value_as_dimension'] : null;
        $this->container['value_as_currency'] = isset($data['value_as_currency']) ? $data['value_as_currency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type The data type of the additional information.
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets value_as_string
     *
     * @return string
     */
    public function getValueAsString()
    {
        return $this->container['value_as_string'];
    }

    /**
     * Sets value_as_string
     *
     * @param string $value_as_string The value when the data type is string.
     *
     * @return $this
     */
    public function setValueAsString($value_as_string)
    {
        $this->container['value_as_string'] = $value_as_string;

        return $this;
    }

    /**
     * Gets value_as_boolean
     *
     * @return bool
     */
    public function getValueAsBoolean()
    {
        return $this->container['value_as_boolean'];
    }

    /**
     * Sets value_as_boolean
     *
     * @param bool $value_as_boolean The value when the data type is boolean.
     *
     * @return $this
     */
    public function setValueAsBoolean($value_as_boolean)
    {
        $this->container['value_as_boolean'] = $value_as_boolean;

        return $this;
    }

    /**
     * Gets value_as_integer
     *
     * @return int
     */
    public function getValueAsInteger()
    {
        return $this->container['value_as_integer'];
    }

    /**
     * Sets value_as_integer
     *
     * @param int $value_as_integer The value when the data type is integer.
     *
     * @return $this
     */
    public function setValueAsInteger($value_as_integer)
    {
        $this->container['value_as_integer'] = $value_as_integer;

        return $this;
    }

    /**
     * Gets value_as_timestamp
     *
     * @return \Thecodebunny\AmzSpApi\Models\Timestamp
     */
    public function getValueAsTimestamp()
    {
        return $this->container['value_as_timestamp'];
    }

    /**
     * Sets value_as_timestamp
     *
     * @param \Thecodebunny\AmzSpApi\Models\Timestamp $value_as_timestamp value_as_timestamp
     *
     * @return $this
     */
    public function setValueAsTimestamp($value_as_timestamp)
    {
        $this->container['value_as_timestamp'] = $value_as_timestamp;

        return $this;
    }

    /**
     * Gets value_as_address
     *
     * @return \Thecodebunny\AmzSpApi\Models\Address
     */
    public function getValueAsAddress()
    {
        return $this->container['value_as_address'];
    }

    /**
     * Sets value_as_address
     *
     * @param \Thecodebunny\AmzSpApi\Models\Address $value_as_address value_as_address
     *
     * @return $this
     */
    public function setValueAsAddress($value_as_address)
    {
        $this->container['value_as_address'] = $value_as_address;

        return $this;
    }

    /**
     * Gets value_as_weight
     *
     * @return \Thecodebunny\AmzSpApi\Models\Weight
     */
    public function getValueAsWeight()
    {
        return $this->container['value_as_weight'];
    }

    /**
     * Sets value_as_weight
     *
     * @param \Thecodebunny\AmzSpApi\Models\Weight $value_as_weight value_as_weight
     *
     * @return $this
     */
    public function setValueAsWeight($value_as_weight)
    {
        $this->container['value_as_weight'] = $value_as_weight;

        return $this;
    }

    /**
     * Gets value_as_dimension
     *
     * @return \Thecodebunny\AmzSpApi\Models\Length
     */
    public function getValueAsDimension()
    {
        return $this->container['value_as_dimension'];
    }

    /**
     * Sets value_as_dimension
     *
     * @param \Thecodebunny\AmzSpApi\Models\Length $value_as_dimension value_as_dimension
     *
     * @return $this
     */
    public function setValueAsDimension($value_as_dimension)
    {
        $this->container['value_as_dimension'] = $value_as_dimension;

        return $this;
    }

    /**
     * Gets value_as_currency
     *
     * @return \Thecodebunny\AmzSpApi\Models\CurrencyAmount
     */
    public function getValueAsCurrency()
    {
        return $this->container['value_as_currency'];
    }

    /**
     * Sets value_as_currency
     *
     * @param \Thecodebunny\AmzSpApi\Models\CurrencyAmount $value_as_currency value_as_currency
     *
     * @return $this
     */
    public function setValueAsCurrency($value_as_currency)
    {
        $this->container['value_as_currency'] = $value_as_currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}