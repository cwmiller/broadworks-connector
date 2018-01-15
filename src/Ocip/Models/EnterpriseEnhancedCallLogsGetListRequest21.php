<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnhancedCallLogsGetListRequest21
 *
 * Request users' call logs within an enterprise
 *         If the callLogType is not specified, all types of calls logs (placed,
 * received, missed) are returned.
 *         It is possible to restrict the number of rows returned using
 * responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter
 * maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either an EnterpriseEnhancedCallLogsGetListResponse21 or
 * an ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in HSS
 * data mode:
 *           callAuthorizationCodeFilter
 */
class EnterpriseEnhancedCallLogsGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName callLogType
     * @var string|null
     */
    private $callLogType = null;

    /**
     * @ElementName groupId
     * @var string[]
     */
    private $groupId = array(
        
    );

    /**
     * @ElementName userDnRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $userDnRange = array(
        
    );

    /**
     * @ElementName userExtensionRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
     */
    private $userExtensionRange = array(
        
    );

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter21|null
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
     * @var string|null
     */
    private $subscriberType = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for callLogType
     *
     * @ElementName callLogType
     * @return string|null
     */
    public function getCallLogType()
    {
        return $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @ElementName callLogType
     * @param string|null $callLogType
     * @return $this
     */
    public function setCallLogType($callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string[]
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string[] $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Adder for groupId
     *
     * @ElementName groupId
     * @param string $groupId
     * @return $this
     */
    public function addGroupId($groupId)
    {
        $this->groupId []= $groupId;
        return $this;
    }

    /**
     * Getter for userDnRange
     *
     * @ElementName userDnRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getUserDnRange()
    {
        return $this->userDnRange;
    }

    /**
     * Setter for userDnRange
     *
     * @ElementName userDnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $userDnRange
     * @return $this
     */
    public function setUserDnRange($userDnRange)
    {
        $this->userDnRange = $userDnRange;
        return $this;
    }

    /**
     * Adder for userDnRange
     *
     * @ElementName userDnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $userDnRange
     * @return $this
     */
    public function addUserDnRange($userDnRange)
    {
        $this->userDnRange []= $userDnRange;
        return $this;
    }

    /**
     * Getter for userExtensionRange
     *
     * @ElementName userExtensionRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
     */
    public function getUserExtensionRange()
    {
        return $this->userExtensionRange;
    }

    /**
     * Setter for userExtensionRange
     *
     * @ElementName userExtensionRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[] $userExtensionRange
     * @return $this
     */
    public function setUserExtensionRange($userExtensionRange)
    {
        $this->userExtensionRange = $userExtensionRange;
        return $this;
    }

    /**
     * Adder for userExtensionRange
     *
     * @ElementName userExtensionRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $userExtensionRange
     * @return $this
     */
    public function addUserExtensionRange($userExtensionRange)
    {
        $this->userExtensionRange []= $userExtensionRange;
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
    public function setDateTimeRange($dateTimeRange)
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
    public function setNumberFilter($numberFilter)
    {
        $this->numberFilter = $numberFilter;
        return $this;
    }

    /**
     * Getter for redirectedNumberFilter
     *
     * @ElementName redirectedNumberFilter
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter21|null
     */
    public function getRedirectedNumberFilter()
    {
        return $this->redirectedNumberFilter;
    }

    /**
     * Setter for redirectedNumberFilter
     *
     * @ElementName redirectedNumberFilter
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedNumberFilter21|null $redirectedNumberFilter
     * @return $this
     */
    public function setRedirectedNumberFilter($redirectedNumberFilter)
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
    public function setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter)
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
    public function setCallAuthorizationCodeFilter($callAuthorizationCodeFilter)
    {
        $this->callAuthorizationCodeFilter = $callAuthorizationCodeFilter;
        return $this;
    }

    /**
     * Getter for subscriberType
     *
     * @ElementName subscriberType
     * @return string|null
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @ElementName subscriberType
     * @param string|null $subscriberType
     * @return $this
     */
    public function setSubscriberType($subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl($responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }


}

