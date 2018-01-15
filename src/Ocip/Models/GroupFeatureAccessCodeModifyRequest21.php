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
 */
class GroupFeatureAccessCodeModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @var string|null
     */
    private $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName restoreDefaultCodes
     * @var bool|null
     */
    private $restoreDefaultCodes = null;

    /**
     * @ElementName featureAccessCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    private $featureAccessCode = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useFeatureAccessCodeLevel
     *
     * @ElementName useFeatureAccessCodeLevel
     * @return string|null
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel;
    }

    /**
     * Setter for useFeatureAccessCodeLevel
     *
     * @ElementName useFeatureAccessCodeLevel
     * @param string|null $useFeatureAccessCodeLevel
     * @return $this
     */
    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel)
    {
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        return $this;
    }

    /**
     * Getter for restoreDefaultCodes
     *
     * @ElementName restoreDefaultCodes
     * @return bool|null
     */
    public function getRestoreDefaultCodes()
    {
        return $this->restoreDefaultCodes;
    }

    /**
     * Setter for restoreDefaultCodes
     *
     * @ElementName restoreDefaultCodes
     * @param bool|null $restoreDefaultCodes
     * @return $this
     */
    public function setRestoreDefaultCodes($restoreDefaultCodes)
    {
        $this->restoreDefaultCodes = $restoreDefaultCodes;
        return $this;
    }

    /**
     * Getter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeModifyEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode []= $featureAccessCode;
        return $this;
    }


}

