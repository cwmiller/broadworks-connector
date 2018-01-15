<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceResponse19sp1
 *
 * Response to GroupGroupPagingGetInstanceRequest19sp1.
 *         Contains the service profile information.
 */
class GroupGroupPagingGetInstanceResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName confirmationToneTimeoutSeconds
     * @var int|null
     */
    private $confirmationToneTimeoutSeconds = null;

    /**
     * @ElementName deliverOriginatorCLIDInstead
     * @var bool|null
     */
    private $deliverOriginatorCLIDInstead = null;

    /**
     * @ElementName originatorCLIDPrefix
     * @var string|null
     */
    private $originatorCLIDPrefix = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for confirmationToneTimeoutSeconds
     *
     * @ElementName confirmationToneTimeoutSeconds
     * @return int|null
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return $this->confirmationToneTimeoutSeconds;
    }

    /**
     * Setter for confirmationToneTimeoutSeconds
     *
     * @ElementName confirmationToneTimeoutSeconds
     * @param int|null $confirmationToneTimeoutSeconds
     * @return $this
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds)
    {
        $this->confirmationToneTimeoutSeconds = $confirmationToneTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for deliverOriginatorCLIDInstead
     *
     * @ElementName deliverOriginatorCLIDInstead
     * @return bool|null
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return $this->deliverOriginatorCLIDInstead;
    }

    /**
     * Setter for deliverOriginatorCLIDInstead
     *
     * @ElementName deliverOriginatorCLIDInstead
     * @param bool|null $deliverOriginatorCLIDInstead
     * @return $this
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead)
    {
        $this->deliverOriginatorCLIDInstead = $deliverOriginatorCLIDInstead;
        return $this;
    }

    /**
     * Getter for originatorCLIDPrefix
     *
     * @ElementName originatorCLIDPrefix
     * @return string|null
     */
    public function getOriginatorCLIDPrefix()
    {
        return $this->originatorCLIDPrefix;
    }

    /**
     * Setter for originatorCLIDPrefix
     *
     * @ElementName originatorCLIDPrefix
     * @param string|null $originatorCLIDPrefix
     * @return $this
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix)
    {
        $this->originatorCLIDPrefix = $originatorCLIDPrefix;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

