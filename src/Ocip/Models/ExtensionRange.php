<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtensionRange
 *
 * Extension range. The minimum and maximum values are inclusive.
 */
class ExtensionRange
{

    /**
     * @ElementName minExtension
     * @var string|null
     */
    private $minExtension = null;

    /**
     * @ElementName maxExtension
     * @var string|null
     */
    private $maxExtension = null;

    /**
     * Getter for minExtension
     *
     * @ElementName minExtension
     * @return string|null
     */
    public function getMinExtension()
    {
        return $this->minExtension;
    }

    /**
     * Setter for minExtension
     *
     * @ElementName minExtension
     * @param string|null $minExtension
     * @return $this
     */
    public function setMinExtension($minExtension)
    {
        $this->minExtension = $minExtension;
        return $this;
    }

    /**
     * Getter for maxExtension
     *
     * @ElementName maxExtension
     * @return string|null
     */
    public function getMaxExtension()
    {
        return $this->maxExtension;
    }

    /**
     * Setter for maxExtension
     *
     * @ElementName maxExtension
     * @param string|null $maxExtension
     * @return $this
     */
    public function setMaxExtension($maxExtension)
    {
        $this->maxExtension = $maxExtension;
        return $this;
    }


}

