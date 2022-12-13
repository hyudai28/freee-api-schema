<?php
/**
 * ExpenseApplicationCreateParams
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
 * ExpenseApplicationCreateParams Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseApplicationCreateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'expenseApplicationCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'title' => 'string',
        'issue_date' => 'string',
        'description' => 'string',
        'section_id' => 'int',
        'tag_ids' => 'int[]',
        'expense_application_lines' => '\OpenAPI\Client\Model\ExpenseApplicationCreateParamsExpenseApplicationLines[]',
        'approval_flow_route_id' => 'int',
        'approver_id' => 'int',
        'draft' => 'bool',
        'parent_id' => 'int',
        'segment_1_tag_id' => 'int',
        'segment_2_tag_id' => 'int',
        'segment_3_tag_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'title' => null,
        'issue_date' => null,
        'description' => null,
        'section_id' => null,
        'tag_ids' => null,
        'expense_application_lines' => null,
        'approval_flow_route_id' => null,
        'approver_id' => null,
        'draft' => null,
        'parent_id' => null,
        'segment_1_tag_id' => 'int64',
        'segment_2_tag_id' => 'int64',
        'segment_3_tag_id' => 'int64'
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
        'company_id' => 'company_id',
        'title' => 'title',
        'issue_date' => 'issue_date',
        'description' => 'description',
        'section_id' => 'section_id',
        'tag_ids' => 'tag_ids',
        'expense_application_lines' => 'expense_application_lines',
        'approval_flow_route_id' => 'approval_flow_route_id',
        'approver_id' => 'approver_id',
        'draft' => 'draft',
        'parent_id' => 'parent_id',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_3_tag_id' => 'segment_3_tag_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'title' => 'setTitle',
        'issue_date' => 'setIssueDate',
        'description' => 'setDescription',
        'section_id' => 'setSectionId',
        'tag_ids' => 'setTagIds',
        'expense_application_lines' => 'setExpenseApplicationLines',
        'approval_flow_route_id' => 'setApprovalFlowRouteId',
        'approver_id' => 'setApproverId',
        'draft' => 'setDraft',
        'parent_id' => 'setParentId',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_3_tag_id' => 'setSegment3TagId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'title' => 'getTitle',
        'issue_date' => 'getIssueDate',
        'description' => 'getDescription',
        'section_id' => 'getSectionId',
        'tag_ids' => 'getTagIds',
        'expense_application_lines' => 'getExpenseApplicationLines',
        'approval_flow_route_id' => 'getApprovalFlowRouteId',
        'approver_id' => 'getApproverId',
        'draft' => 'getDraft',
        'parent_id' => 'getParentId',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_3_tag_id' => 'getSegment3TagId'
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
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['expense_application_lines'] = $data['expense_application_lines'] ?? null;
        $this->container['approval_flow_route_id'] = $data['approval_flow_route_id'] ?? null;
        $this->container['approver_id'] = $data['approver_id'] ?? null;
        $this->container['draft'] = $data['draft'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['segment_1_tag_id'] = $data['segment_1_tag_id'] ?? null;
        $this->container['segment_2_tag_id'] = $data['segment_2_tag_id'] ?? null;
        $this->container['segment_3_tag_id'] = $data['segment_3_tag_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 250)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'section_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'section_id', must be bigger than or equal to 1.";
        }

        if ($this->container['expense_application_lines'] === null) {
            $invalidProperties[] = "'expense_application_lines' can't be null";
        }
        if (!is_null($this->container['approval_flow_route_id']) && ($this->container['approval_flow_route_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['approval_flow_route_id']) && ($this->container['approval_flow_route_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approver_id']) && ($this->container['approver_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'approver_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['approver_id']) && ($this->container['approver_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'approver_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be bigger than or equal to 1.";
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
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {

        if (($company_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

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
     * @param string $title 申請タイトル (250文字以内)
     *
     * @return self
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 250)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ExpenseApplicationCreateParams., must be smaller than or equal to 250.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string|null $issue_date 申請日 (yyyy-mm-dd)<br> 指定しない場合は当日の日付が登録されます。
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

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
     * @param string|null $description 備考 (10000文字以内)
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ExpenseApplicationCreateParams., must be smaller than or equal to 10000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets section_id
     *
     * @return int|null
     */
    public function getSectionId()
    {
        return $this->container['section_id'];
    }

    /**
     * Sets section_id
     *
     * @param int|null $section_id 部門ID
     *
     * @return self
     */
    public function setSectionId($section_id)
    {

        if (!is_null($section_id) && ($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($section_id) && ($section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[]|null $tag_ids メモタグID
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets expense_application_lines
     *
     * @return \OpenAPI\Client\Model\ExpenseApplicationCreateParamsExpenseApplicationLines[]
     */
    public function getExpenseApplicationLines()
    {
        return $this->container['expense_application_lines'];
    }

    /**
     * Sets expense_application_lines
     *
     * @param \OpenAPI\Client\Model\ExpenseApplicationCreateParamsExpenseApplicationLines[] $expense_application_lines expense_application_lines
     *
     * @return self
     */
    public function setExpenseApplicationLines($expense_application_lines)
    {
        $this->container['expense_application_lines'] = $expense_application_lines;

        return $this;
    }

    /**
     * Gets approval_flow_route_id
     *
     * @return int|null
     */
    public function getApprovalFlowRouteId()
    {
        return $this->container['approval_flow_route_id'];
    }

    /**
     * Sets approval_flow_route_id
     *
     * @param int|null $approval_flow_route_id 申請経路ID<br> <ul>     <li>経費申請のステータスを申請中として作成する場合は、必ず指定してください。</li>     <li>指定する申請経路IDは、申請経路APIを利用して取得してください。</li>     <li>         未指定の場合は、基本経路を設定している事業所では基本経路が、基本経路を設定していない事業所では利用可能な申請経路の中から最初の申請経路が自動的に使用されます。         <ul>            <li>意図しない申請経路を持った経費申請の作成を防ぐために、使用する申請経路IDを指定することを推奨します。</li>         </ul>     </li>     <li>         ベーシックプランの事業所では以下のデフォルトで用意された申請経路のみ指定できます         <ul>         <li>指定なし</li>         <li>承認者を指定</li>         </ul>     </li> </ul>
     *
     * @return self
     */
    public function setApprovalFlowRouteId($approval_flow_route_id)
    {

        if (!is_null($approval_flow_route_id) && ($approval_flow_route_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($approval_flow_route_id) && ($approval_flow_route_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['approval_flow_route_id'] = $approval_flow_route_id;

        return $this;
    }

    /**
     * Gets approver_id
     *
     * @return int|null
     */
    public function getApproverId()
    {
        return $this->container['approver_id'];
    }

    /**
     * Sets approver_id
     *
     * @param int|null $approver_id 承認者のユーザーID<br> 「承認者を指定」の経路を申請経路として使用する場合に指定してください。<br> 指定する承認者のユーザーIDは、申請経路APIを利用して取得してください。
     *
     * @return self
     */
    public function setApproverId($approver_id)
    {

        if (!is_null($approver_id) && ($approver_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $approver_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($approver_id) && ($approver_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $approver_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['approver_id'] = $approver_id;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return bool|null
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param bool|null $draft 経費申請のステータス<br> falseを指定した時は申請中（in_progress）で経費申請を作成します。<br> trueを指定した時は下書き（draft）で経費申請を作成します。<br> 未指定の時は下書きとみなして経費申請を作成します。
     *
     * @return self
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id 親申請ID(法人向けプロフェッショナル, 法人向け エンタープライズプラン)<br> <ul>   <li>承認済みの既存各種申請IDのみ指定可能です。</li>   <li>各種申請一覧APIを利用して取得してください。</li> </ul>
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (!is_null($parent_id) && ($parent_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($parent_id) && ($parent_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_id
     *
     * @return int|null
     */
    public function getSegment1TagId()
    {
        return $this->container['segment_1_tag_id'];
    }

    /**
     * Sets segment_1_tag_id
     *
     * @param int|null $segment_1_tag_id セグメント１ID(法人向けプロフェッショナル, 法人向けエンタープライズプラン)<br> セグメントタグ一覧APIを利用して取得してください。<br> <a href=\"https://support.freee.co.jp/hc/ja/articles/360020679611\" target=\"_blank\">セグメント（分析用タグ）の設定</a><br>
     *
     * @return self
     */
    public function setSegment1TagId($segment_1_tag_id)
    {

        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_id
     *
     * @return int|null
     */
    public function getSegment2TagId()
    {
        return $this->container['segment_2_tag_id'];
    }

    /**
     * Sets segment_2_tag_id
     *
     * @param int|null $segment_2_tag_id セグメント２ID(法人向け エンタープライズプラン)<br> セグメントタグ一覧APIを利用して取得してください。<br> <a href=\"https://support.freee.co.jp/hc/ja/articles/360020679611\" target=\"_blank\">セグメント（分析用タグ）の設定</a><br>
     *
     * @return self
     */
    public function setSegment2TagId($segment_2_tag_id)
    {

        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_id
     *
     * @return int|null
     */
    public function getSegment3TagId()
    {
        return $this->container['segment_3_tag_id'];
    }

    /**
     * Sets segment_3_tag_id
     *
     * @param int|null $segment_3_tag_id セグメント３ID(法人向け エンタープライズプラン)<br> セグメントタグ一覧APIを利用して取得してください。<br> <a href=\"https://support.freee.co.jp/hc/ja/articles/360020679611\" target=\"_blank\">セグメント（分析用タグ）の設定</a><br>
     *
     * @return self
     */
    public function setSegment3TagId($segment_3_tag_id)
    {

        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ExpenseApplicationCreateParams., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ExpenseApplicationCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

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


