<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierNameModify
 *
 * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
 *         You can use the Service Provider preferred carrier without clearing the group
 *         carrier name -- in this case, the group carrier name is retained.
 *
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:608","type":"sequence"}]
 */
class GroupPreferredCarrierNameModify
{

    /**
     * @ElementName useServiceProviderPreferredCarrier
     * @Type bool
     * @Group 74a46a9bfccb54713c1d19735843f1df:608
     * @var bool|null
     */
    private $useServiceProviderPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:608
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string|null $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        if ($carrier === null) {
            $this->carrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->carrier = $carrier;
        }
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

