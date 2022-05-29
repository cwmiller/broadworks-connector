<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationModifyRequest
 *
 * Modify an application from the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13505","type":"sequence"}]
 */
class SystemOCICallControlApplicationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $applicationId = null;

    /**
     * @ElementName enableSystemWide
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @var bool|null
     */
    protected $enableSystemWide = null;

    /**
     * @ElementName notificationTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    protected $notificationTimeoutSeconds = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName maxEventChannelsPerSet
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxEventChannelsPerSet = null;

    /**
     * @ElementName unresponsiveChannelSetGracePeriodSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13505
     * @MinInclusive 0
     * @MaxInclusive 30
     * @var int|null
     */
    protected $unresponsiveChannelSetGracePeriodSeconds = null;

    /**
     * Getter for applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Getter for enableSystemWide
     *
     * @return bool
     */
    public function getEnableSystemWide()
    {
        return $this->enableSystemWide instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSystemWide;
    }

    /**
     * Setter for enableSystemWide
     *
     * @param bool $enableSystemWide
     * @return $this
     */
    public function setEnableSystemWide($enableSystemWide)
    {
        $this->enableSystemWide = $enableSystemWide;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSystemWide()
    {
        $this->enableSystemWide = null;
        return $this;
    }

    /**
     * Getter for notificationTimeoutSeconds
     *
     * @return int
     */
    public function getNotificationTimeoutSeconds()
    {
        return $this->notificationTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationTimeoutSeconds;
    }

    /**
     * Setter for notificationTimeoutSeconds
     *
     * @param int $notificationTimeoutSeconds
     * @return $this
     */
    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds)
    {
        $this->notificationTimeoutSeconds = $notificationTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotificationTimeoutSeconds()
    {
        $this->notificationTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for maxEventChannelsPerSet
     *
     * @return int
     */
    public function getMaxEventChannelsPerSet()
    {
        return $this->maxEventChannelsPerSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxEventChannelsPerSet;
    }

    /**
     * Setter for maxEventChannelsPerSet
     *
     * @param int $maxEventChannelsPerSet
     * @return $this
     */
    public function setMaxEventChannelsPerSet($maxEventChannelsPerSet)
    {
        $this->maxEventChannelsPerSet = $maxEventChannelsPerSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxEventChannelsPerSet()
    {
        $this->maxEventChannelsPerSet = null;
        return $this;
    }

    /**
     * Getter for unresponsiveChannelSetGracePeriodSeconds
     *
     * @return int
     */
    public function getUnresponsiveChannelSetGracePeriodSeconds()
    {
        return $this->unresponsiveChannelSetGracePeriodSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unresponsiveChannelSetGracePeriodSeconds;
    }

    /**
     * Setter for unresponsiveChannelSetGracePeriodSeconds
     *
     * @param int $unresponsiveChannelSetGracePeriodSeconds
     * @return $this
     */
    public function setUnresponsiveChannelSetGracePeriodSeconds($unresponsiveChannelSetGracePeriodSeconds)
    {
        $this->unresponsiveChannelSetGracePeriodSeconds = $unresponsiveChannelSetGracePeriodSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnresponsiveChannelSetGracePeriodSeconds()
    {
        $this->unresponsiveChannelSetGracePeriodSeconds = null;
        return $this;
    }


}

