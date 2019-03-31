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
 * @Groups [{"id":"e8188f390ad4fcfad616cb409dd0e896:167","type":"sequence"}]
 */
class UserAutomaticCallbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e8188f390ad4fcfad616cb409dd0e896:167
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

