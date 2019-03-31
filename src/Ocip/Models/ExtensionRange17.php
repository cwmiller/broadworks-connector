<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtensionRange17
 *
 * Extension range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2324","type":"sequence"}]
 */
class ExtensionRange17
{

    /**
     * @ElementName minExtension
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2324
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $minExtension = null;

    /**
     * @ElementName maxExtension
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2324
     * @MinLength 2
     * @MaxLength 20
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

