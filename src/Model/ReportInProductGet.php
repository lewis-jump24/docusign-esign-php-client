<?php
/**
 * ReportInProductGet
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * ReportInProductGet Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportInProductGet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reportInProductGet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_success_filter' => '?string',
        'custom_field_filter' => '?string',
        'date_range_custom_from_date' => '?string',
        'date_range_custom_to_date' => '?string',
        'date_range_filter' => '?string',
        'display_order' => '?string',
        'envelope_date_type_filter' => '?string',
        'envelope_recipient_name_contains_filter' => '?string',
        'envelope_status_filter' => '?string',
        'envelope_subject_contains_filter' => '?string',
        'fields' => '\DocuSign\eSign\Model\ReportInProductField[]',
        'last_scheduled_execution_date' => '?string',
        'last_scheduled_execution_success_date' => '?string',
        'max_download_rows' => '?string',
        'max_grid_rows' => '?string',
        'max_scheduled_rows' => '?string',
        'period_length_filter' => '?string',
        'report_customized_id' => '?string',
        'report_description' => '?string',
        'report_id' => '?string',
        'report_name' => '?string',
        'report_type' => '?string',
        'run_uri' => '?string',
        'save_uri' => '?string',
        'schedule_id' => '?string',
        'sent_by_details' => '\DocuSign\eSign\Model\ReportInProductSentByDetails',
        'sent_by_filter' => '?string',
        'sent_by_ids' => '?string',
        'sort_field_direction' => '?string',
        'sort_field_name' => '?string',
        'verification_status_filter' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_success_filter' => null,
        'custom_field_filter' => null,
        'date_range_custom_from_date' => null,
        'date_range_custom_to_date' => null,
        'date_range_filter' => null,
        'display_order' => null,
        'envelope_date_type_filter' => null,
        'envelope_recipient_name_contains_filter' => null,
        'envelope_status_filter' => null,
        'envelope_subject_contains_filter' => null,
        'fields' => null,
        'last_scheduled_execution_date' => null,
        'last_scheduled_execution_success_date' => null,
        'max_download_rows' => null,
        'max_grid_rows' => null,
        'max_scheduled_rows' => null,
        'period_length_filter' => null,
        'report_customized_id' => null,
        'report_description' => null,
        'report_id' => null,
        'report_name' => null,
        'report_type' => null,
        'run_uri' => null,
        'save_uri' => null,
        'schedule_id' => null,
        'sent_by_details' => null,
        'sent_by_filter' => null,
        'sent_by_ids' => null,
        'sort_field_direction' => null,
        'sort_field_name' => null,
        'verification_status_filter' => null
    ];

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
        'authentication_success_filter' => 'authenticationSuccessFilter',
        'custom_field_filter' => 'customFieldFilter',
        'date_range_custom_from_date' => 'dateRangeCustomFromDate',
        'date_range_custom_to_date' => 'dateRangeCustomToDate',
        'date_range_filter' => 'dateRangeFilter',
        'display_order' => 'displayOrder',
        'envelope_date_type_filter' => 'envelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'envelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'envelopeStatusFilter',
        'envelope_subject_contains_filter' => 'envelopeSubjectContainsFilter',
        'fields' => 'fields',
        'last_scheduled_execution_date' => 'lastScheduledExecutionDate',
        'last_scheduled_execution_success_date' => 'lastScheduledExecutionSuccessDate',
        'max_download_rows' => 'maxDownloadRows',
        'max_grid_rows' => 'maxGridRows',
        'max_scheduled_rows' => 'maxScheduledRows',
        'period_length_filter' => 'periodLengthFilter',
        'report_customized_id' => 'reportCustomizedId',
        'report_description' => 'reportDescription',
        'report_id' => 'reportId',
        'report_name' => 'reportName',
        'report_type' => 'reportType',
        'run_uri' => 'runUri',
        'save_uri' => 'saveUri',
        'schedule_id' => 'scheduleId',
        'sent_by_details' => 'sentByDetails',
        'sent_by_filter' => 'sentByFilter',
        'sent_by_ids' => 'sentByIds',
        'sort_field_direction' => 'sortFieldDirection',
        'sort_field_name' => 'sortFieldName',
        'verification_status_filter' => 'verificationStatusFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_success_filter' => 'setAuthenticationSuccessFilter',
        'custom_field_filter' => 'setCustomFieldFilter',
        'date_range_custom_from_date' => 'setDateRangeCustomFromDate',
        'date_range_custom_to_date' => 'setDateRangeCustomToDate',
        'date_range_filter' => 'setDateRangeFilter',
        'display_order' => 'setDisplayOrder',
        'envelope_date_type_filter' => 'setEnvelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'setEnvelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'setEnvelopeStatusFilter',
        'envelope_subject_contains_filter' => 'setEnvelopeSubjectContainsFilter',
        'fields' => 'setFields',
        'last_scheduled_execution_date' => 'setLastScheduledExecutionDate',
        'last_scheduled_execution_success_date' => 'setLastScheduledExecutionSuccessDate',
        'max_download_rows' => 'setMaxDownloadRows',
        'max_grid_rows' => 'setMaxGridRows',
        'max_scheduled_rows' => 'setMaxScheduledRows',
        'period_length_filter' => 'setPeriodLengthFilter',
        'report_customized_id' => 'setReportCustomizedId',
        'report_description' => 'setReportDescription',
        'report_id' => 'setReportId',
        'report_name' => 'setReportName',
        'report_type' => 'setReportType',
        'run_uri' => 'setRunUri',
        'save_uri' => 'setSaveUri',
        'schedule_id' => 'setScheduleId',
        'sent_by_details' => 'setSentByDetails',
        'sent_by_filter' => 'setSentByFilter',
        'sent_by_ids' => 'setSentByIds',
        'sort_field_direction' => 'setSortFieldDirection',
        'sort_field_name' => 'setSortFieldName',
        'verification_status_filter' => 'setVerificationStatusFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_success_filter' => 'getAuthenticationSuccessFilter',
        'custom_field_filter' => 'getCustomFieldFilter',
        'date_range_custom_from_date' => 'getDateRangeCustomFromDate',
        'date_range_custom_to_date' => 'getDateRangeCustomToDate',
        'date_range_filter' => 'getDateRangeFilter',
        'display_order' => 'getDisplayOrder',
        'envelope_date_type_filter' => 'getEnvelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'getEnvelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'getEnvelopeStatusFilter',
        'envelope_subject_contains_filter' => 'getEnvelopeSubjectContainsFilter',
        'fields' => 'getFields',
        'last_scheduled_execution_date' => 'getLastScheduledExecutionDate',
        'last_scheduled_execution_success_date' => 'getLastScheduledExecutionSuccessDate',
        'max_download_rows' => 'getMaxDownloadRows',
        'max_grid_rows' => 'getMaxGridRows',
        'max_scheduled_rows' => 'getMaxScheduledRows',
        'period_length_filter' => 'getPeriodLengthFilter',
        'report_customized_id' => 'getReportCustomizedId',
        'report_description' => 'getReportDescription',
        'report_id' => 'getReportId',
        'report_name' => 'getReportName',
        'report_type' => 'getReportType',
        'run_uri' => 'getRunUri',
        'save_uri' => 'getSaveUri',
        'schedule_id' => 'getScheduleId',
        'sent_by_details' => 'getSentByDetails',
        'sent_by_filter' => 'getSentByFilter',
        'sent_by_ids' => 'getSentByIds',
        'sort_field_direction' => 'getSortFieldDirection',
        'sort_field_name' => 'getSortFieldName',
        'verification_status_filter' => 'getVerificationStatusFilter'
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
        $this->container['authentication_success_filter'] = isset($data['authentication_success_filter']) ? $data['authentication_success_filter'] : null;
        $this->container['custom_field_filter'] = isset($data['custom_field_filter']) ? $data['custom_field_filter'] : null;
        $this->container['date_range_custom_from_date'] = isset($data['date_range_custom_from_date']) ? $data['date_range_custom_from_date'] : null;
        $this->container['date_range_custom_to_date'] = isset($data['date_range_custom_to_date']) ? $data['date_range_custom_to_date'] : null;
        $this->container['date_range_filter'] = isset($data['date_range_filter']) ? $data['date_range_filter'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['envelope_date_type_filter'] = isset($data['envelope_date_type_filter']) ? $data['envelope_date_type_filter'] : null;
        $this->container['envelope_recipient_name_contains_filter'] = isset($data['envelope_recipient_name_contains_filter']) ? $data['envelope_recipient_name_contains_filter'] : null;
        $this->container['envelope_status_filter'] = isset($data['envelope_status_filter']) ? $data['envelope_status_filter'] : null;
        $this->container['envelope_subject_contains_filter'] = isset($data['envelope_subject_contains_filter']) ? $data['envelope_subject_contains_filter'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['last_scheduled_execution_date'] = isset($data['last_scheduled_execution_date']) ? $data['last_scheduled_execution_date'] : null;
        $this->container['last_scheduled_execution_success_date'] = isset($data['last_scheduled_execution_success_date']) ? $data['last_scheduled_execution_success_date'] : null;
        $this->container['max_download_rows'] = isset($data['max_download_rows']) ? $data['max_download_rows'] : null;
        $this->container['max_grid_rows'] = isset($data['max_grid_rows']) ? $data['max_grid_rows'] : null;
        $this->container['max_scheduled_rows'] = isset($data['max_scheduled_rows']) ? $data['max_scheduled_rows'] : null;
        $this->container['period_length_filter'] = isset($data['period_length_filter']) ? $data['period_length_filter'] : null;
        $this->container['report_customized_id'] = isset($data['report_customized_id']) ? $data['report_customized_id'] : null;
        $this->container['report_description'] = isset($data['report_description']) ? $data['report_description'] : null;
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['run_uri'] = isset($data['run_uri']) ? $data['run_uri'] : null;
        $this->container['save_uri'] = isset($data['save_uri']) ? $data['save_uri'] : null;
        $this->container['schedule_id'] = isset($data['schedule_id']) ? $data['schedule_id'] : null;
        $this->container['sent_by_details'] = isset($data['sent_by_details']) ? $data['sent_by_details'] : null;
        $this->container['sent_by_filter'] = isset($data['sent_by_filter']) ? $data['sent_by_filter'] : null;
        $this->container['sent_by_ids'] = isset($data['sent_by_ids']) ? $data['sent_by_ids'] : null;
        $this->container['sort_field_direction'] = isset($data['sort_field_direction']) ? $data['sort_field_direction'] : null;
        $this->container['sort_field_name'] = isset($data['sort_field_name']) ? $data['sort_field_name'] : null;
        $this->container['verification_status_filter'] = isset($data['verification_status_filter']) ? $data['verification_status_filter'] : null;
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
     * Gets authentication_success_filter
     *
     * @return ?string
     */
    public function getAuthenticationSuccessFilter()
    {
        return $this->container['authentication_success_filter'];
    }

    /**
     * Sets authentication_success_filter
     *
     * @param ?string $authentication_success_filter 
     *
     * @return $this
     */
    public function setAuthenticationSuccessFilter($authentication_success_filter)
    {
        $this->container['authentication_success_filter'] = $authentication_success_filter;

        return $this;
    }

    /**
     * Gets custom_field_filter
     *
     * @return ?string
     */
    public function getCustomFieldFilter()
    {
        return $this->container['custom_field_filter'];
    }

    /**
     * Sets custom_field_filter
     *
     * @param ?string $custom_field_filter 
     *
     * @return $this
     */
    public function setCustomFieldFilter($custom_field_filter)
    {
        $this->container['custom_field_filter'] = $custom_field_filter;

        return $this;
    }

    /**
     * Gets date_range_custom_from_date
     *
     * @return ?string
     */
    public function getDateRangeCustomFromDate()
    {
        return $this->container['date_range_custom_from_date'];
    }

    /**
     * Sets date_range_custom_from_date
     *
     * @param ?string $date_range_custom_from_date 
     *
     * @return $this
     */
    public function setDateRangeCustomFromDate($date_range_custom_from_date)
    {
        $this->container['date_range_custom_from_date'] = $date_range_custom_from_date;

        return $this;
    }

    /**
     * Gets date_range_custom_to_date
     *
     * @return ?string
     */
    public function getDateRangeCustomToDate()
    {
        return $this->container['date_range_custom_to_date'];
    }

    /**
     * Sets date_range_custom_to_date
     *
     * @param ?string $date_range_custom_to_date 
     *
     * @return $this
     */
    public function setDateRangeCustomToDate($date_range_custom_to_date)
    {
        $this->container['date_range_custom_to_date'] = $date_range_custom_to_date;

        return $this;
    }

    /**
     * Gets date_range_filter
     *
     * @return ?string
     */
    public function getDateRangeFilter()
    {
        return $this->container['date_range_filter'];
    }

    /**
     * Sets date_range_filter
     *
     * @param ?string $date_range_filter 
     *
     * @return $this
     */
    public function setDateRangeFilter($date_range_filter)
    {
        $this->container['date_range_filter'] = $date_range_filter;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return ?string
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param ?string $display_order 
     *
     * @return $this
     */
    public function setDisplayOrder($display_order)
    {
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets envelope_date_type_filter
     *
     * @return ?string
     */
    public function getEnvelopeDateTypeFilter()
    {
        return $this->container['envelope_date_type_filter'];
    }

    /**
     * Sets envelope_date_type_filter
     *
     * @param ?string $envelope_date_type_filter 
     *
     * @return $this
     */
    public function setEnvelopeDateTypeFilter($envelope_date_type_filter)
    {
        $this->container['envelope_date_type_filter'] = $envelope_date_type_filter;

        return $this;
    }

    /**
     * Gets envelope_recipient_name_contains_filter
     *
     * @return ?string
     */
    public function getEnvelopeRecipientNameContainsFilter()
    {
        return $this->container['envelope_recipient_name_contains_filter'];
    }

    /**
     * Sets envelope_recipient_name_contains_filter
     *
     * @param ?string $envelope_recipient_name_contains_filter 
     *
     * @return $this
     */
    public function setEnvelopeRecipientNameContainsFilter($envelope_recipient_name_contains_filter)
    {
        $this->container['envelope_recipient_name_contains_filter'] = $envelope_recipient_name_contains_filter;

        return $this;
    }

    /**
     * Gets envelope_status_filter
     *
     * @return ?string
     */
    public function getEnvelopeStatusFilter()
    {
        return $this->container['envelope_status_filter'];
    }

    /**
     * Sets envelope_status_filter
     *
     * @param ?string $envelope_status_filter 
     *
     * @return $this
     */
    public function setEnvelopeStatusFilter($envelope_status_filter)
    {
        $this->container['envelope_status_filter'] = $envelope_status_filter;

        return $this;
    }

    /**
     * Gets envelope_subject_contains_filter
     *
     * @return ?string
     */
    public function getEnvelopeSubjectContainsFilter()
    {
        return $this->container['envelope_subject_contains_filter'];
    }

    /**
     * Sets envelope_subject_contains_filter
     *
     * @param ?string $envelope_subject_contains_filter 
     *
     * @return $this
     */
    public function setEnvelopeSubjectContainsFilter($envelope_subject_contains_filter)
    {
        $this->container['envelope_subject_contains_filter'] = $envelope_subject_contains_filter;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \DocuSign\eSign\Model\ReportInProductField[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \DocuSign\eSign\Model\ReportInProductField[] $fields 
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets last_scheduled_execution_date
     *
     * @return ?string
     */
    public function getLastScheduledExecutionDate()
    {
        return $this->container['last_scheduled_execution_date'];
    }

    /**
     * Sets last_scheduled_execution_date
     *
     * @param ?string $last_scheduled_execution_date 
     *
     * @return $this
     */
    public function setLastScheduledExecutionDate($last_scheduled_execution_date)
    {
        $this->container['last_scheduled_execution_date'] = $last_scheduled_execution_date;

        return $this;
    }

    /**
     * Gets last_scheduled_execution_success_date
     *
     * @return ?string
     */
    public function getLastScheduledExecutionSuccessDate()
    {
        return $this->container['last_scheduled_execution_success_date'];
    }

    /**
     * Sets last_scheduled_execution_success_date
     *
     * @param ?string $last_scheduled_execution_success_date 
     *
     * @return $this
     */
    public function setLastScheduledExecutionSuccessDate($last_scheduled_execution_success_date)
    {
        $this->container['last_scheduled_execution_success_date'] = $last_scheduled_execution_success_date;

        return $this;
    }

    /**
     * Gets max_download_rows
     *
     * @return ?string
     */
    public function getMaxDownloadRows()
    {
        return $this->container['max_download_rows'];
    }

    /**
     * Sets max_download_rows
     *
     * @param ?string $max_download_rows 
     *
     * @return $this
     */
    public function setMaxDownloadRows($max_download_rows)
    {
        $this->container['max_download_rows'] = $max_download_rows;

        return $this;
    }

    /**
     * Gets max_grid_rows
     *
     * @return ?string
     */
    public function getMaxGridRows()
    {
        return $this->container['max_grid_rows'];
    }

    /**
     * Sets max_grid_rows
     *
     * @param ?string $max_grid_rows 
     *
     * @return $this
     */
    public function setMaxGridRows($max_grid_rows)
    {
        $this->container['max_grid_rows'] = $max_grid_rows;

        return $this;
    }

    /**
     * Gets max_scheduled_rows
     *
     * @return ?string
     */
    public function getMaxScheduledRows()
    {
        return $this->container['max_scheduled_rows'];
    }

    /**
     * Sets max_scheduled_rows
     *
     * @param ?string $max_scheduled_rows 
     *
     * @return $this
     */
    public function setMaxScheduledRows($max_scheduled_rows)
    {
        $this->container['max_scheduled_rows'] = $max_scheduled_rows;

        return $this;
    }

    /**
     * Gets period_length_filter
     *
     * @return ?string
     */
    public function getPeriodLengthFilter()
    {
        return $this->container['period_length_filter'];
    }

    /**
     * Sets period_length_filter
     *
     * @param ?string $period_length_filter 
     *
     * @return $this
     */
    public function setPeriodLengthFilter($period_length_filter)
    {
        $this->container['period_length_filter'] = $period_length_filter;

        return $this;
    }

    /**
     * Gets report_customized_id
     *
     * @return ?string
     */
    public function getReportCustomizedId()
    {
        return $this->container['report_customized_id'];
    }

    /**
     * Sets report_customized_id
     *
     * @param ?string $report_customized_id 
     *
     * @return $this
     */
    public function setReportCustomizedId($report_customized_id)
    {
        $this->container['report_customized_id'] = $report_customized_id;

        return $this;
    }

    /**
     * Gets report_description
     *
     * @return ?string
     */
    public function getReportDescription()
    {
        return $this->container['report_description'];
    }

    /**
     * Sets report_description
     *
     * @param ?string $report_description 
     *
     * @return $this
     */
    public function setReportDescription($report_description)
    {
        $this->container['report_description'] = $report_description;

        return $this;
    }

    /**
     * Gets report_id
     *
     * @return ?string
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param ?string $report_id 
     *
     * @return $this
     */
    public function setReportId($report_id)
    {
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return ?string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param ?string $report_name 
     *
     * @return $this
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return ?string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param ?string $report_type 
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets run_uri
     *
     * @return ?string
     */
    public function getRunUri()
    {
        return $this->container['run_uri'];
    }

    /**
     * Sets run_uri
     *
     * @param ?string $run_uri 
     *
     * @return $this
     */
    public function setRunUri($run_uri)
    {
        $this->container['run_uri'] = $run_uri;

        return $this;
    }

    /**
     * Gets save_uri
     *
     * @return ?string
     */
    public function getSaveUri()
    {
        return $this->container['save_uri'];
    }

    /**
     * Sets save_uri
     *
     * @param ?string $save_uri 
     *
     * @return $this
     */
    public function setSaveUri($save_uri)
    {
        $this->container['save_uri'] = $save_uri;

        return $this;
    }

    /**
     * Gets schedule_id
     *
     * @return ?string
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param ?string $schedule_id 
     *
     * @return $this
     */
    public function setScheduleId($schedule_id)
    {
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets sent_by_details
     *
     * @return \DocuSign\eSign\Model\ReportInProductSentByDetails
     */
    public function getSentByDetails()
    {
        return $this->container['sent_by_details'];
    }

    /**
     * Sets sent_by_details
     *
     * @param \DocuSign\eSign\Model\ReportInProductSentByDetails $sent_by_details sent_by_details
     *
     * @return $this
     */
    public function setSentByDetails($sent_by_details)
    {
        $this->container['sent_by_details'] = $sent_by_details;

        return $this;
    }

    /**
     * Gets sent_by_filter
     *
     * @return ?string
     */
    public function getSentByFilter()
    {
        return $this->container['sent_by_filter'];
    }

    /**
     * Sets sent_by_filter
     *
     * @param ?string $sent_by_filter 
     *
     * @return $this
     */
    public function setSentByFilter($sent_by_filter)
    {
        $this->container['sent_by_filter'] = $sent_by_filter;

        return $this;
    }

    /**
     * Gets sent_by_ids
     *
     * @return ?string
     */
    public function getSentByIds()
    {
        return $this->container['sent_by_ids'];
    }

    /**
     * Sets sent_by_ids
     *
     * @param ?string $sent_by_ids 
     *
     * @return $this
     */
    public function setSentByIds($sent_by_ids)
    {
        $this->container['sent_by_ids'] = $sent_by_ids;

        return $this;
    }

    /**
     * Gets sort_field_direction
     *
     * @return ?string
     */
    public function getSortFieldDirection()
    {
        return $this->container['sort_field_direction'];
    }

    /**
     * Sets sort_field_direction
     *
     * @param ?string $sort_field_direction 
     *
     * @return $this
     */
    public function setSortFieldDirection($sort_field_direction)
    {
        $this->container['sort_field_direction'] = $sort_field_direction;

        return $this;
    }

    /**
     * Gets sort_field_name
     *
     * @return ?string
     */
    public function getSortFieldName()
    {
        return $this->container['sort_field_name'];
    }

    /**
     * Sets sort_field_name
     *
     * @param ?string $sort_field_name 
     *
     * @return $this
     */
    public function setSortFieldName($sort_field_name)
    {
        $this->container['sort_field_name'] = $sort_field_name;

        return $this;
    }

    /**
     * Gets verification_status_filter
     *
     * @return ?string
     */
    public function getVerificationStatusFilter()
    {
        return $this->container['verification_status_filter'];
    }

    /**
     * Sets verification_status_filter
     *
     * @param ?string $verification_status_filter 
     *
     * @return $this
     */
    public function setVerificationStatusFilter($verification_status_filter)
    {
        $this->container['verification_status_filter'] = $verification_status_filter;

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

