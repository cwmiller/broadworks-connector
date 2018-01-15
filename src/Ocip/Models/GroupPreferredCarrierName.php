<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierName
 *
 * Group can either use it's service provider/enterprise's preferred carrier or use
 * it's own.
 *         The group carrier name is exposed if it was previously configured.
 */
class GroupPreferredCarrierName
{

    /**
     * @ElementName useServiceProviderPreferredCarrier
     * @var bool|null
     */
    private $useServiceProviderPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @var string|null
     */
    private $carrier = null;

    /**
     * Getter for useServiceProviderPreferredCarrier
     *
     * @ElementName useServiceProviderPreferredCarrier
     * @return bool|null
     */
    public function getUseServiceProviderPreferredCarrier()
    {
        return $this->useServiceProviderPreferredCarrier;
    }

    /**
     * Setter for useServiceProviderPreferredCarrier
     *
     * @ElementName useServiceProviderPreferredCarrier
     * @param bool|null $useServiceProviderPreferredCarrier
     * @return $this
     */
    public function setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier)
    {
        $this->useServiceProviderPreferredCarrier = $useServiceProviderPreferredCarrier;
        return $this;
    }

    /**
     * Getter for carrier
     *
     * @ElementName carrier
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @ElementName carrier
     * @param string|null $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }


}

