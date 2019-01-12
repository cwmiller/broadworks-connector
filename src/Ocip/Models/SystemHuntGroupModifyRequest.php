<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupModifyRequest
 *
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemHuntGroupModifyRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemHuntGroupModifyRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3078","type":"sequence"}]
 */
class SystemHuntGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName anonymousInsteadOfPrivateCLID
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3078
     * @var bool|null
     */
    private $anonymousInsteadOfPrivateCLID = null;

    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3078
     * @var bool|null
     */
    private $removeHuntGroupNameFromCLID = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3078
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope|null
     */
    private $uniformCallDistributionPolicyScope = null;

    /**
     * Getter for anonymousInsteadOfPrivateCLID
     *
     * @return bool
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return $this->anonymousInsteadOfPrivateCLID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->anonymousInsteadOfPrivateCLID;
    }

    /**
     * Setter for anonymousInsteadOfPrivateCLID
     *
     * @param bool $anonymousInsteadOfPrivateCLID
     * @return $this
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID)
    {
        $this->anonymousInsteadOfPrivateCLID = $anonymousInsteadOfPrivateCLID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnonymousInsteadOfPrivateCLID()
    {
        $this->anonymousInsteadOfPrivateCLID = null;
        return $this;
    }

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


}

