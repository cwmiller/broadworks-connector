<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestModifyRequest
 *
 * Modify the user level data associated with Hoteling Guest.
 *         There is no provisioning error will be given when setting hostUserId to not nil value while Hoteling Guest feature is not active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by UserHotelingGuestModifyRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserHotelingGuestModifyRequest21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18227","type":"sequence"}]
 */
class UserHotelingGuestModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:18227
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:18227
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName enableAssociationLimit
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:18227
     * @var bool|null
     */
    protected $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:18227
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $associationLimitHours = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:18227
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hostUserId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for enableAssociationLimit
     *
     * @return bool
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAssociationLimit;
    }

    /**
     * Setter for enableAssociationLimit
     *
     * @param bool $enableAssociationLimit
     * @return $this
     */
    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $this->enableAssociationLimit = $enableAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAssociationLimit()
    {
        $this->enableAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @return int
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @param int $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociationLimitHours()
    {
        $this->associationLimitHours = null;
        return $this;
    }

    /**
     * Getter for hostUserId
     *
     * @return string|null
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string|null $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId = null)
    {
        if ($hostUserId === null) {
            $this->hostUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hostUserId = $hostUserId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserId()
    {
        $this->hostUserId = null;
        return $this;
    }
}

