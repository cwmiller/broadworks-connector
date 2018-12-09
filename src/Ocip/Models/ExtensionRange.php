<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtensionRange
 *
 * Extension range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:39187","type":"sequence"}]
 */
class ExtensionRange
{

    /**
     * @ElementName minExtension
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:39187
     * @var string|null
     */
    private $minExtension = null;

    /**
     * @ElementName maxExtension
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:39187
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

