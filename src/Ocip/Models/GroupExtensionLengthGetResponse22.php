<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthGetResponse22
 *
 * Response to GroupExtensionLengthGetRequest22.
 *         
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *            useExterpriseExtensionLengthSetting
 *
 * @see GroupExtensionLengthGetRequest22
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5495","type":"sequence"}]
 */
class GroupExtensionLengthGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:5495
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:5495
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxExtensionLength = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:5495
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $defaultExtensionLength = null;

    /**
     * @ElementName useEnterpriseExtensionLengthSetting
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5495
     * @var bool|null
     */
    protected $useEnterpriseExtensionLengthSetting = null;

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

