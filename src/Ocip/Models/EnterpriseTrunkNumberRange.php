<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberRange
 *
 * Directory number range. The minimum and maximum values are inclusive.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3092","type":"sequence"}]
 */
class EnterpriseTrunkNumberRange
{
    /**
     * @ElementName dnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3092
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange|null
     */
    protected $dnRange = null;

    /**
     * @ElementName extensionLength
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3092
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $extensionLength = null;

    /**
     * Getter for dnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange
     */
    public function getDnRange()
    {
        return $this->dnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange
     * @return $this
     */
    public function setDnRange(\CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRange()
    {
        $this->dnRange = null;
        return $this;
    }

    /**
     * Getter for extensionLength
     *
     * @return int
     */
    public function getExtensionLength()
    {
        return $this->extensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionLength;
    }

    /**
     * Setter for extensionLength
     *
     * @param int $extensionLength
     * @return $this
     */
    public function setExtensionLength($extensionLength)
    {
        $this->extensionLength = $extensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionLength()
    {
        $this->extensionLength = null;
        return $this;
    }
}

