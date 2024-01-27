<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetResponse21sp1
 *
 * The response to a SystemBroadWorksMobilityGetRequest21sp1.
 *         
 *         Replaced by SystemBroadWorksMobilityGetResponse22V2.
 *
 * @see SystemBroadWorksMobilityGetRequest21sp1
 * @see SystemBroadWorksMobilityGetResponse22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21056","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMillisecnds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @MinInclusive 100
     * @MaxInclusive 60000
     * @var int|null
     */
    protected $imrnTimeoutMillisecnds = null;

    /**
     * @ElementName enableInternalCLIDDeliveryAccessLocations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21056
     * @var bool|null
     */
    protected $enableInternalCLIDDeliveryAccessLocations = null;

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
     * Getter for enableInternalCLIDDeliveryAccessLocations
     *
     * @return bool
     */
    public function getEnableInternalCLIDDeliveryAccessLocations()
    {
        return $this->enableInternalCLIDDeliveryAccessLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableInternalCLIDDeliveryAccessLocations;
    }

    /**
     * Setter for enableInternalCLIDDeliveryAccessLocations
     *
     * @param bool $enableInternalCLIDDeliveryAccessLocations
     * @return $this
     */
    public function setEnableInternalCLIDDeliveryAccessLocations($enableInternalCLIDDeliveryAccessLocations)
    {
        $this->enableInternalCLIDDeliveryAccessLocations = $enableInternalCLIDDeliveryAccessLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableInternalCLIDDeliveryAccessLocations()
    {
        $this->enableInternalCLIDDeliveryAccessLocations = null;
        return $this;
    }
}

