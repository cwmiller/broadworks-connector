<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupGetResponse21
 *
 * Response to SystemHuntGroupGetRequest21.
 *
 * @see SystemHuntGroupGetRequest21
 * @Groups [{"id":"781bbab86d937537938d4fe917029d5c:597","type":"sequence"}]
 */
class SystemHuntGroupGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @Type bool
     * @Group 781bbab86d937537938d4fe917029d5c:597
     * @var bool|null
     */
    protected $removeHuntGroupNameFromCLID = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope
     * @Group 781bbab86d937537938d4fe917029d5c:597
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope|null
     */
    protected $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @Type bool
     * @Group 781bbab86d937537938d4fe917029d5c:597
     * @var bool|null
     */
    protected $allowAgentDeviceInitiatedForward = null;

    /**
     * Getter for removeHuntGroupNameFromCLID
     *
     * @return bool
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return $this->removeHuntGroupNameFromCLID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->removeHuntGroupNameFromCLID;
    }

    /**
     * Setter for removeHuntGroupNameFromCLID
     *
     * @param bool $removeHuntGroupNameFromCLID
     * @return $this
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID)
    {
        $this->removeHuntGroupNameFromCLID = $removeHuntGroupNameFromCLID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoveHuntGroupNameFromCLID()
    {
        $this->removeHuntGroupNameFromCLID = null;
        return $this;
    }

    /**
     * Getter for uniformCallDistributionPolicyScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->uniformCallDistributionPolicyScope;
    }

    /**
     * Setter for uniformCallDistributionPolicyScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     * @return $this
     */
    public function setUniformCallDistributionPolicyScope(\CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope)
    {
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUniformCallDistributionPolicyScope()
    {
        $this->uniformCallDistributionPolicyScope = null;
        return $this;
    }

    /**
     * Getter for allowAgentDeviceInitiatedForward
     *
     * @return bool
     */
    public function getAllowAgentDeviceInitiatedForward()
    {
        return $this->allowAgentDeviceInitiatedForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAgentDeviceInitiatedForward;
    }

    /**
     * Setter for allowAgentDeviceInitiatedForward
     *
     * @param bool $allowAgentDeviceInitiatedForward
     * @return $this
     */
    public function setAllowAgentDeviceInitiatedForward($allowAgentDeviceInitiatedForward)
    {
        $this->allowAgentDeviceInitiatedForward = $allowAgentDeviceInitiatedForward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAgentDeviceInitiatedForward()
    {
        $this->allowAgentDeviceInitiatedForward = null;
        return $this;
    }
}

