<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetDistributionListRequest
 *
 * Get a voice mail distribution list for a users voice message.
 *         The response is either UserVoiceMessagingUserGetDistributionListResponse
 * or ErrorResponse.
 */
class UserVoiceMessagingUserGetDistributionListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName listId
     * @var int|null
     */
    private $listId = null;

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

    /**
     * Getter for listId
     *
     * @ElementName listId
     * @return int|null
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Setter for listId
     *
     * @ElementName listId
     * @param int|null $listId
     * @return $this
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }


}

