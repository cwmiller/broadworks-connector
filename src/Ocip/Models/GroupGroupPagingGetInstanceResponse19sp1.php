<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceResponse19sp1
 *
 * Response to GroupGroupPagingGetInstanceRequest19sp1.
 *         Contains the service profile information.
 *         
 *         The following element is only used in AS data mode and not returned in XS data mode :
 *            networkClassOfService
 *
 * @see GroupGroupPagingGetInstanceRequest19sp1
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:315","type":"sequence"}]
 */
class GroupGroupPagingGetInstanceResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group 8ede928f2a9c1318573ba9c7a105655c:315
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName confirmationToneTimeoutSeconds
     * @Type int
     * @Group 8ede928f2a9c1318573ba9c7a105655c:315
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $confirmationToneTimeoutSeconds = null;

    /**
     * @ElementName deliverOriginatorCLIDInstead
     * @Type bool
     * @Group 8ede928f2a9c1318573ba9c7a105655c:315
     * @var bool|null
     */
    protected $deliverOriginatorCLIDInstead = null;

    /**
     * @ElementName originatorCLIDPrefix
     * @Type string
     * @Optional
     * @Group 8ede928f2a9c1318573ba9c7a105655c:315
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $originatorCLIDPrefix = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 8ede928f2a9c1318573ba9c7a105655c:315
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
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
     * Getter for confirmationToneTimeoutSeconds
     *
     * @return int
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return $this->confirmationToneTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationToneTimeoutSeconds;
    }

    /**
     * Setter for confirmationToneTimeoutSeconds
     *
     * @param int $confirmationToneTimeoutSeconds
     * @return $this
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds)
    {
        $this->confirmationToneTimeoutSeconds = $confirmationToneTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmationToneTimeoutSeconds()
    {
        $this->confirmationToneTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for deliverOriginatorCLIDInstead
     *
     * @return bool
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return $this->deliverOriginatorCLIDInstead instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deliverOriginatorCLIDInstead;
    }

    /**
     * Setter for deliverOriginatorCLIDInstead
     *
     * @param bool $deliverOriginatorCLIDInstead
     * @return $this
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead)
    {
        $this->deliverOriginatorCLIDInstead = $deliverOriginatorCLIDInstead;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeliverOriginatorCLIDInstead()
    {
        $this->deliverOriginatorCLIDInstead = null;
        return $this;
    }

    /**
     * Getter for originatorCLIDPrefix
     *
     * @return string
     */
    public function getOriginatorCLIDPrefix()
    {
        return $this->originatorCLIDPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatorCLIDPrefix;
    }

    /**
     * Setter for originatorCLIDPrefix
     *
     * @param string $originatorCLIDPrefix
     * @return $this
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix)
    {
        $this->originatorCLIDPrefix = $originatorCLIDPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatorCLIDPrefix()
    {
        $this->originatorCLIDPrefix = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

