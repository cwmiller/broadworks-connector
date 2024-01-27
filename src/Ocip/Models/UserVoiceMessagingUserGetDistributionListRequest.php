<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetDistributionListRequest
 *
 * Get a voice mail distribution list for a users voice message.
 *         The response is either UserVoiceMessagingUserGetDistributionListResponse or ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetDistributionListResponse
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1772","type":"sequence"}]
 */
class UserVoiceMessagingUserGetDistributionListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1772
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName listId
     * @Type int
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1772
     * @MinInclusive 0
     * @MaxInclusive 14
     * @var int|null
     */
    protected $listId = null;

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

    /**
     * Getter for listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listId;
    }

    /**
     * Setter for listId
     *
     * @param int $listId
     * @return $this
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListId()
    {
        $this->listId = null;
        return $this;
    }
}

