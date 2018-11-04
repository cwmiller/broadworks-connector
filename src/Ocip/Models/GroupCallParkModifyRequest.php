<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkModifyRequest
 *
 * Modifies the Group's Call Park settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallParkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallRingPattern
     * @var string|null
     */
    private $recallRingPattern = null;

    /**
     * @ElementName recallTo
     * @var string|null
     */
    private $recallTo = null;

    /**
     * @ElementName alternateUserRecallTimerSeconds
     * @var int|null
     */
    private $alternateUserRecallTimerSeconds = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @ElementName recallAlternateUserId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $recallAlternateUserId
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
     * @return string|null
     */
    public function getRecallRingPattern()
    {
        return $this->recallRingPattern;
    }

    /**
     * Setter for recallRingPattern
     *
     * @ElementName recallRingPattern
     * @param string|null $recallRingPattern
     * @return $this
     */
    public function setRecallRingPattern($recallRingPattern)
    {
        $this->recallRingPattern = $recallRingPattern;
        return $this;
    }

    /**
     * Getter for recallTo
     *
     * @ElementName recallTo
     * @return string|null
     */
    public function getRecallTo()
    {
        return $this->recallTo;
    }

    /**
     * Setter for recallTo
     *
     * @ElementName recallTo
     * @param string|null $recallTo
     * @return $this
     */
    public function setRecallTo($recallTo)
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

