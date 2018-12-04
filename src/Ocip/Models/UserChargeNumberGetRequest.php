<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetRequest
 *
 * Request the user level data associated with Charge Number.
 *         The response is either a UserChargeNumberGetResponse or an ErrorResponse.
 *
 * @see UserChargeNumberGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:34022","type":"sequence"}]
 */
class UserChargeNumberGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:34022
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

