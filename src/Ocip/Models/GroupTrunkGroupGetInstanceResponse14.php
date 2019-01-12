<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceResponse14
 *
 * Response to GroupTrunkGroupGetInstanceRequest.
 *         The publicUserIdentity in the ServiceInstanceReadProfile is not used for trunk groups.
 *         Returns the profile information for the Trunk Group.
 *
 * @see GroupTrunkGroupGetInstanceRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2418","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxIncomingCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var int|null
     */
    private $maxIncomingCalls = null;

    /**
     * @ElementName maxOutgoingCalls
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var int|null
     */
    private $maxOutgoingCalls = null;

    /**
     * @ElementName requireAuthentication
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var bool|null
     */
    private $requireAuthentication = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2418
     * @var string|null
     */
    private $sipAuthenticationUserName = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Getter for maxActiveCalls
     *
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxIncomingCalls
     *
     * @return int
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingCalls;
    }

    /**
     * Setter for maxIncomingCalls
     *
     * @param int $maxIncomingCalls
     * @return $this
     */
    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $this->maxIncomingCalls = $maxIncomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIncomingCalls()
    {
        $this->maxIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for maxOutgoingCalls
     *
     * @return int
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingCalls;
    }

    /**
     * Setter for maxOutgoingCalls
     *
     * @param int $maxOutgoingCalls
     * @return $this
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $this->maxOutgoingCalls = $maxOutgoingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOutgoingCalls()
    {
        $this->maxOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for requireAuthentication
     *
     * @return bool
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requireAuthentication;
    }

    /**
     * Setter for requireAuthentication
     *
     * @param bool $requireAuthentication
     * @return $this
     */
    public function setRequireAuthentication($requireAuthentication)
    {
        $this->requireAuthentication = $requireAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequireAuthentication()
    {
        $this->requireAuthentication = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationUserName
     *
     * @return string
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @param string $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationUserName()
    {
        $this->sipAuthenticationUserName = null;
        return $this;
    }


}

