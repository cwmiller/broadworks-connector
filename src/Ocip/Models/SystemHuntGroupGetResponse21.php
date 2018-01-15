<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupGetResponse21
 *
 * Response to SystemHuntGroupGetRequest21.
 */
class SystemHuntGroupGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @var bool|null
     */
    private $removeHuntGroupNameFromCLID = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @var string|null
     */
    private $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @var bool|null
     */
    private $allowAgentDeviceInitiatedForward = null;

    /**
     * Getter for removeHuntGroupNameFromCLID
     *
     * @ElementName removeHuntGroupNameFromCLID
     * @return bool|null
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return $this->removeHuntGroupNameFromCLID;
    }

    /**
     * Setter for removeHuntGroupNameFromCLID
     *
     * @ElementName removeHuntGroupNameFromCLID
     * @param bool|null $removeHuntGroupNameFromCLID
     * @return $this
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID)
    {
        $this->removeHuntGroupNameFromCLID = $removeHuntGroupNameFromCLID;
        return $this;
    }

    /**
     * Getter for uniformCallDistributionPolicyScope
     *
     * @ElementName uniformCallDistributionPolicyScope
     * @return string|null
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope;
    }

    /**
     * Setter for uniformCallDistributionPolicyScope
     *
     * @ElementName uniformCallDistributionPolicyScope
     * @param string|null $uniformCallDistributionPolicyScope
     * @return $this
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope)
    {
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        return $this;
    }

    /**
     * Getter for allowAgentDeviceInitiatedForward
     *
     * @ElementName allowAgentDeviceInitiatedForward
     * @return bool|null
     */
    public function getAllowAgentDeviceInitiatedForward()
    {
        return $this->allowAgentDeviceInitiatedForward;
    }

    /**
     * Setter for allowAgentDeviceInitiatedForward
     *
     * @ElementName allowAgentDeviceInitiatedForward
     * @param bool|null $allowAgentDeviceInitiatedForward
     * @return $this
     */
    public function setAllowAgentDeviceInitiatedForward($allowAgentDeviceInitiatedForward)
    {
        $this->allowAgentDeviceInitiatedForward = $allowAgentDeviceInitiatedForward;
        return $this;
    }


}

