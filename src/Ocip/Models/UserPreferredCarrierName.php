<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierName
 *
 * User can either use it's group's preferred carrier or use it's own.
 *         The user carrier name is exposed if it was previously configured.
 */
class UserPreferredCarrierName
{

    /**
     * @ElementName useGroupPreferredCarrier
     * @var bool|null
     */
    private $useGroupPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @var string|null
     */
    private $carrier = null;

    /**
     * Getter for useGroupPreferredCarrier
     *
     * @ElementName useGroupPreferredCarrier
     * @return bool|null
     */
    public function getUseGroupPreferredCarrier()
    {
        return $this->useGroupPreferredCarrier;
    }

    /**
     * Setter for useGroupPreferredCarrier
     *
     * @ElementName useGroupPreferredCarrier
     * @param bool|null $useGroupPreferredCarrier
     * @return $this
     */
    public function setUseGroupPreferredCarrier($useGroupPreferredCarrier)
    {
        $this->useGroupPreferredCarrier = $useGroupPreferredCarrier;
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

