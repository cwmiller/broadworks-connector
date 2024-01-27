<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateNumberEntry21
 *
 * Alternate Number Entry.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:575","type":"sequence"}]
 */
class AlternateNumberEntry21
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:575
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:575
     * @MinLength 2
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $extension = null;

    /**
     * @ElementName ringPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:575
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $ringPattern = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:575
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * Getter for phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
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
     * Getter for extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension = null)
    {
        if ($extension === null) {
            $this->extension = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extension = $extension;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for ringPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    public function getRingPattern()
    {
        return $this->ringPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringPattern;
    }

    /**
     * Setter for ringPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null $ringPattern
     * @return $this
     */
    public function setRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $ringPattern = null)
    {
        if ($ringPattern === null) {
            $this->ringPattern = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->ringPattern = $ringPattern;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingPattern()
    {
        $this->ringPattern = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

