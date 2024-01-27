<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetRequest22V5
 *
 * Get the profile for a group.
 *         The response is either a GroupGetResponse22V5 or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           groupExternalId
 *
 * @see GroupGetResponse22V5
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5960","type":"sequence","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:5961","type":"choice","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:5962","type":"sequence"},{"id":"4b0e7857796c636464362260a2f8e5ee:5966","type":"sequence"}]}]}]
 */
class GroupGetRequest22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5962
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5962
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5966
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
        return $this;
    }
}

