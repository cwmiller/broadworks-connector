<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeModifyRequest
 *
 * Modify group FAC code level and the list of feature access codes for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: choice element is only valid when useFeatureAccessCodeLevel is set to "Group", otherwise an ErrorResponse will be returned.
 *         
 *         Replaced by: GroupFeatureAccessCodeModifyRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see GroupFeatureAccessCodeModifyRequest21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:2935","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:2939","type":"choice"}]}]
 */
class GroupFeatureAccessCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2935
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2935
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2935
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
     */
    protected $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName restoreDefaultCodes
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2939
     * @var bool|null
     */
    protected $restoreDefaultCodes = null;

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2939
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    protected $featureAccessCode = [
        
    ];

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
     * Getter for useFeatureAccessCodeLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useFeatureAccessCodeLevel;
    }

    /**
     * Setter for useFeatureAccessCodeLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel
     * @return $this
     */
    public function setUseFeatureAccessCodeLevel(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel)
    {
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseFeatureAccessCodeLevel()
    {
        $this->useFeatureAccessCodeLevel = null;
        return $this;
    }

    /**
     * Getter for restoreDefaultCodes
     *
     * @return bool
     */
    public function getRestoreDefaultCodes()
    {
        return $this->restoreDefaultCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restoreDefaultCodes;
    }

    /**
     * Setter for restoreDefaultCodes
     *
     * @param bool $restoreDefaultCodes
     * @return $this
     */
    public function setRestoreDefaultCodes($restoreDefaultCodes)
    {
        $this->restoreDefaultCodes = $restoreDefaultCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestoreDefaultCodes()
    {
        $this->restoreDefaultCodes = null;
        return $this;
    }

    /**
     * Getter for featureAccessCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode(array $featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCode()
    {
        $this->featureAccessCode = null;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }
}

