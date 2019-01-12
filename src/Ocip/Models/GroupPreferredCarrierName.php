<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierName
 *
 * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
 *         The group carrier name is exposed if it was previously configured.
 *
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:594","type":"sequence"}]
 */
class GroupPreferredCarrierName
{

    /**
     * @ElementName useServiceProviderPreferredCarrier
     * @Type bool
     * @Group 74a46a9bfccb54713c1d19735843f1df:594
     * @var bool|null
     */
    private $useServiceProviderPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @Type string
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:594
     * @var string|null
     */
    private $carrier = null;

    /**
     * Getter for useServiceProviderPreferredCarrier
     *
     * @return bool
     */
    public function getUseServiceProviderPreferredCarrier()
    {
        return $this->useServiceProviderPreferredCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderPreferredCarrier;
    }

    /**
     * Setter for useServiceProviderPreferredCarrier
     *
     * @param bool $useServiceProviderPreferredCarrier
     * @return $this
     */
    public function setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier)
    {
        $this->useServiceProviderPreferredCarrier = $useServiceProviderPreferredCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderPreferredCarrier()
    {
        $this->useServiceProviderPreferredCarrier = null;
        return $this;
    }

    /**
     * Getter for carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCarrier()
    {
        $this->carrier = null;
        return $this;
    }


}

