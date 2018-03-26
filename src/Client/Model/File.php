<?php
/**
 * File
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.92-37
 * Contact: XXXXXXXXX@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\StorageApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\StorageApiSdk\ObjectSerializer;

/**
 * File Class Doc Comment
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class File implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_files' => 'string',
        'sha256_hash' => 'string',
        'filename' => 'string',
        'size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_files' => null,
        'sha256_hash' => null,
        'filename' => null,
        'size' => null
    ];

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
        'id_files' => 'id_files',
        'sha256_hash' => 'sha256_hash',
        'filename' => 'filename',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_files' => 'setIdFiles',
        'sha256_hash' => 'setSha256Hash',
        'filename' => 'setFilename',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_files' => 'getIdFiles',
        'sha256_hash' => 'getSha256Hash',
        'filename' => 'getFilename',
        'size' => 'getSize'
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
        $this->container['id_files'] = isset($data['id_files']) ? $data['id_files'] : null;
        $this->container['sha256_hash'] = isset($data['sha256_hash']) ? $data['sha256_hash'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_files'] === null) {
            $invalidProperties[] = "'id_files' can't be null";
        }
        if ((strlen($this->container['id_files']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_files', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_files']) < 40)) {
            $invalidProperties[] = "invalid value for 'id_files', the character length must be bigger than or equal to 40.";
        }

        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) > 64)) {
            $invalidProperties[] = "invalid value for 'sha256_hash', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) < 64)) {
            $invalidProperties[] = "invalid value for 'sha256_hash', the character length must be bigger than or equal to 64.";
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

        if ($this->container['id_files'] === null) {
            return false;
        }
        if ((strlen($this->container['id_files']) > 40)) {
            return false;
        }
        if ((strlen($this->container['id_files']) < 40)) {
            return false;
        }
        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) > 64)) {
            return false;
        }
        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) < 64)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_files
     *
     * @return string
     */
    public function getIdFiles()
    {
        return $this->container['id_files'];
    }

    /**
     * Sets id_files
     *
     * @param string $id_files SHA-1 hash of the file
     *
     * @return $this
     */
    public function setIdFiles($id_files)
    {
        if ((strlen($id_files) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be smaller than or equal to 40.');
        }
        if ((strlen($id_files) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be bigger than or equal to 40.');
        }

        $this->container['id_files'] = $id_files;

        return $this;
    }

    /**
     * Gets sha256_hash
     *
     * @return string
     */
    public function getSha256Hash()
    {
        return $this->container['sha256_hash'];
    }

    /**
     * Sets sha256_hash
     *
     * @param string $sha256_hash SHA-256 hash of the file
     *
     * @return $this
     */
    public function setSha256Hash($sha256_hash)
    {
        if (!is_null($sha256_hash) && (strlen($sha256_hash) > 64)) {
            throw new \InvalidArgumentException('invalid length for $sha256_hash when calling File., must be smaller than or equal to 64.');
        }
        if (!is_null($sha256_hash) && (strlen($sha256_hash) < 64)) {
            throw new \InvalidArgumentException('invalid length for $sha256_hash when calling File., must be bigger than or equal to 64.');
        }

        $this->container['sha256_hash'] = $sha256_hash;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename Name of the file
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Size of the file
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }
}

