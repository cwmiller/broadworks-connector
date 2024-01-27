<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberPrefixModify
 *
 * Enterprise Trunk Number Prefix for modify.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3080","type":"sequence"}]
 */
class EnterpriseTrunkNumberPrefixModify
{
    /**
     * @ElementName numberPrefix
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3080
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $numberPrefix = null;

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3080
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $extensionRange = null;

    /**
     * Getter for numberPrefix
     *
     * @return string
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @param string $numberPrefix
     * @return $this
     */
    public function setNumberPrefix($numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPrefix()
    {
        $this->numberPrefix = null;
        return $this;
    }

    /**
     * Getter for extensionRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null
     */
    public function getExtensionRange()
    {
        return $this->extensionRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null $extensionRange
     * @return $this
     */
    public function setExtensionRange(\CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange = null)
    {
        if ($extensionRange === null) {
            $this->extensionRange = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extensionRange = $extensionRange;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionRange()
    {
        $this->extensionRange = null;
        return $this;
    }
}

