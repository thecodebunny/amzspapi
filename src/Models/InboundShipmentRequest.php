<?php
/**
 * InboundShipmentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

use \ArrayAccess;
use \Thecodebunny\AmzSpApi\ObjectSerializer;

/**
 * InboundShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for an inbound shipment.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InboundShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inbound_shipment_header' => '\Thecodebunny\AmzSpApi\Models\InboundShipmentHeader',
'inbound_shipment_items' => '\Thecodebunny\AmzSpApi\Models\InboundShipmentItemList',
'marketplace_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inbound_shipment_header' => null,
'inbound_shipment_items' => null,
'marketplace_id' => null    ];

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
        'inbound_shipment_header' => 'InboundShipmentHeader',
'inbound_shipment_items' => 'InboundShipmentItems',
'marketplace_id' => 'MarketplaceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbound_shipment_header' => 'setInboundShipmentHeader',
'inbound_shipment_items' => 'setInboundShipmentItems',
'marketplace_id' => 'setMarketplaceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbound_shipment_header' => 'getInboundShipmentHeader',
'inbound_shipment_items' => 'getInboundShipmentItems',
'marketplace_id' => 'getMarketplaceId'    ];

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
        $this->container['inbound_shipment_header'] = isset($data['inbound_shipment_header']) ? $data['inbound_shipment_header'] : null;
        $this->container['inbound_shipment_items'] = isset($data['inbound_shipment_items']) ? $data['inbound_shipment_items'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inbound_shipment_header'] === null) {
            $invalidProperties[] = "'inbound_shipment_header' can't be null";
        }
        if ($this->container['inbound_shipment_items'] === null) {
            $invalidProperties[] = "'inbound_shipment_items' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
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
     * Gets inbound_shipment_header
     *
     * @return \Thecodebunny\AmzSpApi\Models\InboundShipmentHeader
     */
    public function getInboundShipmentHeader()
    {
        return $this->container['inbound_shipment_header'];
    }

    /**
     * Sets inbound_shipment_header
     *
     * @param \Thecodebunny\AmzSpApi\Models\InboundShipmentHeader $inbound_shipment_header inbound_shipment_header
     *
     * @return $this
     */
    public function setInboundShipmentHeader($inbound_shipment_header)
    {
        $this->container['inbound_shipment_header'] = $inbound_shipment_header;

        return $this;
    }

    /**
     * Gets inbound_shipment_items
     *
     * @return \Thecodebunny\AmzSpApi\Models\InboundShipmentItemList
     */
    public function getInboundShipmentItems()
    {
        return $this->container['inbound_shipment_items'];
    }

    /**
     * Sets inbound_shipment_items
     *
     * @param \Thecodebunny\AmzSpApi\Models\InboundShipmentItemList $inbound_shipment_items inbound_shipment_items
     *
     * @return $this
     */
    public function setInboundShipmentItems($inbound_shipment_items)
    {
        $this->container['inbound_shipment_items'] = $inbound_shipment_items;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
