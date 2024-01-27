<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallNotificationGetResponse
 *
 * Response to SystemExpensiveCallNotificationGetRequest.
 *
 * @see SystemExpensiveCallNotificationGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9929","type":"sequence"}]
 */
class SystemExpensiveCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enablePostAnnouncementDelayTimer
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9929
     * @var bool|null
     */
    protected $enablePostAnnouncementDelayTimer = null;

    /**
     * @ElementName postAnnouncementDelaySeconds
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:9929
     * @MinInclusive 0
     * @MaxInclusive 20
     * @var int|null
     */
    protected $postAnnouncementDelaySeconds = null;

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

