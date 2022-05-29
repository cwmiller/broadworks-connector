<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetFailoverPolicyResponse
 *
 * Response to the GroupRoutePointGetFailoverPolicyRequest.
 *
 * @see GroupRoutePointGetFailoverPolicyRequest
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:540","type":"sequence"}]
 */
class GroupRoutePointGetFailoverPolicyResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableFailoverSupport
     * @Type bool
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @var bool|null
     */
    protected $enableFailoverSupport = null;

    /**
     * @ElementName externalSystem
     * @Type string
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $externalSystem = null;

    /**
     * @ElementName failoverPhoneNumber
     * @Type string
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $failoverPhoneNumber = null;

    /**
     * @ElementName failoverStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RoutePointFailoverStatus
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoutePointFailoverStatus|null
     */
    protected $failoverStatus = null;

    /**
     * @ElementName perCallEnableFailoverSupport
     * @Type bool
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @var bool|null
     */
    protected $perCallEnableFailoverSupport = null;

    /**
     * @ElementName perCallCallFailureTimeoutSeconds
     * @Type int
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $perCallCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallOutboundCallFailureTimeoutSeconds
     * @Type int
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $perCallOutboundCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallFailoverPhoneNumber
     * @Type string
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:540
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $perCallFailoverPhoneNumber = null;

    /**
     * Getter for enableFailoverSupport
     *
     * @return bool
     */
    public function getEnableFailoverSupport()
    {
        return $this->enableFailoverSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFailoverSupport;
    }

    /**
     * Setter for enableFailoverSupport
     *
     * @param bool $enableFailoverSupport
     * @return $this
     */
    public function setEnableFailoverSupport($enableFailoverSupport)
    {
        $this->enableFailoverSupport = $enableFailoverSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFailoverSupport()
    {
        $this->enableFailoverSupport = null;
        return $this;
    }

    /**
     * Getter for externalSystem
     *
     * @return string
     */
    public function getExternalSystem()
    {
        return $this->externalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @param string $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSystem()
    {
        $this->externalSystem = null;
        return $this;
    }

    /**
     * Getter for failoverPhoneNumber
     *
     * @return string
     */
    public function getFailoverPhoneNumber()
    {
        return $this->failoverPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failoverPhoneNumber;
    }

    /**
     * Setter for failoverPhoneNumber
     *
     * @param string $failoverPhoneNumber
     * @return $this
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber)
    {
        $this->failoverPhoneNumber = $failoverPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFailoverPhoneNumber()
    {
        $this->failoverPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for failoverStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoutePointFailoverStatus
     */
    public function getFailoverStatus()
    {
        return $this->failoverStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failoverStatus;
    }

    /**
     * Setter for failoverStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoutePointFailoverStatus $failoverStatus
     * @return $this
     */
    public function setFailoverStatus(\CWM\BroadWorksConnector\Ocip\Models\RoutePointFailoverStatus $failoverStatus)
    {
        $this->failoverStatus = $failoverStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFailoverStatus()
    {
        $this->failoverStatus = null;
        return $this;
    }

    /**
     * Getter for perCallEnableFailoverSupport
     *
     * @return bool
     */
    public function getPerCallEnableFailoverSupport()
    {
        return $this->perCallEnableFailoverSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->perCallEnableFailoverSupport;
    }

    /**
     * Setter for perCallEnableFailoverSupport
     *
     * @param bool $perCallEnableFailoverSupport
     * @return $this
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport)
    {
        $this->perCallEnableFailoverSupport = $perCallEnableFailoverSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPerCallEnableFailoverSupport()
    {
        $this->perCallEnableFailoverSupport = null;
        return $this;
    }

    /**
     * Getter for perCallCallFailureTimeoutSeconds
     *
     * @return int
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return $this->perCallCallFailureTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->perCallCallFailureTimeoutSeconds;
    }

    /**
     * Setter for perCallCallFailureTimeoutSeconds
     *
     * @param int $perCallCallFailureTimeoutSeconds
     * @return $this
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds)
    {
        $this->perCallCallFailureTimeoutSeconds = $perCallCallFailureTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPerCallCallFailureTimeoutSeconds()
    {
        $this->perCallCallFailureTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for perCallOutboundCallFailureTimeoutSeconds
     *
     * @return int
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return $this->perCallOutboundCallFailureTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->perCallOutboundCallFailureTimeoutSeconds;
    }

    /**
     * Setter for perCallOutboundCallFailureTimeoutSeconds
     *
     * @param int $perCallOutboundCallFailureTimeoutSeconds
     * @return $this
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = $perCallOutboundCallFailureTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPerCallOutboundCallFailureTimeoutSeconds()
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for perCallFailoverPhoneNumber
     *
     * @return string
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return $this->perCallFailoverPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->perCallFailoverPhoneNumber;
    }

    /**
     * Setter for perCallFailoverPhoneNumber
     *
     * @param string $perCallFailoverPhoneNumber
     * @return $this
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber)
    {
        $this->perCallFailoverPhoneNumber = $perCallFailoverPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPerCallFailoverPhoneNumber()
    {
        $this->perCallFailoverPhoneNumber = null;
        return $this;
    }


}

