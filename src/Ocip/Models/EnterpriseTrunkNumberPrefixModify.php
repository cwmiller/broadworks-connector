<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberPrefixModify
 *
 * Enterprise Trunk Number Prefix for modify.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2598","type":"sequence"}]
 */
class EnterpriseTrunkNumberPrefixModify
{

    /**
     * @ElementName numberPrefix
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2598
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $numberPrefix = null;

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2598
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extensionRange = null;

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

