<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkNumberPrefix22
 *
 * Enterprise Trunk Number Prefix
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2586","type":"sequence"}]
 */
class EnterpriseTrunkNumberPrefix22
{

    /**
     * @ElementName numberPrefix
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2586
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $numberPrefix = null;

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2586
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     */
    public function getExtensionRange()
    {
        return $this->extensionRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange
     * @return $this
     */
    public function setExtensionRange(\CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange)
    {
        $this->extensionRange = $extensionRange;
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

