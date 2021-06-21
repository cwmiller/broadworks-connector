<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetRequest19
 *
 * Get the user's Video Add-On service setting.
 *         The response is either a UserVideoAddOnGetResponse19 or an ErrorResponse.
 *         
 *         Replaced by: UserVideoAddOnGetRequest22.
 *
 * @see UserVideoAddOnGetResponse19
 * @see ErrorResponse
 * @see UserVideoAddOnGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46849","type":"sequence"}]
 */
class UserVideoAddOnGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46849
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

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


}

