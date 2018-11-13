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
     * @Type string
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName numberOfTimesToRing
     * @Type int
     * @var int|null
     */
    private $numberOfTimesToRing = null;

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
     * Getter for numberOfTimesToRing
     *
     * @return int
     */
    public function getNumberOfTimesToRing()
    {
        return $this->numberOfTimesToRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfTimesToRing;
    }

    /**
     * Setter for numberOfTimesToRing
     *
     * @param int $numberOfTimesToRing
     * @return $this
     */
    public function setNumberOfTimesToRing($numberOfTimesToRing)
    {
        $this->numberOfTimesToRing = $numberOfTimesToRing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfTimesToRing()
    {
        $this->numberOfTimesToRing = null;
        return $this;
    }


}

