<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticCallbackGetRequest
 *
 * Request the user level data associated with Automatic Callback.
 *         The response is either a UserAutomaticCallbackGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAutomaticCallbackGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"531ef68c70e2768c02c1d0afcfe979ab:167","type":"sequence"}]
 */
class UserAutomaticCallbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 531ef68c70e2768c02c1d0afcfe979ab:167
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

