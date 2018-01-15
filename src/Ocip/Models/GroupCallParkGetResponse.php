<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetResponse
 *
 * Response to the GroupCallParkGetRequest.
 *         Contains the settings that apply to the whole group for Call Park.
 */
class GroupCallParkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recallTimerSeconds
     * @var int|null
     */
    private $recallTimerSeconds = null;

    /**
     * @ElementName displayTimerSeconds
     * @var int|null
     */
    private $displayTimerSeconds = null;

    /**
     * @ElementName enableDestinationAnnouncement
     * @var bool|null
     */
    private $enableDestinationAnnouncement = null;

    /**
     * Getter for recallTimerSeconds
     *
     * @ElementName recallTimerSeconds
     * @return int|null
     */
    public function getRecallTimerSeconds()
    {
        return $this->recallTimerSeconds;
    }

    /**
     * Setter for recallTimerSeconds
     *
     * @ElementName recallTimerSeconds
     * @param int|null $recallTimerSeconds
     * @return $this
     */
    public function setRecallTimerSeconds($recallTimerSeconds)
    {
        $this->recallTimerSeconds = $recallTimerSeconds;
        return $this;
    }

    /**
     * Getter for displayTimerSeconds
     *
     * @ElementName displayTimerSeconds
     * @return int|null
     */
    public function getDisplayTimerSeconds()
    {
        return $this->displayTimerSeconds;
    }

    /**
     * Setter for displayTimerSeconds
     *
     * @ElementName displayTimerSeconds
     * @param int|null $displayTimerSeconds
     * @return $this
     */
    public function setDisplayTimerSeconds($displayTimerSeconds)
    {
        $this->displayTimerSeconds = $displayTimerSeconds;
        return $this;
    }

    /**
     * Getter for enableDestinationAnnouncement
     *
     * @ElementName enableDestinationAnnouncement
     * @return bool|null
     */
    public function getEnableDestinationAnnouncement()
    {
        return $this->enableDestinationAnnouncement;
    }

    /**
     * Setter for enableDestinationAnnouncement
     *
     * @ElementName enableDestinationAnnouncement
     * @param bool|null $enableDestinationAnnouncement
     * @return $this
     */
    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement)
    {
        $this->enableDestinationAnnouncement = $enableDestinationAnnouncement;
        return $this;
    }


}

