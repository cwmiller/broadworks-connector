<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListRequest14
 *
 * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service provider, and group levels.
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse14 or
 *         ErrorResponse.
 *     
 *         Replaced by: GroupAccessDeviceGetAvailableDetailListRequest19.
 *
 * @see GroupAccessDeviceGetAvailableDetailListResponse14
 * @see ErrorResponse
 * @see GroupAccessDeviceGetAvailableDetailListRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2999","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableDetailListRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2999
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2999
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isMusicOnHold
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2999
     * @var bool|null
     */
    private $isMusicOnHold = null;

    /**
     * @ElementName onlyVideoCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2999
     * @var bool|null
     */
    private $onlyVideoCapable = null;

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
     * Getter for isMusicOnHold
     *
     * @return bool
     */
    public function getIsMusicOnHold()
    {
        return $this->isMusicOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMusicOnHold;
    }

    /**
     * Setter for isMusicOnHold
     *
     * @param bool $isMusicOnHold
     * @return $this
     */
    public function setIsMusicOnHold($isMusicOnHold)
    {
        $this->isMusicOnHold = $isMusicOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMusicOnHold()
    {
        $this->isMusicOnHold = null;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @return bool
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @param bool $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyVideoCapable()
    {
        $this->onlyVideoCapable = null;
        return $this;
    }


}

