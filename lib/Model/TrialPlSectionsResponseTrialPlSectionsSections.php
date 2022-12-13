<?php
/**
 * TrialPlSectionsResponseTrialPlSectionsSections
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TrialPlSectionsResponseTrialPlSectionsSections Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrialPlSectionsResponseTrialPlSectionsSections implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialPlSectionsResponse_trial_pl_sections_sections';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'closing_balance' => 'int',
        'partners' => '\OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsPartners[]',
        'items' => '\OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsItems[]',
        'segment_1_tags' => '\OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment1Tags[]',
        'segment_2_tags' => '\OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment2Tags[]',
        'segment_3_tags' => '\OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment3Tags[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'closing_balance' => null,
        'partners' => null,
        'items' => null,
        'segment_1_tags' => null,
        'segment_2_tags' => null,
        'segment_3_tags' => null
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
        'id' => 'id',
        'name' => 'name',
        'closing_balance' => 'closing_balance',
        'partners' => 'partners',
        'items' => 'items',
        'segment_1_tags' => 'segment_1_tags',
        'segment_2_tags' => 'segment_2_tags',
        'segment_3_tags' => 'segment_3_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'closing_balance' => 'setClosingBalance',
        'partners' => 'setPartners',
        'items' => 'setItems',
        'segment_1_tags' => 'setSegment1Tags',
        'segment_2_tags' => 'setSegment2Tags',
        'segment_3_tags' => 'setSegment3Tags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'closing_balance' => 'getClosingBalance',
        'partners' => 'getPartners',
        'items' => 'getItems',
        'segment_1_tags' => 'getSegment1Tags',
        'segment_2_tags' => 'getSegment2Tags',
        'segment_3_tags' => 'getSegment3Tags'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['closing_balance'] = $data['closing_balance'] ?? null;
        $this->container['partners'] = $data['partners'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['segment_1_tags'] = $data['segment_1_tags'] ?? null;
        $this->container['segment_2_tags'] = $data['segment_2_tags'] ?? null;
        $this->container['segment_3_tags'] = $data['segment_3_tags'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 部門ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling TrialPlSectionsResponseTrialPlSectionsSections., must be smaller than or equal to 2147483647.');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling TrialPlSectionsResponseTrialPlSectionsSections., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 部門名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets closing_balance
     *
     * @return int|null
     */
    public function getClosingBalance()
    {
        return $this->container['closing_balance'];
    }

    /**
     * Sets closing_balance
     *
     * @param int|null $closing_balance 期末残高
     *
     * @return self
     */
    public function setClosingBalance($closing_balance)
    {
        $this->container['closing_balance'] = $closing_balance;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsPartners[]|null
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsPartners[]|null $partners breakdown_display_type:partner, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return self
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsItems[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsItems[]|null $items breakdown_display_type:item, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets segment_1_tags
     *
     * @return \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment1Tags[]|null
     */
    public function getSegment1Tags()
    {
        return $this->container['segment_1_tags'];
    }

    /**
     * Sets segment_1_tags
     *
     * @param \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment1Tags[]|null $segment_1_tags breakdown_display_type:segment_1_tag, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return self
     */
    public function setSegment1Tags($segment_1_tags)
    {
        $this->container['segment_1_tags'] = $segment_1_tags;

        return $this;
    }

    /**
     * Gets segment_2_tags
     *
     * @return \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment2Tags[]|null
     */
    public function getSegment2Tags()
    {
        return $this->container['segment_2_tags'];
    }

    /**
     * Sets segment_2_tags
     *
     * @param \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment2Tags[]|null $segment_2_tags breakdown_display_type:segment_2_tag, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return self
     */
    public function setSegment2Tags($segment_2_tags)
    {
        $this->container['segment_2_tags'] = $segment_2_tags;

        return $this;
    }

    /**
     * Gets segment_3_tags
     *
     * @return \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment3Tags[]|null
     */
    public function getSegment3Tags()
    {
        return $this->container['segment_3_tags'];
    }

    /**
     * Sets segment_3_tags
     *
     * @param \OpenAPI\Client\Model\TrialPlSectionsResponseTrialPlSectionsSegment3Tags[]|null $segment_3_tags breakdown_display_type:segment_3_tag, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return self
     */
    public function setSegment3Tags($segment_3_tags)
    {
        $this->container['segment_3_tags'] = $segment_3_tags;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


