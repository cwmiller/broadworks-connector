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
 */
class SystemBroadWorksMobilityMobileNetworkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName scfSignalingNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfSignalingNetAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * Getter for scfSignalingNetAddress
     *
     * @ElementName scfSignalingNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getScfSignalingNetAddress()
    {
        return $this->scfSignalingNetAddress;
    }

    /**
     * Setter for scfSignalingNetAddress
     *
     * @ElementName scfSignalingNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $scfSignalingNetAddress
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @ElementName scfSignalingPort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $scfSignalingPort
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }


}

