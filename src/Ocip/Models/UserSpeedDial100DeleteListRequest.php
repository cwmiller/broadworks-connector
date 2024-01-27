<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100DeleteListRequest
 *
 * Delete one or more speed dial 100 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e084de202cf726c3202fca43390f9ec5:160","type":"sequence"}]
 */
class UserSpeedDial100DeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group e084de202cf726c3202fca43390f9ec5:160
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName speedCode
     * @Type int
     * @Array
     * @Optional
     * @Group e084de202cf726c3202fca43390f9ec5:160
     * @MinInclusive 0
     * @MaxInclusive 99
     * @var int[]
     */
    protected $speedCode = [
        
    ];

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
     * Getter for speedCode
     *
     * @return int[]
     */
    public function getSpeedCode()
    {
        return $this->speedCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->speedCode;
    }

    /**
     * Setter for speedCode
     *
     * @param int[] $speedCode
     * @return $this
     */
    public function setSpeedCode(array $speedCode)
    {
        $this->speedCode = $speedCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpeedCode()
    {
        $this->speedCode = null;
        return $this;
    }

    /**
     * Adder for speedCode
     *
     * @param int $speedCode
     * @return $this
     */
    public function addSpeedCode(int $speedCode)
    {
        $this->speedCode[] = $speedCode;
        return $this;
    }
}

