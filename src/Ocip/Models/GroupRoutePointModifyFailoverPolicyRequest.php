<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyFailoverPolicyRequest
 *
 * Modify the route point failover policy. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:817","type":"sequence"}]
 */
class GroupRoutePointModifyFailoverPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enableFailoverSupport
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var bool|null
     */
    private $enableFailoverSupport = null;

    /**
     * @ElementName externalSystem
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalSystem = null;

    /**
     * @ElementName failoverPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $failoverPhoneNumber = null;

    /**
     * @ElementName perCallEnableFailoverSupport
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var bool|null
     */
    private $perCallEnableFailoverSupport = null;

    /**
     * @ElementName perCallCallFailureTimeoutSeconds
     * @Type int
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var int|null
     */
    private $perCallCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallOutboundCallFailureTimeoutSeconds
     * @Type int
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var int|null
     */
    private $perCallOutboundCallFailureTimeoutSeconds = null;

    /**
     * @ElementName perCallFailoverPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:817
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $perCallFailoverPhoneNumber = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getExternalSystem()
    {
        return $this->externalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @param string|null $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        if ($externalSystem === null) {
            $this->externalSystem = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->externalSystem = $externalSystem;
        }
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
     * @return string|null
     */
    public function getFailoverPhoneNumber()
    {
        return $this->failoverPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->failoverPhoneNumber;
    }

    /**
     * Setter for failoverPhoneNumber
     *
     * @param string|null $failoverPhoneNumber
     * @return $this
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber)
    {
        if ($failoverPhoneNumber === null) {
            $this->failoverPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->failoverPhoneNumber = $failoverPhoneNumber;
        }
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
     * @return string|null
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return $this->perCallFailoverPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->perCallFailoverPhoneNumber;
    }

    /**
     * Setter for perCallFailoverPhoneNumber
     *
     * @param string|null $perCallFailoverPhoneNumber
     * @return $this
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber)
    {
        if ($perCallFailoverPhoneNumber === null) {
            $this->perCallFailoverPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->perCallFailoverPhoneNumber = $perCallFailoverPhoneNumber;
        }
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

