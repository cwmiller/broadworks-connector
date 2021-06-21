<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallNotificationModifyRequest
 *
 * Modify the expensive call notification service parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9831","type":"sequence"}]
 */
class SystemExpensiveCallNotificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enablePostAnnouncementDelayTimer
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9831
     * @var bool|null
     */
    private $enablePostAnnouncementDelayTimer = null;

    /**
     * @ElementName postAnnouncementDelaySeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9831
     * @MinInclusive 0
     * @MaxInclusive 20
     * @var int|null
     */
    private $postAnnouncementDelaySeconds = null;

    /**
     * Getter for enablePostAnnouncementDelayTimer
     *
     * @return bool
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return $this->enablePostAnnouncementDelayTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePostAnnouncementDelayTimer;
    }

    /**
     * Setter for enablePostAnnouncementDelayTimer
     *
     * @param bool $enablePostAnnouncementDelayTimer
     * @return $this
     */
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer)
    {
        $this->enablePostAnnouncementDelayTimer = $enablePostAnnouncementDelayTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePostAnnouncementDelayTimer()
    {
        $this->enablePostAnnouncementDelayTimer = null;
        return $this;
    }

    /**
     * Getter for postAnnouncementDelaySeconds
     *
     * @return int
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return $this->postAnnouncementDelaySeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->postAnnouncementDelaySeconds;
    }

    /**
     * Setter for postAnnouncementDelaySeconds
     *
     * @param int $postAnnouncementDelaySeconds
     * @return $this
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds)
    {
        $this->postAnnouncementDelaySeconds = $postAnnouncementDelaySeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPostAnnouncementDelaySeconds()
    {
        $this->postAnnouncementDelaySeconds = null;
        return $this;
    }


}

