<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SequentialRingLocation
 *
 * Sequential Ring Location.
 *         Replaced By: SequentialRingLocation14sp4
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:41590","type":"sequence"}]
 */
class SequentialRingLocation
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41590
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName numberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41590
     * @var \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings|null
     */
    private $numberOfRings = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for numberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfRings;
    }

    /**
     * Setter for numberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings $numberOfRings
     * @return $this
     */
    public function setNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\SequentialRingNumberOfRings $numberOfRings)
    {
        $this->numberOfRings = $numberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfRings()
    {
        $this->numberOfRings = null;
        return $this;
    }


}

