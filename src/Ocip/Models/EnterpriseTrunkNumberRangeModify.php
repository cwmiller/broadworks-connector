<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberRangeModify
 *
 * Directory number range for modification.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3104","type":"sequence"}]
 */
class EnterpriseTrunkNumberRangeModify
{
    /**
     * @ElementName dnRangeStart
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3104
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $dnRangeStart = null;

    /**
     * @ElementName extensionLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3104
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $extensionLength = null;

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

