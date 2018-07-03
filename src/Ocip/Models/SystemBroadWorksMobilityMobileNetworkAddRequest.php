<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkAddRequest
 *
 * Add a Mobile Network.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityMobileNetworkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName scfSignalingNetAddress
     * @var string|null
     */
    private $scfSignalingNetAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @var int|null
     */
    private $scfSignalingPort = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @var int|null
     */
    private $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @var int|null
     */
    private $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @var int|null
     */
    private $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @var bool|null
     */
    private $enableAnnouncementSuppression = null;

    /**
     * @ElementName serviceAccessCodeListName
     * @var string|null
     */
    private $serviceAccessCodeListName = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for scfSignalingNetAddress
     *
     * @ElementName scfSignalingNetAddress
     * @return string|null
     */
    public function getScfSignalingNetAddress()
    {
        return $this->scfSignalingNetAddress;
    }

    /**
     * Setter for scfSignalingNetAddress
     *
     * @ElementName scfSignalingNetAddress
     * @param string|null $scfSignalingNetAddress
     * @return $this
     */
    public function setScfSignalingNetAddress($scfSignalingNetAddress)
    {
        $this->scfSignalingNetAddress = $scfSignalingNetAddress;
        return $this;
    }

    /**
     * Getter for scfSignalingPort
     *
     * @ElementName scfSignalingPort
     * @return int|null
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @ElementName scfSignalingPort
     * @param int|null $scfSignalingPort
     * @return $this
     */
    public function setScfSignalingPort($scfSignalingPort)
    {
        $this->scfSignalingPort = $scfSignalingPort;
        return $this;
    }

    /**
     * Getter for refreshPeriodSeconds
     *
     * @ElementName refreshPeriodSeconds
     * @return int|null
     */
    public function getRefreshPeriodSeconds()
    {
        return $this->refreshPeriodSeconds;
    }

    /**
     * Setter for refreshPeriodSeconds
     *
     * @ElementName refreshPeriodSeconds
     * @param int|null $refreshPeriodSeconds
     * @return $this
     */
    public function setRefreshPeriodSeconds($refreshPeriodSeconds)
    {
        $this->refreshPeriodSeconds = $refreshPeriodSeconds;
        return $this;
    }

    /**
     * Getter for maxConsecutiveFailures
     *
     * @ElementName maxConsecutiveFailures
     * @return int|null
     */
    public function getMaxConsecutiveFailures()
    {
        return $this->maxConsecutiveFailures;
    }

    /**
     * Setter for maxConsecutiveFailures
     *
     * @ElementName maxConsecutiveFailures
     * @param int|null $maxConsecutiveFailures
     * @return $this
     */
    public function setMaxConsecutiveFailures($maxConsecutiveFailures)
    {
        $this->maxConsecutiveFailures = $maxConsecutiveFailures;
        return $this;
    }

    /**
     * Getter for maxResponseWaitTimeMilliseconds
     *
     * @ElementName maxResponseWaitTimeMilliseconds
     * @return int|null
     */
    public function getMaxResponseWaitTimeMilliseconds()
    {
        return $this->maxResponseWaitTimeMilliseconds;
    }

    /**
     * Setter for maxResponseWaitTimeMilliseconds
     *
     * @ElementName maxResponseWaitTimeMilliseconds
     * @param int|null $maxResponseWaitTimeMilliseconds
     * @return $this
     */
    public function setMaxResponseWaitTimeMilliseconds($maxResponseWaitTimeMilliseconds)
    {
        $this->maxResponseWaitTimeMilliseconds = $maxResponseWaitTimeMilliseconds;
        return $this;
    }

    /**
     * Getter for enableAnnouncementSuppression
     *
     * @ElementName enableAnnouncementSuppression
     * @return bool|null
     */
    public function getEnableAnnouncementSuppression()
    {
        return $this->enableAnnouncementSuppression;
    }

    /**
     * Setter for enableAnnouncementSuppression
     *
     * @ElementName enableAnnouncementSuppression
     * @param bool|null $enableAnnouncementSuppression
     * @return $this
     */
    public function setEnableAnnouncementSuppression($enableAnnouncementSuppression)
    {
        $this->enableAnnouncementSuppression = $enableAnnouncementSuppression;
        return $this;
    }

    /**
     * Getter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @return string|null
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @param string|null $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }


}

