<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierNameModify
 *
 * User can either use it's group's preferred carrier or use it's own.
 *         You can use the group's preferred carrier without clearing the user carrier name --
 *         in this case, the user carrier name is retained.
 *
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:635","type":"sequence"}]
 */
class UserPreferredCarrierNameModify
{

    /**
     * @ElementName useGroupPreferredCarrier
     * @Type bool
     * @Group 74a46a9bfccb54713c1d19735843f1df:635
     * @var bool|null
     */
    private $useGroupPreferredCarrier = null;

    /**
     * @ElementName carrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:635
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $carrier = null;

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
    public function setCarrier($carrier = null)
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

