<?php
/**
 * File
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.87-7
 * Contact: XXXXXXXXX@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\StorageApiSdk\Model;

use \ArrayAccess;

/**
 * File Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Softonic\StorageApiSdk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class File implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_files' => 'string',
        'sha256_hash' => 'string',
        'filename' => 'string',
        'size' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id_files' => 'id_files',
        'sha256_hash' => 'sha256_hash',
        'filename' => 'filename',
        'size' => 'size'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id_files' => 'setIdFiles',
        'sha256_hash' => 'setSha256Hash',
        'filename' => 'setFilename',
        'size' => 'setSize'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id_files' => 'getIdFiles',
        'sha256_hash' => 'getSha256Hash',
        'filename' => 'getFilename',
        'size' => 'getSize'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_files'] = isset($data['id_files']) ? $data['id_files'] : null;
        $this->container['sha256_hash'] = isset($data['sha256_hash']) ? $data['sha256_hash'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id_files'] === null) {
            $invalid_properties[] = "'id_files' can't be null";
        }
        if ((strlen($this->container['id_files']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_files', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_files']) < 40)) {
            $invalid_properties[] = "invalid value for 'id_files', the character length must be bigger than or equal to 40.";
        }

        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) > 64)) {
            $invalid_properties[] = "invalid value for 'sha256_hash', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['sha256_hash']) && (strlen($this->container['sha256_hash']) < 64)) {
            $invalid_properties[] = "invalid value for 'sha256_hash', the character length must be bigger than or equal to 64.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['id_files'] === null) {
            return false;
        }
        if (strlen($this->container['id_files']) > 40) {
            return false;
        }
        if (strlen($this->container['id_files']) < 40) {
            return false;
        }
        if (strlen($this->container['sha256_hash']) > 64) {
            return false;
        }
        if (strlen($this->container['sha256_hash']) < 64) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_files
     * @return string
     */
    public function getIdFiles()
    {
        return $this->container['id_files'];
    }

    /**
     * Sets id_files
     * @param string $id_files SHA-1 hash of the file
     * @return $this
     */
    public function setIdFiles($id_files)
    {
        if (strlen($id_files) > 40) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be smaller than or equal to 40.');
        }
        if (strlen($id_files) < 40) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be bigger than or equal to 40.');
        }
        $this->container['id_files'] = $id_files;

        return $this;
    }

    /**
     * Gets sha256_hash
     * @return string
     */
    public function getSha256Hash()
    {
        return $this->container['sha256_hash'];
    }

    /**
     * Sets sha256_hash
     * @param string $sha256_hash SHA-256 hash of the file
     * @return $this
     */
    public function setSha256Hash($sha256_hash)
    {
        if (strlen($sha256_hash) > 64) {
            throw new \InvalidArgumentException('invalid length for $sha256_hash when calling File., must be smaller than or equal to 64.');
        }
        if (strlen($sha256_hash) < 64) {
            throw new \InvalidArgumentException('invalid length for $sha256_hash when calling File., must be bigger than or equal to 64.');
        }
        $this->container['sha256_hash'] = $sha256_hash;

        return $this;
    }

    /**
     * Gets filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     * @param string $filename Name of the file
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size Size of the file
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
            return json_encode(\Softonic\StorageApiSdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Softonic\StorageApiSdk\ObjectSerializer::sanitizeForSerialization($this));
    }
}


