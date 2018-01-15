<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListRequest14
 *
 * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service
 * provider, and group levels.
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse14
 * or
 *         ErrorResponse.
 * 		
 * 		Replaced by: GroupAccessDeviceGetAvailableDetailListRequest19.
 */
class GroupAccessDeviceGetAvailableDetailListRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName isMusicOnHold
     * @var bool|null
     */
    private $isMusicOnHold = null;

    /**
     * @ElementName onlyVideoCapable
     * @var bool|null
     */
    private $onlyVideoCapable = null;

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
     * Getter for isMusicOnHold
     *
     * @ElementName isMusicOnHold
     * @return bool|null
     */
    public function getIsMusicOnHold()
    {
        return $this->isMusicOnHold;
    }

    /**
     * Setter for isMusicOnHold
     *
     * @ElementName isMusicOnHold
     * @param bool|null $isMusicOnHold
     * @return $this
     */
    public function setIsMusicOnHold($isMusicOnHold)
    {
        $this->isMusicOnHold = $isMusicOnHold;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @ElementName onlyVideoCapable
     * @return bool|null
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @ElementName onlyVideoCapable
     * @param bool|null $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }


}

