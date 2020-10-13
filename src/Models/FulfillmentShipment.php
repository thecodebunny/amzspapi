<?php
/**
 * FulfillmentShipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Thecodebunny\AmzSpApi
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

use \ArrayAccess;
use \Thecodebunny\AmzSpApi\ObjectSerializer;

/**
 * FulfillmentShipment Class Doc Comment
 *
 * @category Class
 * @description Delivery and item information for a shipment in a fulfillment order.
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazon_shipment_id' => 'string',
'fulfillment_center_id' => 'string',
'fulfillment_shipment_status' => 'string',
'shipping_date_time' => '\Thecodebunny\AmzSpApi\Models\Timestamp',
'estimated_arrival_date_time' => '\Thecodebunny\AmzSpApi\Models\Timestamp',
'fulfillment_shipment_item' => '\Thecodebunny\AmzSpApi\Models\FulfillmentShipmentItemList',
'fulfillment_shipment_package' => '\Thecodebunny\AmzSpApi\Models\FulfillmentShipmentPackageList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazon_shipment_id' => null,
'fulfillment_center_id' => null,
'fulfillment_shipment_status' => null,
'shipping_date_time' => null,
'estimated_arrival_date_time' => null,
'fulfillment_shipment_item' => null,
'fulfillment_shipment_package' => null    ];

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
        'amazon_shipment_id' => 'AmazonShipmentId',
'fulfillment_center_id' => 'FulfillmentCenterId',
'fulfillment_shipment_status' => 'FulfillmentShipmentStatus',
'shipping_date_time' => 'ShippingDateTime',
'estimated_arrival_date_time' => 'EstimatedArrivalDateTime',
'fulfillment_shipment_item' => 'FulfillmentShipmentItem',
'fulfillment_shipment_package' => 'FulfillmentShipmentPackage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_shipment_id' => 'setAmazonShipmentId',
'fulfillment_center_id' => 'setFulfillmentCenterId',
'fulfillment_shipment_status' => 'setFulfillmentShipmentStatus',
'shipping_date_time' => 'setShippingDateTime',
'estimated_arrival_date_time' => 'setEstimatedArrivalDateTime',
'fulfillment_shipment_item' => 'setFulfillmentShipmentItem',
'fulfillment_shipment_package' => 'setFulfillmentShipmentPackage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_shipment_id' => 'getAmazonShipmentId',
'fulfillment_center_id' => 'getFulfillmentCenterId',
'fulfillment_shipment_status' => 'getFulfillmentShipmentStatus',
'shipping_date_time' => 'getShippingDateTime',
'estimated_arrival_date_time' => 'getEstimatedArrivalDateTime',
'fulfillment_shipment_item' => 'getFulfillmentShipmentItem',
'fulfillment_shipment_package' => 'getFulfillmentShipmentPackage'    ];

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

    const FULFILLMENT_SHIPMENT_STATUS_PENDING = 'PENDING';
const FULFILLMENT_SHIPMENT_STATUS_SHIPPED = 'SHIPPED';
const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER = 'CANCELLED_BY_FULFILLER';
const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER = 'CANCELLED_BY_SELLER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentShipmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_SHIPMENT_STATUS_PENDING,
self::FULFILLMENT_SHIPMENT_STATUS_SHIPPED,
self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER,
self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER,        ];
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
        $this->container['amazon_shipment_id'] = isset($data['amazon_shipment_id']) ? $data['amazon_shipment_id'] : null;
        $this->container['fulfillment_center_id'] = isset($data['fulfillment_center_id']) ? $data['fulfillment_center_id'] : null;
        $this->container['fulfillment_shipment_status'] = isset($data['fulfillment_shipment_status']) ? $data['fulfillment_shipment_status'] : null;
        $this->container['shipping_date_time'] = isset($data['shipping_date_time']) ? $data['shipping_date_time'] : null;
        $this->container['estimated_arrival_date_time'] = isset($data['estimated_arrival_date_time']) ? $data['estimated_arrival_date_time'] : null;
        $this->container['fulfillment_shipment_item'] = isset($data['fulfillment_shipment_item']) ? $data['fulfillment_shipment_item'] : null;
        $this->container['fulfillment_shipment_package'] = isset($data['fulfillment_shipment_package']) ? $data['fulfillment_shipment_package'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['fulfillment_center_id'] === null) {
            $invalidProperties[] = "'fulfillment_center_id' can't be null";
        }
        if ($this->container['fulfillment_shipment_status'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_status' can't be null";
        }
        $allowedValues = $this->getFulfillmentShipmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_shipment_status']) && !in_array($this->container['fulfillment_shipment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fulfillment_shipment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fulfillment_shipment_item'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_item' can't be null";
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
     * Gets amazon_shipment_id
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string $amazon_shipment_id A shipment identifier assigned by Amazon.
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets fulfillment_center_id
     *
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id
     *
     * @param string $fulfillment_center_id An identifier for the fulfillment center that the shipment will be sent from.
     *
     * @return $this
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_status
     *
     * @return string
     */
    public function getFulfillmentShipmentStatus()
    {
        return $this->container['fulfillment_shipment_status'];
    }

    /**
     * Sets fulfillment_shipment_status
     *
     * @param string $fulfillment_shipment_status The current status of the shipment.
     *
     * @return $this
     */
    public function setFulfillmentShipmentStatus($fulfillment_shipment_status)
    {
        $allowedValues = $this->getFulfillmentShipmentStatusAllowableValues();
        if (!in_array($fulfillment_shipment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fulfillment_shipment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_shipment_status'] = $fulfillment_shipment_status;

        return $this;
    }

    /**
     * Gets shipping_date_time
     *
     * @return \Thecodebunny\AmzSpApi\Models\Timestamp
     */
    public function getShippingDateTime()
    {
        return $this->container['shipping_date_time'];
    }

    /**
     * Sets shipping_date_time
     *
     * @param \Thecodebunny\AmzSpApi\Models\Timestamp $shipping_date_time shipping_date_time
     *
     * @return $this
     */
    public function setShippingDateTime($shipping_date_time)
    {
        $this->container['shipping_date_time'] = $shipping_date_time;

        return $this;
    }

    /**
     * Gets estimated_arrival_date_time
     *
     * @return \Thecodebunny\AmzSpApi\Models\Timestamp
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->container['estimated_arrival_date_time'];
    }

    /**
     * Sets estimated_arrival_date_time
     *
     * @param \Thecodebunny\AmzSpApi\Models\Timestamp $estimated_arrival_date_time estimated_arrival_date_time
     *
     * @return $this
     */
    public function setEstimatedArrivalDateTime($estimated_arrival_date_time)
    {
        $this->container['estimated_arrival_date_time'] = $estimated_arrival_date_time;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_item
     *
     * @return \Thecodebunny\AmzSpApi\Models\FulfillmentShipmentItemList
     */
    public function getFulfillmentShipmentItem()
    {
        return $this->container['fulfillment_shipment_item'];
    }

    /**
     * Sets fulfillment_shipment_item
     *
     * @param \Thecodebunny\AmzSpApi\Models\FulfillmentShipmentItemList $fulfillment_shipment_item fulfillment_shipment_item
     *
     * @return $this
     */
    public function setFulfillmentShipmentItem($fulfillment_shipment_item)
    {
        $this->container['fulfillment_shipment_item'] = $fulfillment_shipment_item;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_package
     *
     * @return \Thecodebunny\AmzSpApi\Models\FulfillmentShipmentPackageList
     */
    public function getFulfillmentShipmentPackage()
    {
        return $this->container['fulfillment_shipment_package'];
    }

    /**
     * Sets fulfillment_shipment_package
     *
     * @param \Thecodebunny\AmzSpApi\Models\FulfillmentShipmentPackageList $fulfillment_shipment_package fulfillment_shipment_package
     *
     * @return $this
     */
    public function setFulfillmentShipmentPackage($fulfillment_shipment_package)
    {
        $this->container['fulfillment_shipment_package'] = $fulfillment_shipment_package;

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
