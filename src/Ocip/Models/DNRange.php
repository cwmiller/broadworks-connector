<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNRange
 *
 * Directory number range. The minimum and maximum values are inclusive.
 */
class DNRange
{

    /**
     * @ElementName minPhoneNumber
     * @var string|null
     */
    private $minPhoneNumber = null;

    /**
     * @ElementName maxPhoneNumber
     * @var string|null
     */
    private $maxPhoneNumber = null;

    /**
     * Getter for minPhoneNumber
     *
     * @ElementName minPhoneNumber
     * @return string|null
     */
    public function getMinPhoneNumber()
    {
        return $this->minPhoneNumber;
    }

    /**
     * Setter for minPhoneNumber
     *
     * @ElementName minPhoneNumber
     * @param string|null $minPhoneNumber
     * @return $this
     */
    public function setMinPhoneNumber($minPhoneNumber)
    {
        $this->minPhoneNumber = $minPhoneNumber;
        return $this;
    }

    /**
     * Getter for maxPhoneNumber
     *
     * @ElementName maxPhoneNumber
     * @return string|null
     */
    public function getMaxPhoneNumber()
    {
        return $this->maxPhoneNumber;
    }

    /**
     * Setter for maxPhoneNumber
     *
     * @ElementName maxPhoneNumber
     * @param string|null $maxPhoneNumber
     * @return $this
     */
    public function setMaxPhoneNumber($maxPhoneNumber)
    {
        $this->maxPhoneNumber = $maxPhoneNumber;
        return $this;
    }


}

