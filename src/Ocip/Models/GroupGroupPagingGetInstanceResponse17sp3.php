<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceResponse17sp3
 *
 * Response to GroupGroupPagingGetInstanceRequest17sp3.
 *         Contains the service profile information.
 *         
 *         Replaced by: GroupGroupPagingGetInstanceResponse19sp1
 *
 * @see GroupGroupPagingGetInstanceRequest17sp3
 * @see GroupGroupPagingGetInstanceResponse19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:29040","type":"sequence"}]
 */
class GroupGroupPagingGetInstanceResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29040
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName confirmationToneTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29040
     * @var int|null
     */
    private $confirmationToneTimeoutSeconds = null;

    /**
     * @ElementName deliverOriginatorCLIDInstead
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29040
     * @var bool|null
     */
    private $deliverOriginatorCLIDInstead = null;

    /**
     * @ElementName originatorCLIDPrefix
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29040
     * @var string|null
     */
    private $originatorCLIDPrefix = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile)
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


}

