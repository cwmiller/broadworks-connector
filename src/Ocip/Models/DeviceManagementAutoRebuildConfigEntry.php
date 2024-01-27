<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementAutoRebuildConfigEntry
 *
 * Contains one automatic rebuild configuration list entry.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20168","type":"sequence"}]
 */
class DeviceManagementAutoRebuildConfigEntry
{
    /**
     * @ElementName ociRequestPrefix
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:20168
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $ociRequestPrefix = null;

    /**
     * @ElementName autoRebuildEnabled
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20168
     * @var bool|null
     */
    protected $autoRebuildEnabled = null;

    /**
     * Getter for ociRequestPrefix
     *
     * @return string
     */
    public function getOciRequestPrefix()
    {
        return $this->ociRequestPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ociRequestPrefix;
    }

    /**
     * Setter for ociRequestPrefix
     *
     * @param string $ociRequestPrefix
     * @return $this
     */
    public function setOciRequestPrefix($ociRequestPrefix)
    {
        $this->ociRequestPrefix = $ociRequestPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOciRequestPrefix()
    {
        $this->ociRequestPrefix = null;
        return $this;
    }

    /**
     * Getter for autoRebuildEnabled
     *
     * @return bool
     */
    public function getAutoRebuildEnabled()
    {
        return $this->autoRebuildEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoRebuildEnabled;
    }

    /**
     * Setter for autoRebuildEnabled
     *
     * @param bool $autoRebuildEnabled
     * @return $this
     */
    public function setAutoRebuildEnabled($autoRebuildEnabled)
    {
        $this->autoRebuildEnabled = $autoRebuildEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoRebuildEnabled()
    {
        $this->autoRebuildEnabled = null;
        return $this;
    }
}

