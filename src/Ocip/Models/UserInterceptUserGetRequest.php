<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetRequest
 *
 * Get the user's intercept user service settings.
 *         The response is either a UserInterceptUserGetResponse or an ErrorResponse.
 *         Replaced By: UserInterceptUserGetRequest16
 *
 * @see UserInterceptUserGetResponse
 * @see ErrorResponse
 * @see UserInterceptUserGetRequest16
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:36126","type":"sequence"}]
 */
class UserInterceptUserGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:36126
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

