<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthModifyRequest17
 *
 * Modify the group's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *          useExterpriseExtensionLengthSetting
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5518","type":"sequence"}]
 */
class GroupExtensionLengthModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxExtensionLength = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $defaultExtensionLength = null;

    /**
     * @ElementName useEnterpriseExtensionLengthSetting
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5518
     * @var bool|null
     */
    protected $useEnterpriseExtensionLengthSetting = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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

