<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementAutoRebuildConfigEntry
 *
 * Contains one automatic rebuild configuration list entry.
 */
class DeviceManagementAutoRebuildConfigEntry
{

    /**
     * @ElementName ociRequestPrefix
     * @var string|null
     */
    private $ociRequestPrefix = null;

    /**
     * @ElementName autoRebuildEnabled
     * @var bool|null
     */
    private $autoRebuildEnabled = null;

    /**
     * Getter for ociRequestPrefix
     *
     * @ElementName ociRequestPrefix
     * @return string|null
     */
    public function getOciRequestPrefix()
    {
        return $this->ociRequestPrefix;
    }

    /**
     * Setter for ociRequestPrefix
     *
     * @ElementName ociRequestPrefix
     * @param string|null $ociRequestPrefix
     * @return $this
     */
    public function setOciRequestPrefix($ociRequestPrefix)
    {
        $this->ociRequestPrefix = $ociRequestPrefix;
        return $this;
    }

    /**
     * Getter for autoRebuildEnabled
     *
     * @ElementName autoRebuildEnabled
     * @return bool|null
     */
    public function getAutoRebuildEnabled()
    {
        return $this->autoRebuildEnabled;
    }

    /**
     * Setter for autoRebuildEnabled
     *
     * @ElementName autoRebuildEnabled
     * @param bool|null $autoRebuildEnabled
     * @return $this
     */
    public function setAutoRebuildEnabled($autoRebuildEnabled)
    {
        $this->autoRebuildEnabled = $autoRebuildEnabled;
        return $this;
    }


}

