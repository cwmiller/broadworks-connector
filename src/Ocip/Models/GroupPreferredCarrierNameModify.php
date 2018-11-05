<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierNameModify
 *
 * Group can either use it's service provider/enterprise's preferred carrier or use
 * it's own.
 *         You can use the Service Provider preferred carrier without clearing the
 * group
 *         carrier name -- in this case, the group carrier name is retained.
 */
class GroupPreferredCarrierNameModify
{

    /**
     * @ElementName useServiceProviderPreferredCarrier
     * @var bool|null
     */
    private $useServiceProviderPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @ElementName carrier
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }


}

