<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerGetHomeZoneRequest
 *
 * Get a home zone from the BroadWorks Mobile Manager.
 *         The response is either GroupBroadWorksMobileManagerGetHomeZoneResponse
 * or ErrorResponse.
 *
 * @see GroupBroadWorksMobileManagerGetHomeZoneResponse
 * @see ErrorResponse
 */
class GroupBroadWorksMobileManagerGetHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneId
     * @var string|null
     */
    private $homeZoneId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @ElementName homeZoneId
     * @return string|null
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string|null $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }


}

