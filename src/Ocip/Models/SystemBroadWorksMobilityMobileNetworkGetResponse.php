<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetResponse
 *
 * The response to a SystemBroadWorksMobilityMobileNetworkGetRequest.
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1154","type":"sequence"}]
 */
class SystemBroadWorksMobilityMobileNetworkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scfSignalingNetAddress
     * @Type string
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $scfSignalingNetAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @Type int
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $scfSignalingPort = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @Type int
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinInclusive 10
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @Type int
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinInclusive 100
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @Type bool
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @var bool|null
     */
    protected $enableAnnouncementSuppression = null;

    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1154
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceAccessCodeListName = null;

    /**
     * Getter for scfSignalingNetAddress
     *
     * @return string
     */
    public function getScfSignalingNetAddress()
    {
        return $this->scfSignalingNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingNetAddress;
    }

    /**
     * Setter for scfSignalingNetAddress
     *
     * @param string $scfSignalingNetAddress
     * @return $this
     */
    public function setScfSignalingNetAddress($scfSignalingNetAddress)
    {
        $this->scfSignalingNetAddress = $scfSignalingNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfSignalingNetAddress()
    {
        $this->scfSignalingNetAddress = null;
        return $this;
    }

    /**
     * Getter for scfSignalingPort
     *
     * @return int
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @param int $scfSignalingPort
     * @return $this
     */
    public function setScfSignalingPort($scfSignalingPort)
    {
        $this->scfSignalingPort = $scfSignalingPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfSignalingPort()
    {
        $this->scfSignalingPort = null;
        return $this;
    }

    /**
     * Getter for refreshPeriodSeconds
     *
     * @return int
     */
    public function getRefreshPeriodSeconds()
    {
        return $this->refreshPeriodSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->refreshPeriodSeconds;
    }

    /**
     * Setter for refreshPeriodSeconds
     *
     * @param int $refreshPeriodSeconds
     * @return $this
     */
    public function setRefreshPeriodSeconds($refreshPeriodSeconds)
    {
        $this->refreshPeriodSeconds = $refreshPeriodSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRefreshPeriodSeconds()
    {
        $this->refreshPeriodSeconds = null;
        return $this;
    }

    /**
     * Getter for maxConsecutiveFailures
     *
     * @return int
     */
    public function getMaxConsecutiveFailures()
    {
        return $this->maxConsecutiveFailures instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConsecutiveFailures;
    }

    /**
     * Setter for maxConsecutiveFailures
     *
     * @param int $maxConsecutiveFailures
     * @return $this
     */
    public function setMaxConsecutiveFailures($maxConsecutiveFailures)
    {
        $this->maxConsecutiveFailures = $maxConsecutiveFailures;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConsecutiveFailures()
    {
        $this->maxConsecutiveFailures = null;
        return $this;
    }

    /**
     * Getter for maxResponseWaitTimeMilliseconds
     *
     * @return int
     */
    public function getMaxResponseWaitTimeMilliseconds()
    {
        return $this->maxResponseWaitTimeMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxResponseWaitTimeMilliseconds;
    }

    /**
     * Setter for maxResponseWaitTimeMilliseconds
     *
     * @param int $maxResponseWaitTimeMilliseconds
     * @return $this
     */
    public function setMaxResponseWaitTimeMilliseconds($maxResponseWaitTimeMilliseconds)
    {
        $this->maxResponseWaitTimeMilliseconds = $maxResponseWaitTimeMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxResponseWaitTimeMilliseconds()
    {
        $this->maxResponseWaitTimeMilliseconds = null;
        return $this;
    }

    /**
     * Getter for enableAnnouncementSuppression
     *
     * @return bool
     */
    public function getEnableAnnouncementSuppression()
    {
        return $this->enableAnnouncementSuppression instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAnnouncementSuppression;
    }

    /**
     * Setter for enableAnnouncementSuppression
     *
     * @param bool $enableAnnouncementSuppression
     * @return $this
     */
    public function setEnableAnnouncementSuppression($enableAnnouncementSuppression)
    {
        $this->enableAnnouncementSuppression = $enableAnnouncementSuppression;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAnnouncementSuppression()
    {
        $this->enableAnnouncementSuppression = null;
        return $this;
    }

    /**
     * Getter for serviceAccessCodeListName
     *
     * @return string
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @param string $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccessCodeListName()
    {
        $this->serviceAccessCodeListName = null;
        return $this;
    }
}

