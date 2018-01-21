<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationAddRequest17
 *
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: SystemOCICallControlApplicationAddRequest22
 */
class SystemOCICallControlApplicationAddRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName enableSystemWide
     * @var bool|null
     */
    private $enableSystemWide = null;

    /**
     * @ElementName notificationTimeoutSeconds
     * @var int|null
     */
    private $notificationTimeoutSeconds = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName maxEventChannelsPerSet
     * @var int|null
     */
    private $maxEventChannelsPerSet = null;

    /**
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string|null $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Getter for enableSystemWide
     *
     * @ElementName enableSystemWide
     * @return bool|null
     */
    public function getEnableSystemWide()
    {
        return $this->enableSystemWide;
    }

    /**
     * Setter for enableSystemWide
     *
     * @ElementName enableSystemWide
     * @param bool|null $enableSystemWide
     * @return $this
     */
    public function setEnableSystemWide($enableSystemWide)
    {
        $this->enableSystemWide = $enableSystemWide;
        return $this;
    }

    /**
     * Getter for notificationTimeoutSeconds
     *
     * @ElementName notificationTimeoutSeconds
     * @return int|null
     */
    public function getNotificationTimeoutSeconds()
    {
        return $this->notificationTimeoutSeconds;
    }

    /**
     * Setter for notificationTimeoutSeconds
     *
     * @ElementName notificationTimeoutSeconds
     * @param int|null $notificationTimeoutSeconds
     * @return $this
     */
    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds)
    {
        $this->notificationTimeoutSeconds = $notificationTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for maxEventChannelsPerSet
     *
     * @ElementName maxEventChannelsPerSet
     * @return int|null
     */
    public function getMaxEventChannelsPerSet()
    {
        return $this->maxEventChannelsPerSet;
    }

    /**
     * Setter for maxEventChannelsPerSet
     *
     * @ElementName maxEventChannelsPerSet
     * @param int|null $maxEventChannelsPerSet
     * @return $this
     */
    public function setMaxEventChannelsPerSet($maxEventChannelsPerSet)
    {
        $this->maxEventChannelsPerSet = $maxEventChannelsPerSet;
        return $this;
    }


}

