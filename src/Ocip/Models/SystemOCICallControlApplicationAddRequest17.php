<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationAddRequest17
 *
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: SystemOCICallControlApplicationAddRequest22
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemOCICallControlApplicationAddRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6316","type":"sequence"}]
 */
class SystemOCICallControlApplicationAddRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6316
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName enableSystemWide
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:6316
     * @var bool|null
     */
    private $enableSystemWide = null;

    /**
     * @ElementName notificationTimeoutSeconds
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:6316
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    private $notificationTimeoutSeconds = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:6316
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName maxEventChannelsPerSet
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:6316
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    private $maxEventChannelsPerSet = null;

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
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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


}

