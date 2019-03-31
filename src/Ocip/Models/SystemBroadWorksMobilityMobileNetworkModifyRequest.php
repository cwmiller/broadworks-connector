<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkModifyRequest
 *
 * Modify a Mobile Network.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:932","type":"sequence"}]
 */
class SystemBroadWorksMobilityMobileNetworkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName scfSignalingNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfSignalingNetAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfSignalingPort = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @Type int
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinInclusive 10
     * @MaxInclusive 1800
     * @var int|null
     */
    private $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @Type int
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinInclusive 100
     * @MaxInclusive 10000
     * @var int|null
     */
    private $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @var bool|null
     */
    private $enableAnnouncementSuppression = null;

    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:932
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceAccessCodeListName = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for scfSignalingNetAddress
     *
     * @return string|null
     */
    public function getScfSignalingNetAddress()
    {
        return $this->scfSignalingNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingNetAddress;
    }

    /**
     * Setter for scfSignalingNetAddress
     *
     * @param string|null $scfSignalingNetAddress
     * @return $this
     */
    public function setScfSignalingNetAddress($scfSignalingNetAddress = null)
    {
        if ($scfSignalingNetAddress === null) {
            $this->scfSignalingNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfSignalingNetAddress = $scfSignalingNetAddress;
        }
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
     * @return int|null
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @param int|null $scfSignalingPort
     * @return $this
     */
    public function setScfSignalingPort($scfSignalingPort = null)
    {
        if ($scfSignalingPort === null) {
            $this->scfSignalingPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfSignalingPort = $scfSignalingPort;
        }
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
     * @return string|null
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @param string|null $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName = null)
    {
        if ($serviceAccessCodeListName === null) {
            $this->serviceAccessCodeListName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        }
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

