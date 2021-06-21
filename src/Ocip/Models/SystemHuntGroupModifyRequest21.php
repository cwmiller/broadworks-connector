<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupModifyRequest21
 *
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc829065f9d696d3ca7084121d57f8c0:615","type":"sequence"}]
 */
class SystemHuntGroupModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @Type bool
     * @Optional
     * @Group bc829065f9d696d3ca7084121d57f8c0:615
     * @var bool|null
     */
    private $removeHuntGroupNameFromCLID = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope
     * @Optional
     * @Group bc829065f9d696d3ca7084121d57f8c0:615
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope|null
     */
    private $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @Type bool
     * @Optional
     * @Group bc829065f9d696d3ca7084121d57f8c0:615
     * @var bool|null
     */
    private $allowAgentDeviceInitiatedForward = null;

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

