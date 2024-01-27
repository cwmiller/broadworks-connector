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
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:160","type":"sequence"}]
 */
class UserAutomaticCollectCallGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:160
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

