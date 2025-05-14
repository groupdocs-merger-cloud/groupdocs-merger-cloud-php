<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="MixPagesOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * MixPagesOptions
 *
 * @description Defines options for documents JoinPages method
 */
class MixPagesOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MixPagesOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'files' => '\GroupDocs\Merger\Model\FileInfo[]',
        'filesPages' => '\GroupDocs\Merger\Model\MixPagesItem[]',
        'outputPath' => 'string',
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
        'files' => null,
        'filesPages' => null,
        'outputPath' => null,
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
        'files' => 'Files',
        'filesPages' => 'FilesPages',
        'outputPath' => 'OutputPath',
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
        'files' => 'setFiles',
        'filesPages' => 'setFilesPages',
        'outputPath' => 'setOutputPath',
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
        'files' => 'getFiles',
        'filesPages' => 'getFilesPages',
        'outputPath' => 'getOutputPath',
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
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['filesPages'] = isset($data['filesPages']) ? $data['filesPages'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
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
     * Gets files
     *
     * @return \GroupDocs\Merger\Model\FileInfo[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /*
     * Sets files
     *
     * @param \GroupDocs\Merger\Model\FileInfo[] $files Source documents for JoinPages operation
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /*
     * Gets filesPages
     *
     * @return \GroupDocs\Merger\Model\MixPagesItem[]
     */
    public function getFilesPages()
    {
        return $this->container['filesPages'];
    }

    /*
     * Sets filesPages
     *
     * @param \GroupDocs\Merger\Model\MixPagesItem[] $filesPages Page numbers for document indicies in Files collection.
     *
     * @return $this
     */
    public function setFilesPages($filesPages)
    {
        $this->container['filesPages'] = $filesPages;

        return $this;
    }

    /*
     * Gets outputPath
     *
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /*
     * Sets outputPath
     *
     * @param string $outputPath The output path
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

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


