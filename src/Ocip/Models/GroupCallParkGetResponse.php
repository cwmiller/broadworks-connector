<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetResponse
 *
 * Response to the GroupCallParkGetRequest.
 *         Contains the settings that apply to the whole group for Call Park.
 *
 * @see GroupCallParkGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7456","type":"sequence"}]
 */
class GroupCallParkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7456
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    private $recallTimerSeconds = null;

    /**
     * @ElementName displayTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7456
     * @MinInclusive 2
     * @MaxInclusive 15
     * @var int|null
     */
    private $displayTimerSeconds = null;

    /**
     * @ElementName enableDestinationAnnouncement
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7456
     * @var bool|null
     */
    private $enableDestinationAnnouncement = null;

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

