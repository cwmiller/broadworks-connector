<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNRange
 *
 * Directory number range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:1803","type":"sequence"}]
 */
class DNRange
{

    /**
     * @ElementName minPhoneNumber
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:1803
     * @var string|null
     */
    private $minPhoneNumber = null;

    /**
     * @ElementName maxPhoneNumber
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:1803
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

