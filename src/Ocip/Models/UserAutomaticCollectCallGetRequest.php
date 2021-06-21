<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticCollectCallGetRequest
 *
 * Get user Automatic Collect Call service settings.
 *         The response is either UserAutomaticCollectCallGetResponse or ErrorResponse.
 *
 * @see UserAutomaticCollectCallGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:160","type":"sequence"}]
 */
class UserAutomaticCollectCallGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group af1b47d7cab3335a81456e64e42371b0:160
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

