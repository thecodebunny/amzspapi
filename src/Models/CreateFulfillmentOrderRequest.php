<?php
/**
 * CreateFulfillmentOrderRequest
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
 * CreateFulfillmentOrderRequest Class Doc Comment
 *
 * @category Class
 * @description The request body schema for the createFulfillmentOrder operation.
 * @package  Thecodebunny\AmzSpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFulfillmentOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFulfillmentOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'seller_fulfillment_order_id' => 'string',
'displayable_order_id' => 'string',
'displayable_order_date_time' => '\Thecodebunny\AmzSpApi\Models\Timestamp',
'displayable_order_comment' => 'string',
'shipping_speed_category' => '\Thecodebunny\AmzSpApi\Models\ShippingSpeedCategory',
'delivery_window' => '\Thecodebunny\AmzSpApi\Models\DeliveryWindow',
'destination_address' => '\Thecodebunny\AmzSpApi\Models\Address',
'fulfillment_action' => '\Thecodebunny\AmzSpApi\Models\FulfillmentAction',
'fulfillment_policy' => '\Thecodebunny\AmzSpApi\Models\FulfillmentPolicy',
'fulfillment_method' => 'string',
'cod_settings' => '\Thecodebunny\AmzSpApi\Models\CODSettings',
'ship_from_country_code' => 'string',
'notification_email_list' => '\Thecodebunny\AmzSpApi\Models\NotificationEmailList',
'items' => '\Thecodebunny\AmzSpApi\Models\CreateFulfillmentOrderItemList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'seller_fulfillment_order_id' => null,
'displayable_order_id' => null,
'displayable_order_date_time' => null,
'displayable_order_comment' => null,
'shipping_speed_category' => null,
'delivery_window' => null,
'destination_address' => null,
'fulfillment_action' => null,
'fulfillment_policy' => null,
'fulfillment_method' => null,
'cod_settings' => null,
'ship_from_country_code' => null,
'notification_email_list' => null,
'items' => null    ];

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
        'marketplace_id' => 'MarketplaceId',
'seller_fulfillment_order_id' => 'SellerFulfillmentOrderId',
'displayable_order_id' => 'DisplayableOrderId',
'displayable_order_date_time' => 'DisplayableOrderDateTime',
'displayable_order_comment' => 'DisplayableOrderComment',
'shipping_speed_category' => 'ShippingSpeedCategory',
'delivery_window' => 'DeliveryWindow',
'destination_address' => 'DestinationAddress',
'fulfillment_action' => 'FulfillmentAction',
'fulfillment_policy' => 'FulfillmentPolicy',
'fulfillment_method' => 'FulfillmentMethod',
'cod_settings' => 'CODSettings',
'ship_from_country_code' => 'ShipFromCountryCode',
'notification_email_list' => 'NotificationEmailList',
'items' => 'Items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
'displayable_order_id' => 'setDisplayableOrderId',
'displayable_order_date_time' => 'setDisplayableOrderDateTime',
'displayable_order_comment' => 'setDisplayableOrderComment',
'shipping_speed_category' => 'setShippingSpeedCategory',
'delivery_window' => 'setDeliveryWindow',
'destination_address' => 'setDestinationAddress',
'fulfillment_action' => 'setFulfillmentAction',
'fulfillment_policy' => 'setFulfillmentPolicy',
'fulfillment_method' => 'setFulfillmentMethod',
'cod_settings' => 'setCodSettings',
'ship_from_country_code' => 'setShipFromCountryCode',
'notification_email_list' => 'setNotificationEmailList',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
'displayable_order_id' => 'getDisplayableOrderId',
'displayable_order_date_time' => 'getDisplayableOrderDateTime',
'displayable_order_comment' => 'getDisplayableOrderComment',
'shipping_speed_category' => 'getShippingSpeedCategory',
'delivery_window' => 'getDeliveryWindow',
'destination_address' => 'getDestinationAddress',
'fulfillment_action' => 'getFulfillmentAction',
'fulfillment_policy' => 'getFulfillmentPolicy',
'fulfillment_method' => 'getFulfillmentMethod',
'cod_settings' => 'getCodSettings',
'ship_from_country_code' => 'getShipFromCountryCode',
'notification_email_list' => 'getNotificationEmailList',
'items' => 'getItems'    ];

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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['seller_fulfillment_order_id'] = isset($data['seller_fulfillment_order_id']) ? $data['seller_fulfillment_order_id'] : null;
        $this->container['displayable_order_id'] = isset($data['displayable_order_id']) ? $data['displayable_order_id'] : null;
        $this->container['displayable_order_date_time'] = isset($data['displayable_order_date_time']) ? $data['displayable_order_date_time'] : null;
        $this->container['displayable_order_comment'] = isset($data['displayable_order_comment']) ? $data['displayable_order_comment'] : null;
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['fulfillment_action'] = isset($data['fulfillment_action']) ? $data['fulfillment_action'] : null;
        $this->container['fulfillment_policy'] = isset($data['fulfillment_policy']) ? $data['fulfillment_policy'] : null;
        $this->container['fulfillment_method'] = isset($data['fulfillment_method']) ? $data['fulfillment_method'] : null;
        $this->container['cod_settings'] = isset($data['cod_settings']) ? $data['cod_settings'] : null;
        $this->container['ship_from_country_code'] = isset($data['ship_from_country_code']) ? $data['ship_from_country_code'] : null;
        $this->container['notification_email_list'] = isset($data['notification_email_list']) ? $data['notification_email_list'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_fulfillment_order_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_id' can't be null";
        }
        if ($this->container['displayable_order_id'] === null) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if ($this->container['displayable_order_date_time'] === null) {
            $invalidProperties[] = "'displayable_order_date_time' can't be null";
        }
        if ($this->container['displayable_order_comment'] === null) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * @param string $marketplace_id The marketplace the fulfillment order is placed against.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    /**
     * Sets seller_fulfillment_order_id
     *
     * @param string $seller_fulfillment_order_id A fulfillment order identifier that the seller creates to track their fulfillment order. The SellerFulfillmentOrderId must be unique for each fulfillment order that a seller creates. If the seller's system already creates unique order identifiers, then these might be good values for them to use.
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_id
     *
     * @return string
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id
     *
     * @param string $displayable_order_id A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.  The value must be an alpha-numeric or ISO 8859-1 compliant string from one to 40 characters in length. Cannot contain two spaces in a row. Leading and trailing white space is removed.
     *
     * @return $this
     */
    public function setDisplayableOrderId($displayable_order_id)
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date_time
     *
     * @return \Thecodebunny\AmzSpApi\Models\Timestamp
     */
    public function getDisplayableOrderDateTime()
    {
        return $this->container['displayable_order_date_time'];
    }

    /**
     * Sets displayable_order_date_time
     *
     * @param \Thecodebunny\AmzSpApi\Models\Timestamp $displayable_order_date_time displayable_order_date_time
     *
     * @return $this
     */
    public function setDisplayableOrderDateTime($displayable_order_date_time)
    {
        $this->container['displayable_order_date_time'] = $displayable_order_date_time;

        return $this;
    }

    /**
     * Gets displayable_order_comment
     *
     * @return string
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment
     *
     * @param string $displayable_order_comment Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip.
     *
     * @return $this
     */
    public function setDisplayableOrderComment($displayable_order_comment)
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
    }

    /**
     * Gets shipping_speed_category
     *
     * @return \Thecodebunny\AmzSpApi\Models\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category
     *
     * @param \Thecodebunny\AmzSpApi\Models\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return $this
     */
    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets delivery_window
     *
     * @return \Thecodebunny\AmzSpApi\Models\DeliveryWindow
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window
     *
     * @param \Thecodebunny\AmzSpApi\Models\DeliveryWindow $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \Thecodebunny\AmzSpApi\Models\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \Thecodebunny\AmzSpApi\Models\Address $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action
     *
     * @return \Thecodebunny\AmzSpApi\Models\FulfillmentAction
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action
     *
     * @param \Thecodebunny\AmzSpApi\Models\FulfillmentAction $fulfillment_action fulfillment_action
     *
     * @return $this
     */
    public function setFulfillmentAction($fulfillment_action)
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy
     *
     * @return \Thecodebunny\AmzSpApi\Models\FulfillmentPolicy
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy
     *
     * @param \Thecodebunny\AmzSpApi\Models\FulfillmentPolicy $fulfillment_policy fulfillment_policy
     *
     * @return $this
     */
    public function setFulfillmentPolicy($fulfillment_policy)
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets fulfillment_method
     *
     * @return string
     */
    public function getFulfillmentMethod()
    {
        return $this->container['fulfillment_method'];
    }

    /**
     * Sets fulfillment_method
     *
     * @param string $fulfillment_method Indicates the intended recipient channel for the order.
     *
     * @return $this
     */
    public function setFulfillmentMethod($fulfillment_method)
    {
        $this->container['fulfillment_method'] = $fulfillment_method;

        return $this;
    }

    /**
     * Gets cod_settings
     *
     * @return \Thecodebunny\AmzSpApi\Models\CODSettings
     */
    public function getCodSettings()
    {
        return $this->container['cod_settings'];
    }

    /**
     * Sets cod_settings
     *
     * @param \Thecodebunny\AmzSpApi\Models\CODSettings $cod_settings cod_settings
     *
     * @return $this
     */
    public function setCodSettings($cod_settings)
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    /**
     * Gets ship_from_country_code
     *
     * @return string
     */
    public function getShipFromCountryCode()
    {
        return $this->container['ship_from_country_code'];
    }

    /**
     * Sets ship_from_country_code
     *
     * @param string $ship_from_country_code The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     *
     * @return $this
     */
    public function setShipFromCountryCode($ship_from_country_code)
    {
        $this->container['ship_from_country_code'] = $ship_from_country_code;

        return $this;
    }

    /**
     * Gets notification_email_list
     *
     * @return \Thecodebunny\AmzSpApi\Models\NotificationEmailList
     */
    public function getNotificationEmailList()
    {
        return $this->container['notification_email_list'];
    }

    /**
     * Sets notification_email_list
     *
     * @param \Thecodebunny\AmzSpApi\Models\NotificationEmailList $notification_email_list notification_email_list
     *
     * @return $this
     */
    public function setNotificationEmailList($notification_email_list)
    {
        $this->container['notification_email_list'] = $notification_email_list;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Thecodebunny\AmzSpApi\Models\CreateFulfillmentOrderItemList
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Thecodebunny\AmzSpApi\Models\CreateFulfillmentOrderItemList $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
