<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallToNumber
 *
 * Call to Number.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:987","type":"sequence"}]
 */
class CallToNumber
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType
     * @Group c0d21ef9ba207c335d8347e5172fce1d:987
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType|null
     */
    private $type = null;

    /**
     * @ElementName number
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:987
     * @var string|null
     */
    private $number = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:987
     * @var string|null
     */
    private $extension = null;

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

