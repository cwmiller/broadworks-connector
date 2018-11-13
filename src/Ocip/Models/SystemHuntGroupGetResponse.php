<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHuntGroupGetResponse
 *
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse17
 *
 * @see SystemHuntGroupGetRequest
 * @see SystemHuntGroupGetResponse17
 */
class SystemHuntGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName anonymousInsteadOfPrivateCLID
     * @Type bool
     * @var bool|null
     */
    private $anonymousInsteadOfPrivateCLID = null;

    /**
     * @ElementName removeHuntGroupNameFromCLID
     * @Type bool
     * @var bool|null
     */
    private $removeHuntGroupNameFromCLID = null;

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


}

