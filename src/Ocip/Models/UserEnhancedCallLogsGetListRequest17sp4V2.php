<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest17sp4V2
 *
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed,
 * received, missed) are returned.
 *         The filters "dateTimeRange", "numberFilter", "redirectedNumberFilter",
 * "accountAuthorizationCodeFilter"
 *         "callAuthorizationCodeFilter" and "subscriberType" are ignored if call
 * logs are stored in CDS. When
 *         "ReceivedOrMissed" is specified as "callLogType" and call logs are
 * stored in CDS, all call logs including
 *         placed will be returned.
 *         It is possible to restrict the number of rows returned using
 * responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter
 * maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either a UserEnhancedCallLogsGetListResponse17sp4V2 or
 * an ErrorResponse.
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode:
 *           callAuthorizationCodeFilter
 *
 * @see maxNonPagedResponse
 * @see UserEnhancedCallLogsGetListResponse17sp4
 * @see ErrorResponse
 */
class UserEnhancedCallLogsGetListRequest17sp4V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callLogType
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType|null
     */
    private $callLogType = null;

    /**
     * @ElementName dateTimeRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange|null
     */
    private $dateTimeRange = null;

    /**
     * @ElementName numberFilter
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter|null
     */
    private $numberFilter = null;

    /**
     * @ElementName redirectedNumberFilter
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter|null
     */
    private $redirectedNumberFilter = null;

    /**
     * @ElementName accountAuthorizationCodeFilter
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter|null
     */
    private $accountAuthorizationCodeFilter = null;

    /**
     * @ElementName callAuthorizationCodeFilter
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter|null
     */
    private $callAuthorizationCodeFilter = null;

    /**
     * @ElementName subscriberType
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType|null
     */
    private $subscriberType = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for callLogType
     *
     * @ElementName callLogType
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType|null
     */
    public function getCallLogType()
    {
        return $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @ElementName callLogType
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType|null $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallLogsRequestType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * Getter for dateTimeRange
     *
     * @ElementName dateTimeRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange|null
     */
    public function getDateTimeRange()
    {
        return $this->dateTimeRange;
    }

    /**
     * Setter for dateTimeRange
     *
     * @ElementName dateTimeRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange|null $dateTimeRange
     * @return $this
     */
    public function setDateTimeRange(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsTimeRange $dateTimeRange)
    {
        $this->dateTimeRange = $dateTimeRange;
        return $this;
    }

    /**
     * Getter for numberFilter
     *
     * @ElementName numberFilter
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter|null
     */
    public function getNumberFilter()
    {
        return $this->numberFilter;
    }

    /**
     * Setter for numberFilter
     *
     * @ElementName numberFilter
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter|null $numberFilter
     * @return $this
     */
    public function setNumberFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsNumberFilter $numberFilter)
    {
        $this->numberFilter = $numberFilter;
        return $this;
    }

    /**
     * Getter for redirectedNumberFilter
     *
     * @ElementName redirectedNumberFilter
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter|null
     */
    public function getRedirectedNumberFilter()
    {
        return $this->redirectedNumberFilter;
    }

    /**
     * Setter for redirectedNumberFilter
     *
     * @ElementName redirectedNumberFilter
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter|null $redirectedNumberFilter
     * @return $this
     */
    public function setRedirectedNumberFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter)
    {
        $this->redirectedNumberFilter = $redirectedNumberFilter;
        return $this;
    }

    /**
     * Getter for accountAuthorizationCodeFilter
     *
     * @ElementName accountAuthorizationCodeFilter
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter|null
     */
    public function getAccountAuthorizationCodeFilter()
    {
        return $this->accountAuthorizationCodeFilter;
    }

    /**
     * Setter for accountAuthorizationCodeFilter
     *
     * @ElementName accountAuthorizationCodeFilter
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter|null $accountAuthorizationCodeFilter
     * @return $this
     */
    public function setAccountAuthorizationCodeFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter)
    {
        $this->accountAuthorizationCodeFilter = $accountAuthorizationCodeFilter;
        return $this;
    }

    /**
     * Getter for callAuthorizationCodeFilter
     *
     * @ElementName callAuthorizationCodeFilter
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter|null
     */
    public function getCallAuthorizationCodeFilter()
    {
        return $this->callAuthorizationCodeFilter;
    }

    /**
     * Setter for callAuthorizationCodeFilter
     *
     * @ElementName callAuthorizationCodeFilter
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter|null $callAuthorizationCodeFilter
     * @return $this
     */
    public function setCallAuthorizationCodeFilter(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsCallAuthorizationCodeFilter $callAuthorizationCodeFilter)
    {
        $this->callAuthorizationCodeFilter = $callAuthorizationCodeFilter;
        return $this;
    }

    /**
     * Getter for subscriberType
     *
     * @ElementName subscriberType
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType|null
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @ElementName subscriberType
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType|null $subscriberType
     * @return $this
     */
    public function setSubscriberType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }


}

