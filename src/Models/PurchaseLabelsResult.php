<?php
/**
 * PurchaseLabelsResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
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

use \ArrayAccess;
use \Thecodebunny\AmzSpApi\ObjectSerializer;

/**
 * PurchaseLabelsResult Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the purchaseLabels operation.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseLabelsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseLabelsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => '\Thecodebunny\AmzSpApi\Models\ShipmentId',
'client_reference_id' => '\Thecodebunny\AmzSpApi\Models\ClientReferenceId',
'accepted_rate' => '\Thecodebunny\AmzSpApi\Models\AcceptedRate',
'label_results' => '\Thecodebunny\AmzSpApi\Models\LabelResultList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'client_reference_id' => null,
'accepted_rate' => null,
'label_results' => null    ];

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
        'shipment_id' => 'shipmentId',
'client_reference_id' => 'clientReferenceId',
'accepted_rate' => 'acceptedRate',
'label_results' => 'labelResults'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'client_reference_id' => 'setClientReferenceId',
'accepted_rate' => 'setAcceptedRate',
'label_results' => 'setLabelResults'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'client_reference_id' => 'getClientReferenceId',
'accepted_rate' => 'getAcceptedRate',
'label_results' => 'getLabelResults'    ];

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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['client_reference_id'] = isset($data['client_reference_id']) ? $data['client_reference_id'] : null;
        $this->container['accepted_rate'] = isset($data['accepted_rate']) ? $data['accepted_rate'] : null;
        $this->container['label_results'] = isset($data['label_results']) ? $data['label_results'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['accepted_rate'] === null) {
            $invalidProperties[] = "'accepted_rate' can't be null";
        }
        if ($this->container['label_results'] === null) {
            $invalidProperties[] = "'label_results' can't be null";
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
     * Gets shipment_id
     *
     * @return \Thecodebunny\AmzSpApi\Models\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param \Thecodebunny\AmzSpApi\Models\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets client_reference_id
     *
     * @return \Thecodebunny\AmzSpApi\Models\ClientReferenceId
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     *
     * @param \Thecodebunny\AmzSpApi\Models\ClientReferenceId $client_reference_id client_reference_id
     *
     * @return $this
     */
    public function setClientReferenceId($client_reference_id)
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets accepted_rate
     *
     * @return \Thecodebunny\AmzSpApi\Models\AcceptedRate
     */
    public function getAcceptedRate()
    {
        return $this->container['accepted_rate'];
    }

    /**
     * Sets accepted_rate
     *
     * @param \Thecodebunny\AmzSpApi\Models\AcceptedRate $accepted_rate accepted_rate
     *
     * @return $this
     */
    public function setAcceptedRate($accepted_rate)
    {
        $this->container['accepted_rate'] = $accepted_rate;

        return $this;
    }

    /**
     * Gets label_results
     *
     * @return \Thecodebunny\AmzSpApi\Models\LabelResultList
     */
    public function getLabelResults()
    {
        return $this->container['label_results'];
    }

    /**
     * Sets label_results
     *
     * @param \Thecodebunny\AmzSpApi\Models\LabelResultList $label_results label_results
     *
     * @return $this
     */
    public function setLabelResults($label_results)
    {
        $this->container['label_results'] = $label_results;

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
