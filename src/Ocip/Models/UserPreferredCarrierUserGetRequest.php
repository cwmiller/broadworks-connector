<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierUserGetRequest
 *
 * Requests the currently configured preferred carriers for a user.
 *         The response is either a UserPreferredCarrierUserGetResponse or an ErrorResponse.
 *
 * @see UserPreferredCarrierUserGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"56f1bd27c6955cc11e0869b6463fb814:537","type":"sequence"}]
 */
class UserPreferredCarrierUserGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 56f1bd27c6955cc11e0869b6463fb814:537
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

