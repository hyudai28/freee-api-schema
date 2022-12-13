<?php
/**
 * ApprovalFlowRouteResponseApprovalFlowRoute
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
 * ApprovalFlowRouteResponseApprovalFlowRoute Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApprovalFlowRouteResponseApprovalFlowRoute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'approvalFlowRouteResponse_approval_flow_route';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'user_id' => 'int',
        'definition_system' => 'bool',
        'first_step_id' => 'int',
        'usages' => 'string[]',
        'request_form_ids' => 'int[]',
        'steps' => '\OpenAPI\Client\Model\ApprovalFlowRouteResponseApprovalFlowRouteSteps[]'
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
        'description' => null,
        'user_id' => null,
        'definition_system' => null,
        'first_step_id' => null,
        'usages' => null,
        'request_form_ids' => null,
        'steps' => null
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
        'description' => 'description',
        'user_id' => 'user_id',
        'definition_system' => 'definition_system',
        'first_step_id' => 'first_step_id',
        'usages' => 'usages',
        'request_form_ids' => 'request_form_ids',
        'steps' => 'steps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'user_id' => 'setUserId',
        'definition_system' => 'setDefinitionSystem',
        'first_step_id' => 'setFirstStepId',
        'usages' => 'setUsages',
        'request_form_ids' => 'setRequestFormIds',
        'steps' => 'setSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'user_id' => 'getUserId',
        'definition_system' => 'getDefinitionSystem',
        'first_step_id' => 'getFirstStepId',
        'usages' => 'getUsages',
        'request_form_ids' => 'getRequestFormIds',
        'steps' => 'getSteps'
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

    const USAGES_TXN_APPROVAL = 'TxnApproval';
    const USAGES_EXPENSE_APPLICATION = 'ExpenseApplication';
    const USAGES_PAYMENT_REQUEST = 'PaymentRequest';
    const USAGES_APPROVAL_REQUEST = 'ApprovalRequest';
    const USAGES_DOC_APPROVAL = 'DocApproval';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsagesAllowableValues()
    {
        return [
            self::USAGES_TXN_APPROVAL,
            self::USAGES_EXPENSE_APPLICATION,
            self::USAGES_PAYMENT_REQUEST,
            self::USAGES_APPROVAL_REQUEST,
            self::USAGES_DOC_APPROVAL,
        ];
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['definition_system'] = $data['definition_system'] ?? null;
        $this->container['first_step_id'] = $data['first_step_id'] ?? null;
        $this->container['usages'] = $data['usages'] ?? null;
        $this->container['request_form_ids'] = $data['request_form_ids'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
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

        if (!is_null($this->container['user_id']) && ($this->container['user_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'user_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['user_id']) && ($this->container['user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['first_step_id']) && ($this->container['first_step_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'first_step_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['first_step_id']) && ($this->container['first_step_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'first_step_id', must be bigger than or equal to 1.";
        }

        if ($this->container['request_form_ids'] === null) {
            $invalidProperties[] = "'request_form_ids' can't be null";
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
     * @param int $id 申請経路ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be bigger than or equal to 1.');
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
     * @param string|null $name 申請経路名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 申請経路の説明
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id 更新したユーザーのユーザーID
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (!is_null($user_id) && ($user_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($user_id) && ($user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be bigger than or equal to 1.');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets definition_system
     *
     * @return bool|null
     */
    public function getDefinitionSystem()
    {
        return $this->container['definition_system'];
    }

    /**
     * Sets definition_system
     *
     * @param bool|null $definition_system システム作成の申請経路かどうか
     *
     * @return self
     */
    public function setDefinitionSystem($definition_system)
    {
        $this->container['definition_system'] = $definition_system;

        return $this;
    }

    /**
     * Gets first_step_id
     *
     * @return int|null
     */
    public function getFirstStepId()
    {
        return $this->container['first_step_id'];
    }

    /**
     * Sets first_step_id
     *
     * @param int|null $first_step_id 最初の承認ステップのID
     *
     * @return self
     */
    public function setFirstStepId($first_step_id)
    {

        if (!is_null($first_step_id) && ($first_step_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $first_step_id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($first_step_id) && ($first_step_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $first_step_id when calling ApprovalFlowRouteResponseApprovalFlowRoute., must be bigger than or equal to 1.');
        }

        $this->container['first_step_id'] = $first_step_id;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return string[]|null
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param string[]|null $usages 申請種別（申請経路を使用できる申請種別を示します。例えば、ApprovalRequest の場合は、各種申請で使用できる申請経路です。） * `TxnApproval` - 仕訳承認 * `ExpenseApplication` - 経費精算 * `PaymentRequest` - 支払依頼 * `ApprovalRequest` - 各種申請 * `DocApproval` - 請求書等 (見積書・納品書・請求書・発注書)
     *
     * @return self
     */
    public function setUsages($usages)
    {
        $allowedValues = $this->getUsagesAllowableValues();
        if (!is_null($usages) && array_diff($usages, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'usages', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usages'] = $usages;

        return $this;
    }

    /**
     * Gets request_form_ids
     *
     * @return int[]
     */
    public function getRequestFormIds()
    {
        return $this->container['request_form_ids'];
    }

    /**
     * Sets request_form_ids
     *
     * @param int[] $request_form_ids 申請経路で利用できる申請フォームID配列
     *
     * @return self
     */
    public function setRequestFormIds($request_form_ids)
    {
        $this->container['request_form_ids'] = $request_form_ids;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \OpenAPI\Client\Model\ApprovalFlowRouteResponseApprovalFlowRouteSteps[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \OpenAPI\Client\Model\ApprovalFlowRouteResponseApprovalFlowRouteSteps[]|null $steps 承認ステップ（配列）
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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


