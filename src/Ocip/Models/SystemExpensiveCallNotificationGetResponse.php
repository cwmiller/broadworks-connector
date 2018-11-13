<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallNotificationGetResponse
 *
 * Response to SystemExpensiveCallNotificationGetRequest.
 *
 * @see SystemExpensiveCallNotificationGetRequest
 */
class SystemExpensiveCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enablePostAnnouncementDelayTimer
     * @Type bool
     * @var bool|null
     */
    private $enablePostAnnouncementDelayTimer = null;

    /**
     * @ElementName postAnnouncementDelaySeconds
     * @Type int
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

