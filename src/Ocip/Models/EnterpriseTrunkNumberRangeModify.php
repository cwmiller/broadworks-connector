<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberRangeModify
 *
 * Directory number range for modification.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2622","type":"sequence"}]
 */
class EnterpriseTrunkNumberRangeModify
{

    /**
     * @ElementName dnRangeStart
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2622
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $dnRangeStart = null;

    /**
     * @ElementName extensionLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2622
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extensionLength = null;

    /**
     * Getter for dnRangeStart
     *
     * @return string
     */
    public function getDnRangeStart()
    {
        return $this->dnRangeStart instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRangeStart;
    }

    /**
     * Setter for dnRangeStart
     *
     * @param string $dnRangeStart
     * @return $this
     */
    public function setDnRangeStart($dnRangeStart)
    {
        $this->dnRangeStart = $dnRangeStart;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRangeStart()
    {
        $this->dnRangeStart = null;
        return $this;
    }

    /**
     * Getter for extensionLength
     *
     * @return int|null
     */
    public function getExtensionLength()
    {
        return $this->extensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionLength;
    }

    /**
     * Setter for extensionLength
     *
     * @param int|null $extensionLength
     * @return $this
     */
    public function setExtensionLength($extensionLength = null)
    {
        if ($extensionLength === null) {
            $this->extensionLength = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extensionLength = $extensionLength;
        }
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

