<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDoNotDisturbModifyRequest
 *
 * Modify the user level data associated with Do Not Disturb.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         The following element is only used in AS data mode and ignored in XS data mode: isDoNotDisturbSync
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f424ffe4eea042849235863d758363ec:76","type":"sequence"}]
 */
class UserDoNotDisturbModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group f424ffe4eea042849235863d758363ec:76
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group f424ffe4eea042849235863d758363ec:76
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName ringSplash
     * @Type bool
     * @Optional
     * @Group f424ffe4eea042849235863d758363ec:76
     * @var bool|null
     */
    protected $ringSplash = null;

    /**
     * @ElementName isDoNotDisturbSync
     * @Type bool
     * @Optional
     * @Group f424ffe4eea042849235863d758363ec:76
     * @var bool|null
     */
    protected $isDoNotDisturbSync = null;

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
     * Getter for ringSplash
     *
     * @return bool
     */
    public function getRingSplash()
    {
        return $this->ringSplash instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringSplash;
    }

    /**
     * Setter for ringSplash
     *
     * @param bool $ringSplash
     * @return $this
     */
    public function setRingSplash($ringSplash)
    {
        $this->ringSplash = $ringSplash;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingSplash()
    {
        $this->ringSplash = null;
        return $this;
    }

    /**
     * Getter for isDoNotDisturbSync
     *
     * @return bool
     */
    public function getIsDoNotDisturbSync()
    {
        return $this->isDoNotDisturbSync instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isDoNotDisturbSync;
    }

    /**
     * Setter for isDoNotDisturbSync
     *
     * @param bool $isDoNotDisturbSync
     * @return $this
     */
    public function setIsDoNotDisturbSync($isDoNotDisturbSync)
    {
        $this->isDoNotDisturbSync = $isDoNotDisturbSync;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsDoNotDisturbSync()
    {
        $this->isDoNotDisturbSync = null;
        return $this;
    }
}

