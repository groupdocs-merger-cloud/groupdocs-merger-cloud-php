<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PageOptions.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Merger\Model;
use \GroupDocs\Merger\ObjectSerializer;

/*
 * PageOptions
 *
 * @description Describes options for specifying page or pages range
 */
class PageOptions extends Options 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pages' => 'int[]',
        'startPageNumber' => 'int',
        'endPageNumber' => 'int',
        'rangeMode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pages' => 'int32',
        'startPageNumber' => 'int32',
        'endPageNumber' => 'int32',
        'rangeMode' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pages' => 'Pages',
        'startPageNumber' => 'StartPageNumber',
        'endPageNumber' => 'EndPageNumber',
        'rangeMode' => 'RangeMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pages' => 'setPages',
        'startPageNumber' => 'setStartPageNumber',
        'endPageNumber' => 'setEndPageNumber',
        'rangeMode' => 'setRangeMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pages' => 'getPages',
        'startPageNumber' => 'getStartPageNumber',
        'endPageNumber' => 'getEndPageNumber',
        'rangeMode' => 'getRangeMode'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const RANGE_MODE_ALL_PAGES = 'AllPages';
    const RANGE_MODE_ODD_PAGES = 'OddPages';
    const RANGE_MODE_EVEN_PAGES = 'EvenPages';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRangeModeAllowableValues()
    {
        return [
            self::RANGE_MODE_ALL_PAGES,
            self::RANGE_MODE_ODD_PAGES,
            self::RANGE_MODE_EVEN_PAGES,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['startPageNumber'] = isset($data['startPageNumber']) ? $data['startPageNumber'] : null;
        $this->container['endPageNumber'] = isset($data['endPageNumber']) ? $data['endPageNumber'] : null;
        $this->container['rangeMode'] = isset($data['rangeMode']) ? $data['rangeMode'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['startPageNumber'] === null) {
            $invalidProperties[] = "'startPageNumber' can't be null";
        }
        if ($this->container['endPageNumber'] === null) {
            $invalidProperties[] = "'endPageNumber' can't be null";
        }
        if ($this->container['rangeMode'] === null) {
            $invalidProperties[] = "'rangeMode' can't be null";
        }
        $allowedValues = $this->getRangeModeAllowableValues();
        if (!in_array($this->container['rangeMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rangeMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['startPageNumber'] === null) {
            return false;
        }
        if ($this->container['endPageNumber'] === null) {
            return false;
        }
        if ($this->container['rangeMode'] === null) {
            return false;
        }
        $allowedValues = $this->getRangeModeAllowableValues();
        if (!in_array($this->container['rangeMode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets pages
     *
     * @return int[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /*
     * Sets pages
     *
     * @param int[] $pages List of page numbers to use in a specific API method. NOTE: page numbering starts from 1.
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /*
     * Gets startPageNumber
     *
     * @return int
     */
    public function getStartPageNumber()
    {
        return $this->container['startPageNumber'];
    }

    /*
     * Sets startPageNumber
     *
     * @param int $startPageNumber Start page number. Ignored if Pages collection is not empty.
     *
     * @return $this
     */
    public function setStartPageNumber($startPageNumber)
    {
        $this->container['startPageNumber'] = $startPageNumber;

        return $this;
    }

    /*
     * Gets endPageNumber
     *
     * @return int
     */
    public function getEndPageNumber()
    {
        return $this->container['endPageNumber'];
    }

    /*
     * Sets endPageNumber
     *
     * @param int $endPageNumber End page number. Ignored if Pages collection is not empty.
     *
     * @return $this
     */
    public function setEndPageNumber($endPageNumber)
    {
        $this->container['endPageNumber'] = $endPageNumber;

        return $this;
    }

    /*
     * Gets rangeMode
     *
     * @return string
     */
    public function getRangeMode()
    {
        return $this->container['rangeMode'];
    }

    /*
     * Sets rangeMode
     *
     * @param string $rangeMode Range mode. Ignored if Pages collection is not empty. Default value is AllPages.
     *
     * @return $this
     */
    public function setRangeMode($rangeMode)
    {
        $allowedValues = $this->getRangeModeAllowableValues();
        if ((!is_numeric($rangeMode) && !in_array($rangeMode, $allowedValues)) || (is_numeric($rangeMode) && !in_array($allowedValues[$rangeMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'rangeMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['rangeMode'] = $rangeMode;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


