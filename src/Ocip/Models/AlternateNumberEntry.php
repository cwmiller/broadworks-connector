<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateNumberEntry
 *
 * Alternate Number Entry.
 */
class AlternateNumberEntry
{

    /**
     * @ElementName phoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName ringPattern
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $ringPattern = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Getter for ringPattern
     *
     * @ElementName ringPattern
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRingPattern()
    {
        return $this->ringPattern;
    }

    /**
     * Setter for ringPattern
     *
     * @ElementName ringPattern
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null|\CWM\BroadWorksConnector\Ocip\Nil $ringPattern
     * @return $this
     */
    public function setRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $ringPattern)
    {
        $this->ringPattern = $ringPattern;
        return $this;
    }


}

