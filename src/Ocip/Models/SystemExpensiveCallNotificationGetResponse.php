<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallNotificationGetResponse
 *
 * Response to SystemExpensiveCallNotificationGetRequest.
 */
class SystemExpensiveCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enablePostAnnouncementDelayTimer
     * @var bool|null
     */
    private $enablePostAnnouncementDelayTimer = null;

    /**
     * @ElementName postAnnouncementDelaySeconds
     * @var int|null
     */
    private $postAnnouncementDelaySeconds = null;

    /**
     * Getter for enablePostAnnouncementDelayTimer
     *
     * @ElementName enablePostAnnouncementDelayTimer
     * @return bool|null
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return $this->enablePostAnnouncementDelayTimer;
    }

    /**
     * Setter for enablePostAnnouncementDelayTimer
     *
     * @ElementName enablePostAnnouncementDelayTimer
     * @param bool|null $enablePostAnnouncementDelayTimer
     * @return $this
     */
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer)
    {
        $this->enablePostAnnouncementDelayTimer = $enablePostAnnouncementDelayTimer;
        return $this;
    }

    /**
     * Getter for postAnnouncementDelaySeconds
     *
     * @ElementName postAnnouncementDelaySeconds
     * @return int|null
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return $this->postAnnouncementDelaySeconds;
    }

    /**
     * Setter for postAnnouncementDelaySeconds
     *
     * @ElementName postAnnouncementDelaySeconds
     * @param int|null $postAnnouncementDelaySeconds
     * @return $this
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds)
    {
        $this->postAnnouncementDelaySeconds = $postAnnouncementDelaySeconds;
        return $this;
    }


}

