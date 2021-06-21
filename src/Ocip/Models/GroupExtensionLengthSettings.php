<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthSettings
 *
 * Group extension length settings
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2873","type":"sequence"}]
 */
class GroupExtensionLengthSettings
{

    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2873
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2873
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $maxExtensionLength = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2873
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $defaultExtensionLength = null;

    /**
     * @ElementName useEnterpriseExtensionLengthSetting
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2873
     * @var bool|null
     */
    private $useEnterpriseExtensionLengthSetting = null;

    /**
     * Getter for minExtensionLength
     *
     * @return int
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @param int $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtensionLength()
    {
        $this->minExtensionLength = null;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @return int
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @param int $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtensionLength()
    {
        $this->maxExtensionLength = null;
        return $this;
    }

    /**
     * Getter for defaultExtensionLength
     *
     * @return int
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @param int $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength)
    {
        $this->defaultExtensionLength = $defaultExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultExtensionLength()
    {
        $this->defaultExtensionLength = null;
        return $this;
    }

    /**
     * Getter for useEnterpriseExtensionLengthSetting
     *
     * @return bool
     */
    public function getUseEnterpriseExtensionLengthSetting()
    {
        return $this->useEnterpriseExtensionLengthSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useEnterpriseExtensionLengthSetting;
    }

    /**
     * Setter for useEnterpriseExtensionLengthSetting
     *
     * @param bool $useEnterpriseExtensionLengthSetting
     * @return $this
     */
    public function setUseEnterpriseExtensionLengthSetting($useEnterpriseExtensionLengthSetting)
    {
        $this->useEnterpriseExtensionLengthSetting = $useEnterpriseExtensionLengthSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseEnterpriseExtensionLengthSetting()
    {
        $this->useEnterpriseExtensionLengthSetting = null;
        return $this;
    }


}

