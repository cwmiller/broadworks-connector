<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingModifyInstanceRequest
 *
 * Request to modify a Group Paging instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
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
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
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

