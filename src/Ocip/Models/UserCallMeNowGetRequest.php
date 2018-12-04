<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallMeNowGetRequest
 *
 * Get the user's call me now service setting.
 *         The response is either a UserCallMeNowGetResponse or an ErrorResponse.
 *
 * @see UserCallMeNowGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b461d8be4f7bfba1e05db8efbd896b6:167","type":"sequence"}]
 */
class UserCallMeNowGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4b461d8be4f7bfba1e05db8efbd896b6:167
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

