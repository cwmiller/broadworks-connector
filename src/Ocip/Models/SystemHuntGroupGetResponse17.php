<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupGetResponse17
 *
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse21 in AS data mode
 *
 * @see SystemHuntGroupGetRequest
 * @see SystemHuntGroupGetResponse21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10418","type":"sequence"}]
 */
class SystemHuntGroupGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName anonymousInsteadOfPrivateCLID
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:10418
     * @var bool|null
     */
    protected $anonymousInsteadOfPrivateCLID = null;

    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:10418
     * @var bool|null
     */
    protected $removeHuntGroupNameFromCLID = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope
     * @Group 240b50f54d060859e5e275082fdf49f9:10418
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntGroupUniformCallDistributionPolicyScope|null
     */
    protected $uniformCallDistributionPolicyScope = null;

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

