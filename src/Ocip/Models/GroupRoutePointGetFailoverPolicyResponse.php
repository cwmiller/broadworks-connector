<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetFailoverPolicyResponse
 *
 * Response to the GroupRoutePointGetFailoverPolicyRequest.
 *
 * @see GroupRoutePointGetFailoverPolicyRequest
 */
class GroupRoutePointGetFailoverPolicyResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableFailoverSupport
     * @var bool|null
     */
    private $enableFailoverSupport = null;

    /**
     * @ElementName externalSystem
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * @ElementName failoverPhoneNumber
     * @var string|null
     */
    private $failoverPhoneNumber = null;

    /**
     * @ElementName failoverStatus
     * @var string|null
     */
    private $failoverStatus = null;

    /**
     * @ElementName perCallEnableFailoverSupport
     * @var bool|null
     */
    private $perCallEnableFailoverSupport = null;

    /**
     * @ElementName perCallCallFailureTimeoutSeconds
     * @var int|null
     */
    private $perCallCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallOutboundCallFailureTimeoutSeconds
     * @var int|null
     */
    private $perCallOutboundCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallFailoverPhoneNumber
     * @var string|null
     */
    private $perCallFailoverPhoneNumber = null;

    /**
     * Getter for enableFailoverSupport
     *
     * @ElementName enableFailoverSupport
     * @return bool|null
     */
    public function getEnableFailoverSupport()
    {
        return $this->enableFailoverSupport;
    }

    /**
     * Setter for enableFailoverSupport
     *
     * @ElementName enableFailoverSupport
     * @param bool|null $enableFailoverSupport
     * @return $this
     */
    public function setEnableFailoverSupport($enableFailoverSupport)
    {
        $this->enableFailoverSupport = $enableFailoverSupport;
        return $this;
    }

    /**
     * Getter for externalSystem
     *
     * @ElementName externalSystem
     * @return string|null
     */
    public function getExternalSystem()
    {
        return $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @ElementName externalSystem
     * @param string|null $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }

    /**
     * Getter for failoverPhoneNumber
     *
     * @ElementName failoverPhoneNumber
     * @return string|null
     */
    public function getFailoverPhoneNumber()
    {
        return $this->failoverPhoneNumber;
    }

    /**
     * Setter for failoverPhoneNumber
     *
     * @ElementName failoverPhoneNumber
     * @param string|null $failoverPhoneNumber
     * @return $this
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber)
    {
        $this->failoverPhoneNumber = $failoverPhoneNumber;
        return $this;
    }

    /**
     * Getter for failoverStatus
     *
     * @ElementName failoverStatus
     * @return string|null
     */
    public function getFailoverStatus()
    {
        return $this->failoverStatus;
    }

    /**
     * Setter for failoverStatus
     *
     * @ElementName failoverStatus
     * @param string|null $failoverStatus
     * @return $this
     */
    public function setFailoverStatus($failoverStatus)
    {
        $this->failoverStatus = $failoverStatus;
        return $this;
    }

    /**
     * Getter for perCallEnableFailoverSupport
     *
     * @ElementName perCallEnableFailoverSupport
     * @return bool|null
     */
    public function getPerCallEnableFailoverSupport()
    {
        return $this->perCallEnableFailoverSupport;
    }

    /**
     * Setter for perCallEnableFailoverSupport
     *
     * @ElementName perCallEnableFailoverSupport
     * @param bool|null $perCallEnableFailoverSupport
     * @return $this
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport)
    {
        $this->perCallEnableFailoverSupport = $perCallEnableFailoverSupport;
        return $this;
    }

    /**
     * Getter for perCallCallFailureTimeoutSeconds
     *
     * @ElementName perCallCallFailureTimeoutSeconds
     * @return int|null
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return $this->perCallCallFailureTimeoutSeconds;
    }

    /**
     * Setter for perCallCallFailureTimeoutSeconds
     *
     * @ElementName perCallCallFailureTimeoutSeconds
     * @param int|null $perCallCallFailureTimeoutSeconds
     * @return $this
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds)
    {
        $this->perCallCallFailureTimeoutSeconds = $perCallCallFailureTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for perCallOutboundCallFailureTimeoutSeconds
     *
     * @ElementName perCallOutboundCallFailureTimeoutSeconds
     * @return int|null
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return $this->perCallOutboundCallFailureTimeoutSeconds;
    }

    /**
     * Setter for perCallOutboundCallFailureTimeoutSeconds
     *
     * @ElementName perCallOutboundCallFailureTimeoutSeconds
     * @param int|null $perCallOutboundCallFailureTimeoutSeconds
     * @return $this
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = $perCallOutboundCallFailureTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for perCallFailoverPhoneNumber
     *
     * @ElementName perCallFailoverPhoneNumber
     * @return string|null
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return $this->perCallFailoverPhoneNumber;
    }

    /**
     * Setter for perCallFailoverPhoneNumber
     *
     * @ElementName perCallFailoverPhoneNumber
     * @param string|null $perCallFailoverPhoneNumber
     * @return $this
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber)
    {
        $this->perCallFailoverPhoneNumber = $perCallFailoverPhoneNumber;
        return $this;
    }


}

