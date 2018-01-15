<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupModifyRequest
 *
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 *         Replaced by SystemHuntGroupModifyRequest21
 */
class SystemHuntGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName anonymousInsteadOfPrivateCLID
     * @var bool|null
     */
    private $anonymousInsteadOfPrivateCLID = null;

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
     * Getter for anonymousInsteadOfPrivateCLID
     *
     * @ElementName anonymousInsteadOfPrivateCLID
     * @return bool|null
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return $this->anonymousInsteadOfPrivateCLID;
    }

    /**
     * Setter for anonymousInsteadOfPrivateCLID
     *
     * @ElementName anonymousInsteadOfPrivateCLID
     * @param bool|null $anonymousInsteadOfPrivateCLID
     * @return $this
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID)
    {
        $this->anonymousInsteadOfPrivateCLID = $anonymousInsteadOfPrivateCLID;
        return $this;
    }

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


}

