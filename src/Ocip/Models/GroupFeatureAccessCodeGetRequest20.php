<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeGetRequest20
 *
 * Get group FAC code level and the list of feature access codes for a group.
 *                 The response is either a GroupFeatureAccessCodeGetResponse20 or an
 *                 ErrorResponse.
 *                 Returned Feature Access Codes may be group specific, or Service Provider
 *                 Feature Access Codes, depending on FAC code level.
 *                 In release 20 the "Call Recording" FAC name is changed to
 *                 "Call Recording - Start".
 *                 Replaced by: GroupFeatureAccessCodeGetRequest21
 *
 * @see GroupFeatureAccessCodeGetResponse20
 * @see ErrorResponse
 * @see GroupFeatureAccessCodeGetRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:33267","type":"sequence"}]
 */
class GroupFeatureAccessCodeGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33267
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33267
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

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


}

