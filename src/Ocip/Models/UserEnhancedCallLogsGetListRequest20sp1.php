<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest20sp1
 *
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         The filters "dateTimeRange", "numberFilter", "redirectedNumberFilter", "accountAuthorizationCodeFilter"
 *         "callAuthorizationCodeFilter" and "subscriberType" are ignored if call logs are stored in CDS. When
 *         "ReceivedOrMissed" is specified as "callLogType" and call logs are stored in CDS, all call logs including
 *         placed will be returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either a UserEnhancedCallLogsGetListResponse20sp1 or an ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           callAuthorizationCodeFilter
 *           callSecurityClassification
 *
 * @see maxNonPagedResponseS
 * @see UserEnhancedCallLogsGetListResponse20sp1
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42531","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType|null
     */
    private $callLogType = null;

    /**
     * @ElementName dateTimeRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange|null
     */
    private $dateTimeRange = null;

    /**
     * @ElementName numberFilter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter|null
     */
    private $numberFilter = null;

    /**
     * @ElementName redirectedNumberFilter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter20sp1
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter20sp1|null
     */
    private $redirectedNumberFilter = null;

    /**
     * @ElementName accountAuthorizationCodeFilter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter|null
     */
    private $accountAuthorizationCodeFilter = null;

    /**
     * @ElementName callAuthorizationCodeFilter
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter|null
     */
    private $callAuthorizationCodeFilter = null;

    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20|null
     */
    private $subscriberType = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42531
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for callLogType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType
     */
    public function getCallLogType()
    {
        return $this->callLogType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogType()
    {
        $this->callLogType = null;
        return $this;
    }

    /**
     * Getter for dateTimeRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange
     */
    public function getDateTimeRange()
    {
        return $this->dateTimeRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dateTimeRange;
    }

    /**
     * Setter for dateTimeRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange $dateTimeRange
     * @return $this
     */
    public function setDateTimeRange(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange $dateTimeRange)
    {
        $this->dateTimeRange = $dateTimeRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDateTimeRange()
    {
        $this->dateTimeRange = null;
        return $this;
    }

    /**
     * Getter for numberFilter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter
     */
    public function getNumberFilter()
    {
        return $this->numberFilter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberFilter;
    }

    /**
     * Setter for numberFilter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter $numberFilter
     * @return $this
     */
    public function setNumberFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter $numberFilter)
    {
        $this->numberFilter = $numberFilter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberFilter()
    {
        $this->numberFilter = null;
        return $this;
    }

    /**
     * Getter for redirectedNumberFilter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter20sp1
     */
    public function getRedirectedNumberFilter()
    {
        return $this->redirectedNumberFilter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectedNumberFilter;
    }

    /**
     * Setter for redirectedNumberFilter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter20sp1 $redirectedNumberFilter
     * @return $this
     */
    public function setRedirectedNumberFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter20sp1 $redirectedNumberFilter)
    {
        $this->redirectedNumberFilter = $redirectedNumberFilter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectedNumberFilter()
    {
        $this->redirectedNumberFilter = null;
        return $this;
    }

    /**
     * Getter for accountAuthorizationCodeFilter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter
     */
    public function getAccountAuthorizationCodeFilter()
    {
        return $this->accountAuthorizationCodeFilter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountAuthorizationCodeFilter;
    }

    /**
     * Setter for accountAuthorizationCodeFilter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter
     * @return $this
     */
    public function setAccountAuthorizationCodeFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter)
    {
        $this->accountAuthorizationCodeFilter = $accountAuthorizationCodeFilter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountAuthorizationCodeFilter()
    {
        $this->accountAuthorizationCodeFilter = null;
        return $this;
    }

    /**
     * Getter for callAuthorizationCodeFilter
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter
     */
    public function getCallAuthorizationCodeFilter()
    {
        return $this->callAuthorizationCodeFilter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callAuthorizationCodeFilter;
    }

    /**
     * Setter for callAuthorizationCodeFilter
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter $callAuthorizationCodeFilter
     * @return $this
     */
    public function setCallAuthorizationCodeFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter $callAuthorizationCodeFilter)
    {
        $this->callAuthorizationCodeFilter = $callAuthorizationCodeFilter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallAuthorizationCodeFilter()
    {
        $this->callAuthorizationCodeFilter = null;
        return $this;
    }

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20 $subscriberType
     * @return $this
     */
    public function setSubscriberType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20 $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberType()
    {
        $this->subscriberType = null;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePagingControl()
    {
        $this->responsePagingControl = null;
        return $this;
    }


}

