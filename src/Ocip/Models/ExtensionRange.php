<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtensionRange
 *
 * Extension range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:48900","type":"sequence"}]
 */
class ExtensionRange
{

    /**
     * @ElementName minExtension
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48900
     * @MinLength 2
     * @MaxLength 6
     * @var string|null
     */
    private $minExtension = null;

    /**
     * @ElementName maxExtension
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:48900
     * @MinLength 2
     * @MaxLength 6
     * @var string|null
     */
    private $maxExtension = null;

    /**
     * Getter for minExtension
     *
     * @return string
     */
    public function getMinExtension()
    {
        return $this->minExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtension;
    }

    /**
     * Setter for minExtension
     *
     * @param string $minExtension
     * @return $this
     */
    public function setMinExtension($minExtension)
    {
        $this->minExtension = $minExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtension()
    {
        $this->minExtension = null;
        return $this;
    }

    /**
     * Getter for maxExtension
     *
     * @return string
     */
    public function getMaxExtension()
    {
        return $this->maxExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtension;
    }

    /**
     * Setter for maxExtension
     *
     * @param string $maxExtension
     * @return $this
     */
    public function setMaxExtension($maxExtension)
    {
        $this->maxExtension = $maxExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtension()
    {
        $this->maxExtension = null;
        return $this;
    }


}

