<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetResponse19sp1
 *
 * The response to a SystemBroadWorksMobilityGetRequest19sp1.
 *         Replaced by SystemBroadWorksMobilityGetResponse21
 *
 * @see SystemBroadWorksMobilityGetRequest19sp1
 * @see SystemBroadWorksMobilityGetResponse21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:32915","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMillisecnds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var int|null
     */
    private $imrnTimeoutMillisecnds = null;

    /**
     * @ElementName scfSignalingNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var string|null
     */
    private $scfSignalingNetAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var int|null
     */
    private $scfSignalingPort = null;

    /**
     * @ElementName refreshPeriodSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var int|null
     */
    private $refreshPeriodSeconds = null;

    /**
     * @ElementName maxConsecutiveFailures
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var int|null
     */
    private $maxConsecutiveFailures = null;

    /**
     * @ElementName maxResponseWaitTimeMilliseconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var int|null
     */
    private $maxResponseWaitTimeMilliseconds = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32915
     * @var bool|null
     */
    private $enableAnnouncementSuppression = null;

    /**
     * Getter for enableLocationServices
     *
     * @return bool
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @param bool $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableLocationServices()
    {
        $this->enableLocationServices = null;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @return bool
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @param bool $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMSRNLookup()
    {
        $this->enableMSRNLookup = null;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @return bool
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @param bool $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMobileStateChecking()
    {
        $this->enableMobileStateChecking = null;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @return bool
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @param bool $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallOriginations()
    {
        $this->denyCallOriginations = null;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @return bool
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @param bool $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallTerminations()
    {
        $this->denyCallTerminations = null;
        return $this;
    }

    /**
     * Getter for imrnTimeoutMillisecnds
     *
     * @return int
     */
    public function getImrnTimeoutMillisecnds()
    {
        return $this->imrnTimeoutMillisecnds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnTimeoutMillisecnds;
    }

    /**
     * Setter for imrnTimeoutMillisecnds
     *
     * @param int $imrnTimeoutMillisecnds
     * @return $this
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds)
    {
        $this->imrnTimeoutMillisecnds = $imrnTimeoutMillisecnds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnTimeoutMillisecnds()
    {
        $this->imrnTimeoutMillisecnds = null;
        return $this;
    }

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


}

