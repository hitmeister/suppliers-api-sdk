<?php
/**
 * GetInventoryUnitResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.11.0
 * Contact: sms.tech@real-digital.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Model;

use \ArrayAccess;

/**
 * GetInventoryUnitResponse Class Doc Comment
 *
 * @category    Class
 * @package     SMS\Suppliers
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetInventoryUnitResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetInventoryUnitResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_id' => 'int',
        'condition' => 'string',
        'ean' => 'string',
        'price' => 'float',
        'quantity' => 'int',
        'inventory_id' => 'int',
        'supplier_item_id' => 'string',
        'minimal_order_volume' => 'int',
        'freight_costs' => 'float',
        'handling_costs' => 'float',
        'return_shipping_cost' => 'float',
        'delivery_min_time' => 'int',
        'delivery_max_time' => 'int',
        'is_hauler_delivery' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_id' => 'int64',
        'condition' => null,
        'ean' => null,
        'price' => 'float',
        'quantity' => 'int64',
        'inventory_id' => 'int64',
        'supplier_item_id' => null,
        'minimal_order_volume' => 'int64',
        'freight_costs' => 'float',
        'handling_costs' => 'float',
        'return_shipping_cost' => 'float',
        'delivery_min_time' => 'int64',
        'delivery_max_time' => 'int64',
        'is_hauler_delivery' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'item_id' => 'item_id',
        'condition' => 'condition',
        'ean' => 'ean',
        'price' => 'price',
        'quantity' => 'quantity',
        'inventory_id' => 'inventory_id',
        'supplier_item_id' => 'supplier_item_id',
        'minimal_order_volume' => 'minimal_order_volume',
        'freight_costs' => 'freight_costs',
        'handling_costs' => 'handling_costs',
        'return_shipping_cost' => 'return_shipping_cost',
        'delivery_min_time' => 'delivery_min_time',
        'delivery_max_time' => 'delivery_max_time',
        'is_hauler_delivery' => 'is_hauler_delivery'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'condition' => 'setCondition',
        'ean' => 'setEan',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'inventory_id' => 'setInventoryId',
        'supplier_item_id' => 'setSupplierItemId',
        'minimal_order_volume' => 'setMinimalOrderVolume',
        'freight_costs' => 'setFreightCosts',
        'handling_costs' => 'setHandlingCosts',
        'return_shipping_cost' => 'setReturnShippingCost',
        'delivery_min_time' => 'setDeliveryMinTime',
        'delivery_max_time' => 'setDeliveryMaxTime',
        'is_hauler_delivery' => 'setIsHaulerDelivery'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'condition' => 'getCondition',
        'ean' => 'getEan',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'inventory_id' => 'getInventoryId',
        'supplier_item_id' => 'getSupplierItemId',
        'minimal_order_volume' => 'getMinimalOrderVolume',
        'freight_costs' => 'getFreightCosts',
        'handling_costs' => 'getHandlingCosts',
        'return_shipping_cost' => 'getReturnShippingCost',
        'delivery_min_time' => 'getDeliveryMinTime',
        'delivery_max_time' => 'getDeliveryMaxTime',
        'is_hauler_delivery' => 'getIsHaulerDelivery'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const CONDITION__NEW = 'new';
    const CONDITION_AS_NEW = 'as_new';
    const CONDITION_VERY_GOOD = 'very_good';
    const CONDITION_GOOD = 'good';
    const CONDITION_ACCEPTABLE = 'acceptable';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_AS_NEW,
            self::CONDITION_VERY_GOOD,
            self::CONDITION_GOOD,
            self::CONDITION_ACCEPTABLE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['supplier_item_id'] = isset($data['supplier_item_id']) ? $data['supplier_item_id'] : null;
        $this->container['minimal_order_volume'] = isset($data['minimal_order_volume']) ? $data['minimal_order_volume'] : null;
        $this->container['freight_costs'] = isset($data['freight_costs']) ? $data['freight_costs'] : null;
        $this->container['handling_costs'] = isset($data['handling_costs']) ? $data['handling_costs'] : null;
        $this->container['return_shipping_cost'] = isset($data['return_shipping_cost']) ? $data['return_shipping_cost'] : null;
        $this->container['delivery_min_time'] = isset($data['delivery_min_time']) ? $data['delivery_min_time'] : null;
        $this->container['delivery_max_time'] = isset($data['delivery_max_time']) ? $data['delivery_max_time'] : null;
        $this->container['is_hauler_delivery'] = isset($data['is_hauler_delivery']) ? $data['is_hauler_delivery'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['item_id'] === null) {
            $invalid_properties[] = "'item_id' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalid_properties[] = "'condition' can't be null";
        }
        $allowed_values = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['ean'] === null) {
            $invalid_properties[] = "'ean' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if ($this->container['inventory_id'] === null) {
            $invalid_properties[] = "'inventory_id' can't be null";
        }
        if ($this->container['supplier_item_id'] === null) {
            $invalid_properties[] = "'supplier_item_id' can't be null";
        }
        if ($this->container['minimal_order_volume'] === null) {
            $invalid_properties[] = "'minimal_order_volume' can't be null";
        }
        if ($this->container['freight_costs'] === null) {
            $invalid_properties[] = "'freight_costs' can't be null";
        }
        if ($this->container['handling_costs'] === null) {
            $invalid_properties[] = "'handling_costs' can't be null";
        }
        if ($this->container['return_shipping_cost'] === null) {
            $invalid_properties[] = "'return_shipping_cost' can't be null";
        }
        if ($this->container['delivery_min_time'] === null) {
            $invalid_properties[] = "'delivery_min_time' can't be null";
        }
        if ($this->container['delivery_max_time'] === null) {
            $invalid_properties[] = "'delivery_max_time' can't be null";
        }
        if ($this->container['is_hauler_delivery'] === null) {
            $invalid_properties[] = "'is_hauler_delivery' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['item_id'] === null) {
            return false;
        }
        if ($this->container['condition'] === null) {
            return false;
        }
        $allowed_values = $this->getConditionAllowableValues();
        if (!in_array($this->container['condition'], $allowed_values)) {
            return false;
        }
        if ($this->container['ean'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['inventory_id'] === null) {
            return false;
        }
        if ($this->container['supplier_item_id'] === null) {
            return false;
        }
        if ($this->container['minimal_order_volume'] === null) {
            return false;
        }
        if ($this->container['freight_costs'] === null) {
            return false;
        }
        if ($this->container['handling_costs'] === null) {
            return false;
        }
        if ($this->container['return_shipping_cost'] === null) {
            return false;
        }
        if ($this->container['delivery_min_time'] === null) {
            return false;
        }
        if ($this->container['delivery_max_time'] === null) {
            return false;
        }
        if ($this->container['is_hauler_delivery'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets item_id
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     * @param int $item_id Item ID
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition Unit condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowed_values = $this->getConditionAllowableValues();
        if (!in_array($condition, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string $ean EAN
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Unit Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Unit Quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets inventory_id
     * @return int
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     * @param int $inventory_id Inventory ID
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets supplier_item_id
     * @return string
     */
    public function getSupplierItemId()
    {
        return $this->container['supplier_item_id'];
    }

    /**
     * Sets supplier_item_id
     * @param string $supplier_item_id Supplier Item ID
     * @return $this
     */
    public function setSupplierItemId($supplier_item_id)
    {
        $this->container['supplier_item_id'] = $supplier_item_id;

        return $this;
    }

    /**
     * Gets minimal_order_volume
     * @return int
     */
    public function getMinimalOrderVolume()
    {
        return $this->container['minimal_order_volume'];
    }

    /**
     * Sets minimal_order_volume
     * @param int $minimal_order_volume Minimal Order Volume
     * @return $this
     */
    public function setMinimalOrderVolume($minimal_order_volume)
    {
        $this->container['minimal_order_volume'] = $minimal_order_volume;

        return $this;
    }

    /**
     * Gets freight_costs
     * @return float
     */
    public function getFreightCosts()
    {
        return $this->container['freight_costs'];
    }

    /**
     * Sets freight_costs
     * @param float $freight_costs Freight costs
     * @return $this
     */
    public function setFreightCosts($freight_costs)
    {
        $this->container['freight_costs'] = $freight_costs;

        return $this;
    }

    /**
     * Gets handling_costs
     * @return float
     */
    public function getHandlingCosts()
    {
        return $this->container['handling_costs'];
    }

    /**
     * Sets handling_costs
     * @param float $handling_costs Handling costs
     * @return $this
     */
    public function setHandlingCosts($handling_costs)
    {
        $this->container['handling_costs'] = $handling_costs;

        return $this;
    }

    /**
     * Gets return_shipping_cost
     * @return float
     */
    public function getReturnShippingCost()
    {
        return $this->container['return_shipping_cost'];
    }

    /**
     * Sets return_shipping_cost
     * @param float $return_shipping_cost Return shipping Cost
     * @return $this
     */
    public function setReturnShippingCost($return_shipping_cost)
    {
        $this->container['return_shipping_cost'] = $return_shipping_cost;

        return $this;
    }

    /**
     * Gets delivery_min_time
     * @return int
     */
    public function getDeliveryMinTime()
    {
        return $this->container['delivery_min_time'];
    }

    /**
     * Sets delivery_min_time
     * @param int $delivery_min_time Minimal Delivery Time
     * @return $this
     */
    public function setDeliveryMinTime($delivery_min_time)
    {
        $this->container['delivery_min_time'] = $delivery_min_time;

        return $this;
    }

    /**
     * Gets delivery_max_time
     * @return int
     */
    public function getDeliveryMaxTime()
    {
        return $this->container['delivery_max_time'];
    }

    /**
     * Sets delivery_max_time
     * @param int $delivery_max_time Maximum Delivery Time
     * @return $this
     */
    public function setDeliveryMaxTime($delivery_max_time)
    {
        $this->container['delivery_max_time'] = $delivery_max_time;

        return $this;
    }

    /**
     * Gets is_hauler_delivery
     * @return bool
     */
    public function getIsHaulerDelivery()
    {
        return $this->container['is_hauler_delivery'];
    }

    /**
     * Sets is_hauler_delivery
     * @param bool $is_hauler_delivery If this unit required a hauler delivery
     * @return $this
     */
    public function setIsHaulerDelivery($is_hauler_delivery)
    {
        $this->container['is_hauler_delivery'] = $is_hauler_delivery;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SMS\Suppliers\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SMS\Suppliers\ObjectSerializer::sanitizeForSerialization($this));
    }
}


