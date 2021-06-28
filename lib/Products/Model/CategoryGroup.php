<?php
/**
 * CategoryGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * OpenAPI spec version: V2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Otto\Client\Products\Model;

use \ArrayAccess;
use \Otto\Client\ObjectSerializer;

/**
 * CategoryGroup Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoryGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_group' => 'string',
'categories' => 'string[]',
'variation_themes' => 'string[]',
'title' => 'string',
'attributes' => '\Otto\Client\Products\Model\AttributeDefinition[]',
'last_modified' => 'int',
'additional_requirements' => '\Otto\Client\Products\Model\AdditionalRequirement[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_group' => null,
'categories' => null,
'variation_themes' => null,
'title' => null,
'attributes' => null,
'last_modified' => 'int64',
'additional_requirements' => null    ];

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
        'category_group' => 'categoryGroup',
'categories' => 'categories',
'variation_themes' => 'variationThemes',
'title' => 'title',
'attributes' => 'attributes',
'last_modified' => 'lastModified',
'additional_requirements' => 'additionalRequirements'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_group' => 'setCategoryGroup',
'categories' => 'setCategories',
'variation_themes' => 'setVariationThemes',
'title' => 'setTitle',
'attributes' => 'setAttributes',
'last_modified' => 'setLastModified',
'additional_requirements' => 'setAdditionalRequirements'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_group' => 'getCategoryGroup',
'categories' => 'getCategories',
'variation_themes' => 'getVariationThemes',
'title' => 'getTitle',
'attributes' => 'getAttributes',
'last_modified' => 'getLastModified',
'additional_requirements' => 'getAdditionalRequirements'    ];

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
        $this->container['category_group'] = isset($data['category_group']) ? $data['category_group'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['variation_themes'] = isset($data['variation_themes']) ? $data['variation_themes'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['additional_requirements'] = isset($data['additional_requirements']) ? $data['additional_requirements'] : null;
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
     * Gets category_group
     *
     * @return string
     */
    public function getCategoryGroup()
    {
        return $this->container['category_group'];
    }

    /**
     * Sets category_group
     *
     * @param string $category_group a category group defines a list of categories and the market place attributes for these categories.
     *
     * @return $this
     */
    public function setCategoryGroup($category_group)
    {
        $this->container['category_group'] = $category_group;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories the list of the categories for this category group.
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets variation_themes
     *
     * @return string[]
     */
    public function getVariationThemes()
    {
        return $this->container['variation_themes'];
    }

    /**
     * Sets variation_themes
     *
     * @param string[] $variation_themes overview of all attributes that can be used to create variantions.
     *
     * @return $this
     */
    public function setVariationThemes($variation_themes)
    {
        $this->container['variation_themes'] = $variation_themes;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title shows how our product title is built
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Otto\Client\Products\Model\AttributeDefinition[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Otto\Client\Products\Model\AttributeDefinition[] $attributes list of the market place attributes for the categories of this group.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param int $last_modified last modification date of the category.
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets additional_requirements
     *
     * @return \Otto\Client\Products\Model\AdditionalRequirement[]
     */
    public function getAdditionalRequirements()
    {
        return $this->container['additional_requirements'];
    }

    /**
     * Sets additional_requirements
     *
     * @param \Otto\Client\Products\Model\AdditionalRequirement[] $additional_requirements a list of general requirements for certain product attributes that apply to all categories in the category group
     *
     * @return $this
     */
    public function setAdditionalRequirements($additional_requirements)
    {
        $this->container['additional_requirements'] = $additional_requirements;

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
