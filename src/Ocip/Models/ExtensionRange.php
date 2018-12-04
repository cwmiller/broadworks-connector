<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtensionRange
 *
 * Extension range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:39187","type":"sequence"}]
 */
class ExtensionRange
{

    /**
     * @ElementName minExtension
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:39187
     * @var string|null
     */
    private $minExtension = null;

    /**
     * @ElementName maxExtension
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:39187
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

