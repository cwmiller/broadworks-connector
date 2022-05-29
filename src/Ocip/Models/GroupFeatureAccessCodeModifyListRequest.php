<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeModifyListRequest
 *
 * Modify a list of feature access codes for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: GroupFeatureAccessCodeModifyRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupFeatureAccessCodeModifyRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9742","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:9745","type":"choice"}]}]
 */
class GroupFeatureAccessCodeModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9742
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9742
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9745
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    protected $featureAccessCode = array(
        
    );

    /**
     * @ElementName restoreDefaultCodes
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9745
     * @var bool|null
     */
    protected $restoreDefaultCodes = null;

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


}

