<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="JoinItem.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
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

use \ArrayAccess;
use \GroupDocs\Merger\ObjectSerializer;

/*
 * JoinItem
 *
 * @description Describes document for join operation.
 */
class JoinItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "JoinItem";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileInfo' => '\GroupDocs\Merger\Model\FileInfo',
        'pages' => 'int[]',
        'startPageNumber' => 'int',
        'endPageNumber' => 'int',
        'rangeMode' => 'string',
        'wordJoinMode' => 'string',
        'wordJoinCompliance' => 'string',
        'imageJoinMode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileInfo' => null,
        'pages' => 'int32',
        'startPageNumber' => 'int32',
        'endPageNumber' => 'int32',
        'rangeMode' => null,
        'wordJoinMode' => null,
        'wordJoinCompliance' => null,
        'imageJoinMode' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fileInfo' => 'FileInfo',
        'pages' => 'Pages',
        'startPageNumber' => 'StartPageNumber',
        'endPageNumber' => 'EndPageNumber',
        'rangeMode' => 'RangeMode',
        'wordJoinMode' => 'WordJoinMode',
        'wordJoinCompliance' => 'WordJoinCompliance',
        'imageJoinMode' => 'ImageJoinMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileInfo' => 'setFileInfo',
        'pages' => 'setPages',
        'startPageNumber' => 'setStartPageNumber',
        'endPageNumber' => 'setEndPageNumber',
        'rangeMode' => 'setRangeMode',
        'wordJoinMode' => 'setWordJoinMode',
        'wordJoinCompliance' => 'setWordJoinCompliance',
        'imageJoinMode' => 'setImageJoinMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileInfo' => 'getFileInfo',
        'pages' => 'getPages',
        'startPageNumber' => 'getStartPageNumber',
        'endPageNumber' => 'getEndPageNumber',
        'rangeMode' => 'getRangeMode',
        'wordJoinMode' => 'getWordJoinMode',
        'wordJoinCompliance' => 'getWordJoinCompliance',
        'imageJoinMode' => 'getImageJoinMode'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
    const WORD_JOIN_MODE__DEFAULT = 'Default';
    const WORD_JOIN_MODE_CONTINUOUS = 'Continuous';
    const WORD_JOIN_COMPLIANCE_ECMA376_2006 = 'Ecma376_2006';
    const WORD_JOIN_COMPLIANCE_ISO29500_2008_TRANSITIONAL = 'Iso29500_2008_Transitional';
    const WORD_JOIN_COMPLIANCE_ISO29500_2008_STRICT = 'Iso29500_2008_Strict';
    const WORD_JOIN_COMPLIANCE_AUTO = 'Auto';
    const IMAGE_JOIN_MODE_HORIZONTAL = 'Horizontal';
    const IMAGE_JOIN_MODE_VERTICAL = 'Vertical';
    

    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWordJoinModeAllowableValues()
    {
        return [
            self::WORD_JOIN_MODE__DEFAULT,
            self::WORD_JOIN_MODE_CONTINUOUS,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWordJoinComplianceAllowableValues()
    {
        return [
            self::WORD_JOIN_COMPLIANCE_ECMA376_2006,
            self::WORD_JOIN_COMPLIANCE_ISO29500_2008_TRANSITIONAL,
            self::WORD_JOIN_COMPLIANCE_ISO29500_2008_STRICT,
            self::WORD_JOIN_COMPLIANCE_AUTO,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageJoinModeAllowableValues()
    {
        return [
            self::IMAGE_JOIN_MODE_HORIZONTAL,
            self::IMAGE_JOIN_MODE_VERTICAL,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['startPageNumber'] = isset($data['startPageNumber']) ? $data['startPageNumber'] : null;
        $this->container['endPageNumber'] = isset($data['endPageNumber']) ? $data['endPageNumber'] : null;
        $this->container['rangeMode'] = isset($data['rangeMode']) ? $data['rangeMode'] : null;
        $this->container['wordJoinMode'] = isset($data['wordJoinMode']) ? $data['wordJoinMode'] : null;
        $this->container['wordJoinCompliance'] = isset($data['wordJoinCompliance']) ? $data['wordJoinCompliance'] : null;
        $this->container['imageJoinMode'] = isset($data['imageJoinMode']) ? $data['imageJoinMode'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if ($this->container['wordJoinMode'] === null) {
            $invalidProperties[] = "'wordJoinMode' can't be null";
        }
        $allowedValues = $this->getWordJoinModeAllowableValues();
        if (!in_array($this->container['wordJoinMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wordJoinMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['wordJoinCompliance'] === null) {
            $invalidProperties[] = "'wordJoinCompliance' can't be null";
        }
        $allowedValues = $this->getWordJoinComplianceAllowableValues();
        if (!in_array($this->container['wordJoinCompliance'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wordJoinCompliance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['imageJoinMode'] === null) {
            $invalidProperties[] = "'imageJoinMode' can't be null";
        }
        $allowedValues = $this->getImageJoinModeAllowableValues();
        if (!in_array($this->container['imageJoinMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'imageJoinMode', must be one of '%s'",
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
        if ($this->container['wordJoinMode'] === null) {
            return false;
        }
        $allowedValues = $this->getWordJoinModeAllowableValues();
        if (!in_array($this->container['wordJoinMode'], $allowedValues)) {
            return false;
        }
        if ($this->container['wordJoinCompliance'] === null) {
            return false;
        }
        $allowedValues = $this->getWordJoinComplianceAllowableValues();
        if (!in_array($this->container['wordJoinCompliance'], $allowedValues)) {
            return false;
        }
        if ($this->container['imageJoinMode'] === null) {
            return false;
        }
        $allowedValues = $this->getImageJoinModeAllowableValues();
        if (!in_array($this->container['imageJoinMode'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileInfo
     *
     * @return \GroupDocs\Merger\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /*
     * Sets fileInfo
     *
     * @param \GroupDocs\Merger\Model\FileInfo $fileInfo File info.
     *
     * @return $this
     */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;

        return $this;
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
     * @param int[] $pages List of page numbers to use in a Join operation. NOTE: page numbering starts from 1.
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
     * Gets wordJoinMode
     *
     * @return string
     */
    public function getWordJoinMode()
    {
        return $this->container['wordJoinMode'];
    }

    /*
     * Sets wordJoinMode
     *
     * @param string $wordJoinMode Allows to join word documents without empty space between documents.
     *
     * @return $this
     */
    public function setWordJoinMode($wordJoinMode)
    {
        $allowedValues = $this->getWordJoinModeAllowableValues();
        if ((!is_numeric($wordJoinMode) && !in_array($wordJoinMode, $allowedValues)) || (is_numeric($wordJoinMode) && !in_array($allowedValues[$wordJoinMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'wordJoinMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['wordJoinMode'] = $wordJoinMode;

        return $this;
    }

    /*
     * Gets wordJoinCompliance
     *
     * @return string
     */
    public function getWordJoinCompliance()
    {
        return $this->container['wordJoinCompliance'];
    }

    /*
     * Sets wordJoinCompliance
     *
     * @param string $wordJoinCompliance Compliance mode for the Word Ooxml format
     *
     * @return $this
     */
    public function setWordJoinCompliance($wordJoinCompliance)
    {
        $allowedValues = $this->getWordJoinComplianceAllowableValues();
        if ((!is_numeric($wordJoinCompliance) && !in_array($wordJoinCompliance, $allowedValues)) || (is_numeric($wordJoinCompliance) && !in_array($allowedValues[$wordJoinCompliance], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'wordJoinCompliance', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['wordJoinCompliance'] = $wordJoinCompliance;

        return $this;
    }

    /*
     * Gets imageJoinMode
     *
     * @return string
     */
    public function getImageJoinMode()
    {
        return $this->container['imageJoinMode'];
    }

    /*
     * Sets imageJoinMode
     *
     * @param string $imageJoinMode Possible modes for the image joining.
     *
     * @return $this
     */
    public function setImageJoinMode($imageJoinMode)
    {
        $allowedValues = $this->getImageJoinModeAllowableValues();
        if ((!is_numeric($imageJoinMode) && !in_array($imageJoinMode, $allowedValues)) || (is_numeric($imageJoinMode) && !in_array($allowedValues[$imageJoinMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'imageJoinMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['imageJoinMode'] = $imageJoinMode;

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


