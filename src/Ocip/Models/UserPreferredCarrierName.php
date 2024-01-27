<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierName
 *
 * User can either use it's group's preferred carrier or use it's own.
 *         The user carrier name is exposed if it was previously configured.
 *
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:621","type":"sequence"}]
 */
class UserPreferredCarrierName
{
    /**
     * @ElementName useGroupPreferredCarrier
     * @Type bool
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:621
     * @var bool|null
     */
    protected $useGroupPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @Type string
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:621
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $carrier = null;

    /**
     * Getter for useGroupPreferredCarrier
     *
     * @return bool
     */
    public function getUseGroupPreferredCarrier()
    {
        return $this->useGroupPreferredCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupPreferredCarrier;
    }

    /**
     * Setter for useGroupPreferredCarrier
     *
     * @param bool $useGroupPreferredCarrier
     * @return $this
     */
    public function setUseGroupPreferredCarrier($useGroupPreferredCarrier)
    {
        $this->useGroupPreferredCarrier = $useGroupPreferredCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupPreferredCarrier()
    {
        $this->useGroupPreferredCarrier = null;
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

