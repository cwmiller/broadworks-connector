<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetRequest22
 *
 * Get the profile for a group.
 *         The response is either a GroupGetResponse22 or an ErrorResponse.
 *         
 *         Replaced by GroupGetRequest22V2 in AS data mode.
 *
 * @see GroupGetResponse22
 * @see ErrorResponse
 * @see GroupGetRequest22V2
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:296","type":"sequence"}]
 */
class GroupGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:296
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:296
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

