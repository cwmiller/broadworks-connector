<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetResponse16sp2
 *
 * Response to the GroupCallParkGetRequest16sp2.
 *         Contains the settings that apply to the whole group for Call Park.
 *
 * @see GroupCallParkGetRequest16sp2
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:474","type":"sequence"}]
 */
class GroupCallParkGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    protected $recallTimerSeconds = null;

    /**
     * @ElementName displayTimerSeconds
     * @Type int
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @MinInclusive 2
     * @MaxInclusive 15
     * @var int|null
     */
    protected $displayTimerSeconds = null;

    /**
     * @ElementName enableDestinationAnnouncement
     * @Type bool
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @var bool|null
     */
    protected $enableDestinationAnnouncement = null;

    /**
     * @ElementName recallAlternateUserId
     * @Type string
     * @Optional
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $recallAlternateUserId = null;

    /**
     * @ElementName recallRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    protected $recallRingPattern = null;

    /**
     * @ElementName recallTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    protected $recallTo = null;

    /**
     * @ElementName alternateUserRecallTimerSeconds
     * @Type int
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:474
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    protected $alternateUserRecallTimerSeconds = null;

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

    /**
     * Getter for recallAlternateUserId
     *
     * @return string
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @param string $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $this->recallAlternateUserId = $recallAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallAlternateUserId()
    {
        $this->recallAlternateUserId = null;
        return $this;
    }

    /**
     * Getter for recallRingPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     */
    public function getRecallRingPattern()
    {
        return $this->recallRingPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallRingPattern;
    }

    /**
     * Setter for recallRingPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern $recallRingPattern
     * @return $this
     */
    public function setRecallRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $recallRingPattern)
    {
        $this->recallRingPattern = $recallRingPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallRingPattern()
    {
        $this->recallRingPattern = null;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo
     * @return $this
     */
    public function setRecallTo(\CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo $recallTo)
    {
        $this->recallTo = $recallTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallTo()
    {
        $this->recallTo = null;
        return $this;
    }

    /**
     * Getter for alternateUserRecallTimerSeconds
     *
     * @return int
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return $this->alternateUserRecallTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserRecallTimerSeconds;
    }

    /**
     * Setter for alternateUserRecallTimerSeconds
     *
     * @param int $alternateUserRecallTimerSeconds
     * @return $this
     */
    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds)
    {
        $this->alternateUserRecallTimerSeconds = $alternateUserRecallTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserRecallTimerSeconds()
    {
        $this->alternateUserRecallTimerSeconds = null;
        return $this;
    }
}

