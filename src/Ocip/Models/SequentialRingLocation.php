<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SequentialRingLocation
 *
 * Sequential Ring Location.
 *         Replaced By: SequentialRingLocation14sp4
 */
class SequentialRingLocation
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName numberOfRings
     * @var int|null
     */
    private $numberOfRings = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for numberOfRings
     *
     * @ElementName numberOfRings
     * @return int|null
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings;
    }

    /**
     * Setter for numberOfRings
     *
     * @ElementName numberOfRings
     * @param int|null $numberOfRings
     * @return $this
     */
    public function setNumberOfRings($numberOfRings)
    {
        $this->numberOfRings = $numberOfRings;
        return $this;
    }


}

