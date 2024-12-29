<?php
/**
 * UniLend
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * UniLend Class Doc Comment
 *
 * @category Class
 * @description Loan record
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class UniLend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UniLend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => 'string',
        'current_amount' => 'string',
        'amount' => 'string',
        'lent_amount' => 'string',
        'frozen_amount' => 'string',
        'min_rate' => 'string',
        'interest_status' => 'string',
        'reinvest_left_amount' => 'string',
        'create_time' => 'int',
        'update_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'current_amount' => null,
        'amount' => null,
        'lent_amount' => null,
        'frozen_amount' => null,
        'min_rate' => null,
        'interest_status' => null,
        'reinvest_left_amount' => null,
        'create_time' => 'int64',
        'update_time' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'currency' => 'currency',
        'current_amount' => 'current_amount',
        'amount' => 'amount',
        'lent_amount' => 'lent_amount',
        'frozen_amount' => 'frozen_amount',
        'min_rate' => 'min_rate',
        'interest_status' => 'interest_status',
        'reinvest_left_amount' => 'reinvest_left_amount',
        'create_time' => 'create_time',
        'update_time' => 'update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'current_amount' => 'setCurrentAmount',
        'amount' => 'setAmount',
        'lent_amount' => 'setLentAmount',
        'frozen_amount' => 'setFrozenAmount',
        'min_rate' => 'setMinRate',
        'interest_status' => 'setInterestStatus',
        'reinvest_left_amount' => 'setReinvestLeftAmount',
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'current_amount' => 'getCurrentAmount',
        'amount' => 'getAmount',
        'lent_amount' => 'getLentAmount',
        'frozen_amount' => 'getFrozenAmount',
        'min_rate' => 'getMinRate',
        'interest_status' => 'getInterestStatus',
        'reinvest_left_amount' => 'getReinvestLeftAmount',
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['current_amount'] = isset($data['current_amount']) ? $data['current_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['lent_amount'] = isset($data['lent_amount']) ? $data['lent_amount'] : null;
        $this->container['frozen_amount'] = isset($data['frozen_amount']) ? $data['frozen_amount'] : null;
        $this->container['min_rate'] = isset($data['min_rate']) ? $data['min_rate'] : null;
        $this->container['interest_status'] = isset($data['interest_status']) ? $data['interest_status'] : null;
        $this->container['reinvest_left_amount'] = isset($data['reinvest_left_amount']) ? $data['reinvest_left_amount'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets current_amount
     *
     * @return string|null
     */
    public function getCurrentAmount()
    {
        return $this->container['current_amount'];
    }

    /**
     * Sets current_amount
     *
     * @param string|null $current_amount Current amount
     *
     * @return $this
     */
    public function setCurrentAmount($current_amount)
    {
        $this->container['current_amount'] = $current_amount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount Total amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets lent_amount
     *
     * @return string|null
     */
    public function getLentAmount()
    {
        return $this->container['lent_amount'];
    }

    /**
     * Sets lent_amount
     *
     * @param string|null $lent_amount Lent amount
     *
     * @return $this
     */
    public function setLentAmount($lent_amount)
    {
        $this->container['lent_amount'] = $lent_amount;

        return $this;
    }

    /**
     * Gets frozen_amount
     *
     * @return string|null
     */
    public function getFrozenAmount()
    {
        return $this->container['frozen_amount'];
    }

    /**
     * Sets frozen_amount
     *
     * @param string|null $frozen_amount Frozen amount
     *
     * @return $this
     */
    public function setFrozenAmount($frozen_amount)
    {
        $this->container['frozen_amount'] = $frozen_amount;

        return $this;
    }

    /**
     * Gets min_rate
     *
     * @return string|null
     */
    public function getMinRate()
    {
        return $this->container['min_rate'];
    }

    /**
     * Sets min_rate
     *
     * @param string|null $min_rate Minimum interest rate
     *
     * @return $this
     */
    public function setMinRate($min_rate)
    {
        $this->container['min_rate'] = $min_rate;

        return $this;
    }

    /**
     * Gets interest_status
     *
     * @return string|null
     */
    public function getInterestStatus()
    {
        return $this->container['interest_status'];
    }

    /**
     * Sets interest_status
     *
     * @param string|null $interest_status Interest status: interest_dividend - regular dividend, interest_reinvest - interest reinvestment
     *
     * @return $this
     */
    public function setInterestStatus($interest_status)
    {
        $this->container['interest_status'] = $interest_status;

        return $this;
    }

    /**
     * Gets reinvest_left_amount
     *
     * @return string|null
     */
    public function getReinvestLeftAmount()
    {
        return $this->container['reinvest_left_amount'];
    }

    /**
     * Sets reinvest_left_amount
     *
     * @param string|null $reinvest_left_amount Amount not reinvested
     *
     * @return $this
     */
    public function setReinvestLeftAmount($reinvest_left_amount)
    {
        $this->container['reinvest_left_amount'] = $reinvest_left_amount;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int|null $create_time Created time of the lending order
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return int|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param int|null $update_time Upated time of the lending order
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

