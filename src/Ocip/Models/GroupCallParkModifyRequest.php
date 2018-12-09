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
 * @Groups [{"id":"bcea7a1f459e3e037da541b681a13f82:302","type":"sequence"}]
 */
class GroupCallParkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName recallTimerSeconds
     * @Type int
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var int|null
     */
    private $recallTimerSeconds = null;

    /**
     * @ElementName displayTimerSeconds
     * @Type int
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var int|null
     */
    private $displayTimerSeconds = null;

    /**
     * @ElementName enableDestinationAnnouncement
     * @Type bool
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var bool|null
     */
    private $enableDestinationAnnouncement = null;

    /**
     * @ElementName recallAlternateUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recallAlternateUserId = null;

    /**
     * @ElementName recallRingPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    private $recallRingPattern = null;

    /**
     * @ElementName recallTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallParkRecallTo|null
     */
    private $recallTo = null;

    /**
     * @ElementName alternateUserRecallTimerSeconds
     * @Type int
     * @Optional
     * @Group bcea7a1f459e3e037da541b681a13f82:302
     * @var int|null
     */
    private $alternateUserRecallTimerSeconds = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallAlternateUserId;
    }

    /**
     * Setter for recallAlternateUserId
     *
     * @param string|null $recallAlternateUserId
     * @return $this
     */
    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        if ($recallAlternateUserId === null) {
            $this->recallAlternateUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recallAlternateUserId = $recallAlternateUserId;
        }
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

