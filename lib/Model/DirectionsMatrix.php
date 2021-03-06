<?php
/**
 * DirectionsMatrix
 *
 * PHP version 5
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LocationIQ
 *
 * LocationIQ provides flexible enterprise-grade location based solutions. We work with developers, startups and enterprises worldwide serving billions of requests everyday. This page provides an overview of the technical aspects of our API and will help you get started.
 *
 * The version of the OpenAPI document: 1.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LocationIq\Model;

use \ArrayAccess;
use \LocationIq\ObjectSerializer;

/**
 * DirectionsMatrix Class Doc Comment
 *
 * @category Class
 * @package  LocationIq
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DirectionsMatrix implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'directions-matrix';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'distances' => 'float[]',
        'fallback_speed_cells' => 'float[]',
        'sources' => '\LocationIq\Model\DirectionsMatrixSources[]',
        'destinations' => '\LocationIq\Model\DirectionsMatrixSources[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'distances' => null,
        'fallback_speed_cells' => null,
        'sources' => null,
        'destinations' => null
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
        'code' => 'code',
        'distances' => 'distances',
        'fallback_speed_cells' => 'fallback_speed_cells',
        'sources' => 'sources',
        'destinations' => 'destinations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'distances' => 'setDistances',
        'fallback_speed_cells' => 'setFallbackSpeedCells',
        'sources' => 'setSources',
        'destinations' => 'setDestinations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'distances' => 'getDistances',
        'fallback_speed_cells' => 'getFallbackSpeedCells',
        'sources' => 'getSources',
        'destinations' => 'getDestinations'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['distances'] = isset($data['distances']) ? $data['distances'] : null;
        $this->container['fallback_speed_cells'] = isset($data['fallback_speed_cells']) ? $data['fallback_speed_cells'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['destinations'] = isset($data['destinations']) ? $data['destinations'] : null;
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets distances
     *
     * @return float[]|null
     */
    public function getDistances()
    {
        return $this->container['distances'];
    }

    /**
     * Sets distances
     *
     * @param float[]|null $distances distances
     *
     * @return $this
     */
    public function setDistances($distances)
    {
        $this->container['distances'] = $distances;

        return $this;
    }

    /**
     * Gets fallback_speed_cells
     *
     * @return float[]|null
     */
    public function getFallbackSpeedCells()
    {
        return $this->container['fallback_speed_cells'];
    }

    /**
     * Sets fallback_speed_cells
     *
     * @param float[]|null $fallback_speed_cells fallback_speed_cells
     *
     * @return $this
     */
    public function setFallbackSpeedCells($fallback_speed_cells)
    {
        $this->container['fallback_speed_cells'] = $fallback_speed_cells;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return \LocationIq\Model\DirectionsMatrixSources[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \LocationIq\Model\DirectionsMatrixSources[]|null $sources sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \LocationIq\Model\DirectionsMatrixSources[]|null
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \LocationIq\Model\DirectionsMatrixSources[]|null $destinations destinations
     *
     * @return $this
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

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


