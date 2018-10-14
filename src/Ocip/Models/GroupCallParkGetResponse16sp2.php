<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetResponse16sp2
 *
 * Response to the GroupCallParkGetRequest16sp2.
 *         Contains the settings that apply to the whole group for Call Park.
 *
 * @see GroupCallParkGetRequest16sp2
 */
class GroupCallParkGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName recallAlternateUserId
     * @var string|null
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallRingPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $recallRingPattern = null;

    /**
     * @ElementName recallTo
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    private $recallTo = null;

    /**
     * @ElementName alternateUserRecallTimerSeconds
     * @var int|null
     */
    private $alternateUserRecallTimerSeconds = null;

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

    /**
     * Getter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @return string|null
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @param string|null $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * Getter for recallRingPattern
     *
     * @ElementName recallRingPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    public function getRecallRingPattern()
    {
        return $this->recallRingPattern;
    }

    /**
     * Setter for recallRingPattern
     *
     * @ElementName recallRingPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null $recallRingPattern
     * @return $this
     */
    public function setRecallRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $recallRingPattern)
    {
        $this->recallRingPattern = $recallRingPattern;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @ElementName recallTo
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    public function getRecallTo()
    {
        return $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @ElementName recallTo
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }

    /**
     * Getter for alternateUserRecallTimerSeconds
     *
     * @ElementName alternateUserRecallTimerSeconds
     * @return int|null
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return $this->alternateUserRecallTimerSeconds;
    }

    /**
     * Setter for alternateUserRecallTimerSeconds
     *
     * @ElementName alternateUserRecallTimerSeconds
     * @param int|null $alternateUserRecallTimerSeconds
     * @return $this
     */
    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds)
    {
        $this->alternateUserRecallTimerSeconds = $alternateUserRecallTimerSeconds;
        return $this;
    }


}

