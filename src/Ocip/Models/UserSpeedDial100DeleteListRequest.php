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
 */
class UserSpeedDial100DeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName speedCode
     * @var int[]
     */
    private $speedCode = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for speedCode
     *
     * @ElementName speedCode
     * @return int[]
     */
    public function getSpeedCode()
    {
        return $this->speedCode;
    }

    /**
     * Setter for speedCode
     *
     * @ElementName speedCode
     * @param int[] $speedCode
     * @return $this
     */
    public function setSpeedCode($speedCode)
    {
        $this->speedCode = $speedCode;
        return $this;
    }

    /**
     * Adder for speedCode
     *
     * @ElementName speedCode
     * @param int $speedCode
     * @return $this
     */
    public function addSpeedCode($speedCode)
    {
        $this->speedCode []= $speedCode;
        return $this;
    }


}

