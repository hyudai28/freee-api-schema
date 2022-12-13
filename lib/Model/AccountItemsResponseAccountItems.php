<?php
/**
 * AccountItemsResponseAccountItems
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
 * AccountItemsResponseAccountItems Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountItemsResponseAccountItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountItemsResponse_account_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'tax_code' => 'int',
        'shortcut' => 'string',
        'shortcut_num' => 'string',
        'default_tax_code' => 'int',
        'account_category' => 'string',
        'account_category_id' => 'int',
        'categories' => 'string[]',
        'available' => 'bool',
        'walletable_id' => 'int',
        'group_name' => 'string',
        'corresponding_income_name' => 'string',
        'corresponding_income_id' => 'int',
        'corresponding_expense_name' => 'string',
        'corresponding_expense_id' => 'int'
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
        'tax_code' => null,
        'shortcut' => null,
        'shortcut_num' => null,
        'default_tax_code' => null,
        'account_category' => null,
        'account_category_id' => null,
        'categories' => null,
        'available' => null,
        'walletable_id' => null,
        'group_name' => null,
        'corresponding_income_name' => null,
        'corresponding_income_id' => null,
        'corresponding_expense_name' => null,
        'corresponding_expense_id' => null
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
        'tax_code' => 'tax_code',
        'shortcut' => 'shortcut',
        'shortcut_num' => 'shortcut_num',
        'default_tax_code' => 'default_tax_code',
        'account_category' => 'account_category',
        'account_category_id' => 'account_category_id',
        'categories' => 'categories',
        'available' => 'available',
        'walletable_id' => 'walletable_id',
        'group_name' => 'group_name',
        'corresponding_income_name' => 'corresponding_income_name',
        'corresponding_income_id' => 'corresponding_income_id',
        'corresponding_expense_name' => 'corresponding_expense_name',
        'corresponding_expense_id' => 'corresponding_expense_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'tax_code' => 'setTaxCode',
        'shortcut' => 'setShortcut',
        'shortcut_num' => 'setShortcutNum',
        'default_tax_code' => 'setDefaultTaxCode',
        'account_category' => 'setAccountCategory',
        'account_category_id' => 'setAccountCategoryId',
        'categories' => 'setCategories',
        'available' => 'setAvailable',
        'walletable_id' => 'setWalletableId',
        'group_name' => 'setGroupName',
        'corresponding_income_name' => 'setCorrespondingIncomeName',
        'corresponding_income_id' => 'setCorrespondingIncomeId',
        'corresponding_expense_name' => 'setCorrespondingExpenseName',
        'corresponding_expense_id' => 'setCorrespondingExpenseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'tax_code' => 'getTaxCode',
        'shortcut' => 'getShortcut',
        'shortcut_num' => 'getShortcutNum',
        'default_tax_code' => 'getDefaultTaxCode',
        'account_category' => 'getAccountCategory',
        'account_category_id' => 'getAccountCategoryId',
        'categories' => 'getCategories',
        'available' => 'getAvailable',
        'walletable_id' => 'getWalletableId',
        'group_name' => 'getGroupName',
        'corresponding_income_name' => 'getCorrespondingIncomeName',
        'corresponding_income_id' => 'getCorrespondingIncomeId',
        'corresponding_expense_name' => 'getCorrespondingExpenseName',
        'corresponding_expense_id' => 'getCorrespondingExpenseId'
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
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['shortcut'] = $data['shortcut'] ?? null;
        $this->container['shortcut_num'] = $data['shortcut_num'] ?? null;
        $this->container['default_tax_code'] = $data['default_tax_code'] ?? null;
        $this->container['account_category'] = $data['account_category'] ?? null;
        $this->container['account_category_id'] = $data['account_category_id'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['available'] = $data['available'] ?? null;
        $this->container['walletable_id'] = $data['walletable_id'] ?? null;
        $this->container['group_name'] = $data['group_name'] ?? null;
        $this->container['corresponding_income_name'] = $data['corresponding_income_name'] ?? null;
        $this->container['corresponding_income_id'] = $data['corresponding_income_id'] ?? null;
        $this->container['corresponding_expense_name'] = $data['corresponding_expense_name'] ?? null;
        $this->container['corresponding_expense_id'] = $data['corresponding_expense_id'] ?? null;
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

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if (($this->container['tax_code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['tax_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shortcut']) && (mb_strlen($this->container['shortcut']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['shortcut_num']) && (mb_strlen($this->container['shortcut_num']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut_num', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['default_tax_code'] === null) {
            $invalidProperties[] = "'default_tax_code' can't be null";
        }
        if (($this->container['default_tax_code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'default_tax_code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['default_tax_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'default_tax_code', must be bigger than or equal to 0.";
        }

        if ($this->container['account_category'] === null) {
            $invalidProperties[] = "'account_category' can't be null";
        }
        if ($this->container['account_category_id'] === null) {
            $invalidProperties[] = "'account_category_id' can't be null";
        }
        if (($this->container['account_category_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'account_category_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['account_category_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_category_id', must be bigger than or equal to 1.";
        }

        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['walletable_id'] === null) {
            $invalidProperties[] = "'walletable_id' can't be null";
        }
        if (($this->container['walletable_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'walletable_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['walletable_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'walletable_id', must be bigger than or equal to 1.";
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
     * @param int $id 勘定科目ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling AccountItemsResponseAccountItems., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling AccountItemsResponseAccountItems., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 勘定科目名 (30文字以内)
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return int
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param int $tax_code 税区分コード
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {

        if (($tax_code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling AccountItemsResponseAccountItems., must be smaller than or equal to 2147483647.');
        }
        if (($tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling AccountItemsResponseAccountItems., must be bigger than or equal to 0.');
        }

        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets shortcut
     *
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->container['shortcut'];
    }

    /**
     * Sets shortcut
     *
     * @param string|null $shortcut ショートカット1 (20文字以内)
     *
     * @return self
     */
    public function setShortcut($shortcut)
    {
        if (!is_null($shortcut) && (mb_strlen($shortcut) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut when calling AccountItemsResponseAccountItems., must be smaller than or equal to 20.');
        }

        $this->container['shortcut'] = $shortcut;

        return $this;
    }

    /**
     * Gets shortcut_num
     *
     * @return string|null
     */
    public function getShortcutNum()
    {
        return $this->container['shortcut_num'];
    }

    /**
     * Sets shortcut_num
     *
     * @param string|null $shortcut_num ショートカット2(勘定科目コード) (20文字以内)
     *
     * @return self
     */
    public function setShortcutNum($shortcut_num)
    {
        if (!is_null($shortcut_num) && (mb_strlen($shortcut_num) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut_num when calling AccountItemsResponseAccountItems., must be smaller than or equal to 20.');
        }

        $this->container['shortcut_num'] = $shortcut_num;

        return $this;
    }

    /**
     * Gets default_tax_code
     *
     * @return int
     */
    public function getDefaultTaxCode()
    {
        return $this->container['default_tax_code'];
    }

    /**
     * Sets default_tax_code
     *
     * @param int $default_tax_code デフォルト設定がされている税区分コード
     *
     * @return self
     */
    public function setDefaultTaxCode($default_tax_code)
    {

        if (($default_tax_code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $default_tax_code when calling AccountItemsResponseAccountItems., must be smaller than or equal to 2147483647.');
        }
        if (($default_tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $default_tax_code when calling AccountItemsResponseAccountItems., must be bigger than or equal to 0.');
        }

        $this->container['default_tax_code'] = $default_tax_code;

        return $this;
    }

    /**
     * Gets account_category
     *
     * @return string
     */
    public function getAccountCategory()
    {
        return $this->container['account_category'];
    }

    /**
     * Sets account_category
     *
     * @param string $account_category 勘定科目カテゴリー
     *
     * @return self
     */
    public function setAccountCategory($account_category)
    {
        $this->container['account_category'] = $account_category;

        return $this;
    }

    /**
     * Gets account_category_id
     *
     * @return int
     */
    public function getAccountCategoryId()
    {
        return $this->container['account_category_id'];
    }

    /**
     * Sets account_category_id
     *
     * @param int $account_category_id 勘定科目のカテゴリーID
     *
     * @return self
     */
    public function setAccountCategoryId($account_category_id)
    {

        if (($account_category_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_category_id when calling AccountItemsResponseAccountItems., must be smaller than or equal to 2147483647.');
        }
        if (($account_category_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_category_id when calling AccountItemsResponseAccountItems., must be bigger than or equal to 1.');
        }

        $this->container['account_category_id'] = $account_category_id;

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
     * @param string[] $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available 勘定科目の使用設定（true: 使用する、false: 使用しない）
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets walletable_id
     *
     * @return int
     */
    public function getWalletableId()
    {
        return $this->container['walletable_id'];
    }

    /**
     * Sets walletable_id
     *
     * @param int $walletable_id 口座ID
     *
     * @return self
     */
    public function setWalletableId($walletable_id)
    {

        if (($walletable_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $walletable_id when calling AccountItemsResponseAccountItems., must be smaller than or equal to 2147483647.');
        }
        if (($walletable_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $walletable_id when calling AccountItemsResponseAccountItems., must be bigger than or equal to 1.');
        }

        $this->container['walletable_id'] = $walletable_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name 決算書表示名（小カテゴリー）
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets corresponding_income_name
     *
     * @return string|null
     */
    public function getCorrespondingIncomeName()
    {
        return $this->container['corresponding_income_name'];
    }

    /**
     * Sets corresponding_income_name
     *
     * @param string|null $corresponding_income_name 収入取引相手勘定科目名
     *
     * @return self
     */
    public function setCorrespondingIncomeName($corresponding_income_name)
    {
        $this->container['corresponding_income_name'] = $corresponding_income_name;

        return $this;
    }

    /**
     * Gets corresponding_income_id
     *
     * @return int|null
     */
    public function getCorrespondingIncomeId()
    {
        return $this->container['corresponding_income_id'];
    }

    /**
     * Sets corresponding_income_id
     *
     * @param int|null $corresponding_income_id 収入取引相手勘定科目ID
     *
     * @return self
     */
    public function setCorrespondingIncomeId($corresponding_income_id)
    {
        $this->container['corresponding_income_id'] = $corresponding_income_id;

        return $this;
    }

    /**
     * Gets corresponding_expense_name
     *
     * @return string|null
     */
    public function getCorrespondingExpenseName()
    {
        return $this->container['corresponding_expense_name'];
    }

    /**
     * Sets corresponding_expense_name
     *
     * @param string|null $corresponding_expense_name 支出取引相手勘定科目名
     *
     * @return self
     */
    public function setCorrespondingExpenseName($corresponding_expense_name)
    {
        $this->container['corresponding_expense_name'] = $corresponding_expense_name;

        return $this;
    }

    /**
     * Gets corresponding_expense_id
     *
     * @return int|null
     */
    public function getCorrespondingExpenseId()
    {
        return $this->container['corresponding_expense_id'];
    }

    /**
     * Sets corresponding_expense_id
     *
     * @param int|null $corresponding_expense_id 支出取引相手勘定科目ID
     *
     * @return self
     */
    public function setCorrespondingExpenseId($corresponding_expense_id)
    {
        $this->container['corresponding_expense_id'] = $corresponding_expense_id;

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


