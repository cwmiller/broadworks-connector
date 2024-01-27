<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallToNumber
 *
 * Call to Number.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1140","type":"sequence"}]
 */
class CallToNumber
{
    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1140
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType|null
     */
    protected $type = null;

    /**
     * @ElementName number
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1140
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $number = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1140
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    protected $extension = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\CallToNumberType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

    /**
     * Getter for number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->number;
    }

    /**
     * Setter for number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumber()
    {
        $this->number = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
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
}

