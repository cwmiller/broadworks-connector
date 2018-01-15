<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntelligentNetworkServiceControlGetRequest
 *
 * Request the user level data associated with Intelligent Network Service Control.
 *         The response is either a UserIntelligentNetworkServiceControlGetResponse
 * or an
 *         ErrorResponse.
 */
class UserIntelligentNetworkServiceControlGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

