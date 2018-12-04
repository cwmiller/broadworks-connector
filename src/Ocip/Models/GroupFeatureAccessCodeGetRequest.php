<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeGetRequest
 *
 * Get group FAC code level and the list of feature access codes for a group.
 *         The response is either a GroupFeatureAccessCodeGetResponse or an ErrorResponse.
 *         Returned Feature Access Codes may be group specific, or Service Provider Feature Access Codes, depending on FAC code level.
 *         
 *         Replaced by: GroupFeatureAccessCodeGetRequest21 in AS data mode
 *
 * @see GroupFeatureAccessCodeGetResponse
 * @see ErrorResponse
 * @see GroupFeatureAccessCodeGetRequest21
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:1088","type":"sequence"}]
 */
class GroupFeatureAccessCodeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:1088
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:1088
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

