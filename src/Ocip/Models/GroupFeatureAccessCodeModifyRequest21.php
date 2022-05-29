<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeModifyRequest21
 *
 * Modify group FAC code level and the list of feature access codes for a
 *         group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: choice element is only valid when useFeatureAccessCodeLevel is set
 *         to "Group", otherwise an ErrorResponse will be returned.
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording - Start".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5851","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:5855","type":"choice"}]}]
 */
class GroupFeatureAccessCodeModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5851
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5851
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5851
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
     */
    protected $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName restoreDefaultCodes
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5855
     * @var bool|null
     */
    protected $restoreDefaultCodes = null;

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5855
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    protected $featureAccessCode = array(
        
    );

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[] $featureAccessCode
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }


}

