<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionWithRing
 *
 * CommPilot Express SR Forward Number Entry with number of times to ring.
 */
class CommPilotExpressSRRedirectionWithRing
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName numberOfTimesToRing
     * @var int|null
     */
    private $numberOfTimesToRing = null;

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
     * Getter for numberOfTimesToRing
     *
     * @ElementName numberOfTimesToRing
     * @return int|null
     */
    public function getNumberOfTimesToRing()
    {
        return $this->numberOfTimesToRing;
    }

    /**
     * Setter for numberOfTimesToRing
     *
     * @ElementName numberOfTimesToRing
     * @param int|null $numberOfTimesToRing
     * @return $this
     */
    public function setNumberOfTimesToRing($numberOfTimesToRing)
    {
        $this->numberOfTimesToRing = $numberOfTimesToRing;
        return $this;
    }


}

