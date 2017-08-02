<?php
/**
 * GetInventoryResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API SDK
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.0.0
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
 * GetInventoryResponse Class Doc Comment
 *
 * @category    Class
 * @package     SMS\Suppliers
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetInventoryResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetInventoryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'gln' => 'string',
        'delivery_note_required' => 'bool',
        'manager' => '\SMS\Suppliers\Model\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'gln' => null,
        'delivery_note_required' => null,
        'manager' => null
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
        'id' => 'id',
        'name' => 'name',
        'gln' => 'gln',
        'delivery_note_required' => 'delivery_note_required',
        'manager' => 'manager'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'gln' => 'setGln',
        'delivery_note_required' => 'setDeliveryNoteRequired',
        'manager' => 'setManager'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'gln' => 'getGln',
        'delivery_note_required' => 'getDeliveryNoteRequired',
        'manager' => 'getManager'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['gln'] = isset($data['gln']) ? $data['gln'] : null;
        $this->container['delivery_note_required'] = isset($data['delivery_note_required']) ? $data['delivery_note_required'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['gln'] === null) {
            $invalid_properties[] = "'gln' can't be null";
        }
        if ($this->container['delivery_note_required'] === null) {
            $invalid_properties[] = "'delivery_note_required' can't be null";
        }
        if ($this->container['manager'] === null) {
            $invalid_properties[] = "'manager' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['gln'] === null) {
            return false;
        }
        if ($this->container['delivery_note_required'] === null) {
            return false;
        }
        if ($this->container['manager'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Inventory ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Inventory Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets gln
     * @return string
     */
    public function getGln()
    {
        return $this->container['gln'];
    }

    /**
     * Sets gln
     * @param string $gln Inventory GLN
     * @return $this
     */
    public function setGln($gln)
    {
        $this->container['gln'] = $gln;

        return $this;
    }

    /**
     * Gets delivery_note_required
     * @return bool
     */
    public function getDeliveryNoteRequired()
    {
        return $this->container['delivery_note_required'];
    }

    /**
     * Sets delivery_note_required
     * @param bool $delivery_note_required Tells if delivery_note field must be specified in /order-units/mark-as-sent request
     * @return $this
     */
    public function setDeliveryNoteRequired($delivery_note_required)
    {
        $this->container['delivery_note_required'] = $delivery_note_required;

        return $this;
    }

    /**
     * Gets manager
     * @return \SMS\Suppliers\Model\User
     */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
     * Sets manager
     * @param \SMS\Suppliers\Model\User $manager
     * @return $this
     */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;

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


