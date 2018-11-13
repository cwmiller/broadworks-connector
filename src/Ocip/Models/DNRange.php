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
     * @Type string
     * @var string|null
     */
    private $minPhoneNumber = null;

    /**
     * @ElementName maxPhoneNumber
     * @Type string
     * @var string|null
     */
    private $maxPhoneNumber = null;

    /**
     * Getter for minPhoneNumber
     *
     * @return string
     */
    public function getMinPhoneNumber()
    {
        return $this->minPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minPhoneNumber;
    }

    /**
     * Setter for minPhoneNumber
     *
     * @param string $minPhoneNumber
     * @return $this
     */
    public function setMinPhoneNumber($minPhoneNumber)
    {
        $this->minPhoneNumber = $minPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinPhoneNumber()
    {
        $this->minPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for maxPhoneNumber
     *
     * @return string
     */
    public function getMaxPhoneNumber()
    {
        return $this->maxPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxPhoneNumber;
    }

    /**
     * Setter for maxPhoneNumber
     *
     * @param string $maxPhoneNumber
     * @return $this
     */
    public function setMaxPhoneNumber($maxPhoneNumber)
    {
        $this->maxPhoneNumber = $maxPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxPhoneNumber()
    {
        $this->maxPhoneNumber = null;
        return $this;
    }


}

