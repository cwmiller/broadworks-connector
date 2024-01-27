<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetResponse
 *
 * Response to the GroupCallParkGetRequest.
 *         Contains the settings that apply to the whole group for Call Park.
 *
 * @see GroupCallParkGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:7589","type":"sequence"}]
 */
class GroupCallParkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:7589
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    protected $recallTimerSeconds = null;

    /**
     * @ElementName displayTimerSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:7589
     * @MinInclusive 2
     * @MaxInclusive 15
     * @var int|null
     */
    protected $displayTimerSeconds = null;

    /**
     * @ElementName enableDestinationAnnouncement
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:7589
     * @var bool|null
     */
    protected $enableDestinationAnnouncement = null;

    /**
     * Getter for recallTimerSeconds
     *
     * @return int
     */
    public function getRecallTimerSeconds()
    {
        return $this->recallTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTimerSeconds;
    }

    /**
     * Setter for recallTimerSeconds
     *
     * @param int $recallTimerSeconds
     * @return $this
     */
    public function setRecallTimerSeconds($recallTimerSeconds)
    {
        $this->recallTimerSeconds = $recallTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTimerSeconds()
    {
        $this->recallTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for displayTimerSeconds
     *
     * @return int
     */
    public function getDisplayTimerSeconds()
    {
        return $this->displayTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayTimerSeconds;
    }

    /**
     * Setter for displayTimerSeconds
     *
     * @param int $displayTimerSeconds
     * @return $this
     */
    public function setDisplayTimerSeconds($displayTimerSeconds)
    {
        $this->displayTimerSeconds = $displayTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayTimerSeconds()
    {
        $this->displayTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for enableDestinationAnnouncement
     *
     * @return bool
     */
    public function getEnableDestinationAnnouncement()
    {
        return $this->enableDestinationAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDestinationAnnouncement;
    }

    /**
     * Setter for enableDestinationAnnouncement
     *
     * @param bool $enableDestinationAnnouncement
     * @return $this
     */
    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement)
    {
        $this->enableDestinationAnnouncement = $enableDestinationAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDestinationAnnouncement()
    {
        $this->enableDestinationAnnouncement = null;
        return $this;
    }
}

