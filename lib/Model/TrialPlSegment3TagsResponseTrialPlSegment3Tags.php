<?php
/**
 * TrialPlSegment3TagsResponseTrialPlSegment3Tags
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
 * TrialPlSegment3TagsResponseTrialPlSegment3Tags Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrialPlSegment3TagsResponseTrialPlSegment3Tags implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialPlSegment_3TagsResponse_trial_pl_segment_3_tags';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'segment_3_tag_ids' => 'string',
        'fiscal_year' => 'int',
        'start_month' => 'int',
        'end_month' => 'int',
        'start_date' => 'string',
        'end_date' => 'string',
        'account_item_display_type' => 'string',
        'breakdown_display_type' => 'string',
        'partner_id' => 'int',
        'partner_code' => 'string',
        'item_id' => 'int',
        'section_id' => 'int',
        'adjustment' => 'string',
        'cost_allocation' => 'string',
        'approval_flow_status' => 'string',
        'created_at' => 'string',
        'balances' => '\OpenAPI\Client\Model\TrialPlSegment3TagsResponseTrialPlSegment3TagsBalances[]'
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
        'segment_3_tag_ids' => null,
        'fiscal_year' => null,
        'start_month' => null,
        'end_month' => null,
        'start_date' => null,
        'end_date' => null,
        'account_item_display_type' => null,
        'breakdown_display_type' => null,
        'partner_id' => null,
        'partner_code' => null,
        'item_id' => null,
        'section_id' => null,
        'adjustment' => null,
        'cost_allocation' => null,
        'approval_flow_status' => null,
        'created_at' => null,
        'balances' => null
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
        'segment_3_tag_ids' => 'segment_3_tag_ids',
        'fiscal_year' => 'fiscal_year',
        'start_month' => 'start_month',
        'end_month' => 'end_month',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'account_item_display_type' => 'account_item_display_type',
        'breakdown_display_type' => 'breakdown_display_type',
        'partner_id' => 'partner_id',
        'partner_code' => 'partner_code',
        'item_id' => 'item_id',
        'section_id' => 'section_id',
        'adjustment' => 'adjustment',
        'cost_allocation' => 'cost_allocation',
        'approval_flow_status' => 'approval_flow_status',
        'created_at' => 'created_at',
        'balances' => 'balances'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'segment_3_tag_ids' => 'setSegment3TagIds',
        'fiscal_year' => 'setFiscalYear',
        'start_month' => 'setStartMonth',
        'end_month' => 'setEndMonth',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'account_item_display_type' => 'setAccountItemDisplayType',
        'breakdown_display_type' => 'setBreakdownDisplayType',
        'partner_id' => 'setPartnerId',
        'partner_code' => 'setPartnerCode',
        'item_id' => 'setItemId',
        'section_id' => 'setSectionId',
        'adjustment' => 'setAdjustment',
        'cost_allocation' => 'setCostAllocation',
        'approval_flow_status' => 'setApprovalFlowStatus',
        'created_at' => 'setCreatedAt',
        'balances' => 'setBalances'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'segment_3_tag_ids' => 'getSegment3TagIds',
        'fiscal_year' => 'getFiscalYear',
        'start_month' => 'getStartMonth',
        'end_month' => 'getEndMonth',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'account_item_display_type' => 'getAccountItemDisplayType',
        'breakdown_display_type' => 'getBreakdownDisplayType',
        'partner_id' => 'getPartnerId',
        'partner_code' => 'getPartnerCode',
        'item_id' => 'getItemId',
        'section_id' => 'getSectionId',
        'adjustment' => 'getAdjustment',
        'cost_allocation' => 'getCostAllocation',
        'approval_flow_status' => 'getApprovalFlowStatus',
        'created_at' => 'getCreatedAt',
        'balances' => 'getBalances'
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

    const ACCOUNT_ITEM_DISPLAY_TYPE_ACCOUNT_ITEM = 'account_item';
    const ACCOUNT_ITEM_DISPLAY_TYPE_GROUP = 'group';
    const BREAKDOWN_DISPLAY_TYPE_PARTNER = 'partner';
    const BREAKDOWN_DISPLAY_TYPE_ITEM = 'item';
    const BREAKDOWN_DISPLAY_TYPE_SECTION = 'section';
    const BREAKDOWN_DISPLAY_TYPE_ACCOUNT_ITEM = 'account_item';
    const ADJUSTMENT_ONLY = 'only';
    const ADJUSTMENT_WITHOUT = 'without';
    const COST_ALLOCATION_ONLY = 'only';
    const COST_ALLOCATION_WITHOUT = 'without';
    const APPROVAL_FLOW_STATUS_WITHOUT_IN_PROGRESS = 'without_in_progress';
    const APPROVAL_FLOW_STATUS_ALL = 'all';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountItemDisplayTypeAllowableValues()
    {
        return [
            self::ACCOUNT_ITEM_DISPLAY_TYPE_ACCOUNT_ITEM,
            self::ACCOUNT_ITEM_DISPLAY_TYPE_GROUP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakdownDisplayTypeAllowableValues()
    {
        return [
            self::BREAKDOWN_DISPLAY_TYPE_PARTNER,
            self::BREAKDOWN_DISPLAY_TYPE_ITEM,
            self::BREAKDOWN_DISPLAY_TYPE_SECTION,
            self::BREAKDOWN_DISPLAY_TYPE_ACCOUNT_ITEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdjustmentAllowableValues()
    {
        return [
            self::ADJUSTMENT_ONLY,
            self::ADJUSTMENT_WITHOUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCostAllocationAllowableValues()
    {
        return [
            self::COST_ALLOCATION_ONLY,
            self::COST_ALLOCATION_WITHOUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApprovalFlowStatusAllowableValues()
    {
        return [
            self::APPROVAL_FLOW_STATUS_WITHOUT_IN_PROGRESS,
            self::APPROVAL_FLOW_STATUS_ALL,
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
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['segment_3_tag_ids'] = $data['segment_3_tag_ids'] ?? null;
        $this->container['fiscal_year'] = $data['fiscal_year'] ?? null;
        $this->container['start_month'] = $data['start_month'] ?? null;
        $this->container['end_month'] = $data['end_month'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['account_item_display_type'] = $data['account_item_display_type'] ?? null;
        $this->container['breakdown_display_type'] = $data['breakdown_display_type'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['partner_code'] = $data['partner_code'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['adjustment'] = $data['adjustment'] ?? null;
        $this->container['cost_allocation'] = $data['cost_allocation'] ?? null;
        $this->container['approval_flow_status'] = $data['approval_flow_status'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['balances'] = $data['balances'] ?? null;
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

        if ($this->container['segment_3_tag_ids'] === null) {
            $invalidProperties[] = "'segment_3_tag_ids' can't be null";
        }
        if (!is_null($this->container['start_month']) && ($this->container['start_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'start_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['start_month']) && ($this->container['start_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_month', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['end_month']) && ($this->container['end_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'end_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['end_month']) && ($this->container['end_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'end_month', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getAccountItemDisplayTypeAllowableValues();
        if (!is_null($this->container['account_item_display_type']) && !in_array($this->container['account_item_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_item_display_type', must be one of '%s'",
                $this->container['account_item_display_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBreakdownDisplayTypeAllowableValues();
        if (!is_null($this->container['breakdown_display_type']) && !in_array($this->container['breakdown_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'breakdown_display_type', must be one of '%s'",
                $this->container['breakdown_display_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'item_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'item_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'section_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'section_id', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getAdjustmentAllowableValues();
        if (!is_null($this->container['adjustment']) && !in_array($this->container['adjustment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'adjustment', must be one of '%s'",
                $this->container['adjustment'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCostAllocationAllowableValues();
        if (!is_null($this->container['cost_allocation']) && !in_array($this->container['cost_allocation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cost_allocation', must be one of '%s'",
                $this->container['cost_allocation'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApprovalFlowStatusAllowableValues();
        if (!is_null($this->container['approval_flow_status']) && !in_array($this->container['approval_flow_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'approval_flow_status', must be one of '%s'",
                $this->container['approval_flow_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['balances'] === null) {
            $invalidProperties[] = "'balances' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_ids
     *
     * @return string
     */
    public function getSegment3TagIds()
    {
        return $this->container['segment_3_tag_ids'];
    }

    /**
     * Sets segment_3_tag_ids
     *
     * @param string $segment_3_tag_ids 出力するセグメント3の指定
     *
     * @return self
     */
    public function setSegment3TagIds($segment_3_tag_ids)
    {
        $this->container['segment_3_tag_ids'] = $segment_3_tag_ids;

        return $this;
    }

    /**
     * Gets fiscal_year
     *
     * @return int|null
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     *
     * @param int|null $fiscal_year 会計年度(条件に指定した時、または条件に月、日条件がない時のみ含まれる）
     *
     * @return self
     */
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets start_month
     *
     * @return int|null
     */
    public function getStartMonth()
    {
        return $this->container['start_month'];
    }

    /**
     * Sets start_month
     *
     * @param int|null $start_month 発生月で絞込：開始会計月(1-12)(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setStartMonth($start_month)
    {

        if (!is_null($start_month) && ($start_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 12.');
        }
        if (!is_null($start_month) && ($start_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 1.');
        }

        $this->container['start_month'] = $start_month;

        return $this;
    }

    /**
     * Gets end_month
     *
     * @return int|null
     */
    public function getEndMonth()
    {
        return $this->container['end_month'];
    }

    /**
     * Sets end_month
     *
     * @param int|null $end_month 発生月で絞込：終了会計月(1-12)(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setEndMonth($end_month)
    {

        if (!is_null($end_month) && ($end_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 12.');
        }
        if (!is_null($end_month) && ($end_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 1.');
        }

        $this->container['end_month'] = $end_month;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date 発生日で絞込：開始日(yyyy-mm-dd)(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date 発生日で絞込：終了日(yyyy-mm-dd)(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets account_item_display_type
     *
     * @return string|null
     */
    public function getAccountItemDisplayType()
    {
        return $this->container['account_item_display_type'];
    }

    /**
     * Sets account_item_display_type
     *
     * @param string|null $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group）(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setAccountItemDisplayType($account_item_display_type)
    {
        $allowedValues = $this->getAccountItemDisplayTypeAllowableValues();
        if (!is_null($account_item_display_type) && !in_array($account_item_display_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_item_display_type', must be one of '%s'",
                    $account_item_display_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_item_display_type'] = $account_item_display_type;

        return $this;
    }

    /**
     * Gets breakdown_display_type
     *
     * @return string|null
     */
    public function getBreakdownDisplayType()
    {
        return $this->container['breakdown_display_type'];
    }

    /**
     * Sets breakdown_display_type
     *
     * @param string|null $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item）(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setBreakdownDisplayType($breakdown_display_type)
    {
        $allowedValues = $this->getBreakdownDisplayTypeAllowableValues();
        if (!is_null($breakdown_display_type) && !in_array($breakdown_display_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'breakdown_display_type', must be one of '%s'",
                    $breakdown_display_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['breakdown_display_type'] = $breakdown_display_type;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 取引先ID(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {

        if (!is_null($partner_id) && ($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($partner_id) && ($partner_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 0.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_code
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->container['partner_code'];
    }

    /**
     * Sets partner_code
     *
     * @param string|null $partner_code 取引先コード(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id 品目ID(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setItemId($item_id)
    {

        if (!is_null($item_id) && ($item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($item_id) && ($item_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 0.');
        }

        $this->container['item_id'] = $item_id;

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
     * @param int|null $section_id 部門ID(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setSectionId($section_id)
    {

        if (!is_null($section_id) && ($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($section_id) && ($section_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling TrialPlSegment3TagsResponseTrialPlSegment3Tags., must be bigger than or equal to 0.');
        }

        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets adjustment
     *
     * @return string|null
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param string|null $adjustment 決算整理仕訳のみ: only, 決算整理仕訳以外: without(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setAdjustment($adjustment)
    {
        $allowedValues = $this->getAdjustmentAllowableValues();
        if (!is_null($adjustment) && !in_array($adjustment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'adjustment', must be one of '%s'",
                    $adjustment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets cost_allocation
     *
     * @return string|null
     */
    public function getCostAllocation()
    {
        return $this->container['cost_allocation'];
    }

    /**
     * Sets cost_allocation
     *
     * @param string|null $cost_allocation 配賦仕訳のみ：only,配賦仕訳以外：without(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setCostAllocation($cost_allocation)
    {
        $allowedValues = $this->getCostAllocationAllowableValues();
        if (!is_null($cost_allocation) && !in_array($cost_allocation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cost_allocation', must be one of '%s'",
                    $cost_allocation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cost_allocation'] = $cost_allocation;

        return $this;
    }

    /**
     * Gets approval_flow_status
     *
     * @return string|null
     */
    public function getApprovalFlowStatus()
    {
        return $this->container['approval_flow_status'];
    }

    /**
     * Sets approval_flow_status
     *
     * @param string|null $approval_flow_status 未承認を除く: without_in_progress (デフォルト), 全てのステータス: all(条件に指定した時のみ含まれる）
     *
     * @return self
     */
    public function setApprovalFlowStatus($approval_flow_status)
    {
        $allowedValues = $this->getApprovalFlowStatusAllowableValues();
        if (!is_null($approval_flow_status) && !in_array($approval_flow_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'approval_flow_status', must be one of '%s'",
                    $approval_flow_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['approval_flow_status'] = $approval_flow_status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at 作成日時
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return \OpenAPI\Client\Model\TrialPlSegment3TagsResponseTrialPlSegment3TagsBalances[]
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param \OpenAPI\Client\Model\TrialPlSegment3TagsResponseTrialPlSegment3TagsBalances[] $balances balances
     *
     * @return self
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

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


