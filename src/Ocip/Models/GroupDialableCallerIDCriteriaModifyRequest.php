<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialableCallerIDCriteriaModifyRequest
 *
 * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupDialableCallerIDCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName prefixDigits
     * @var string|null
     */
    private $prefixDigits = null;

    /**
     * @ElementName matchCallType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null
     */
    private $matchCallType = null;

    /**
     * @ElementName matchAlternateCallIndicator
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null
     */
    private $matchAlternateCallIndicator = null;

    /**
     * @ElementName matchLocalCategory
     * @var bool|null
     */
    private $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @var bool|null
     */
    private $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @var bool|null
     */
    private $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @var bool|null
     */
    private $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @var bool|null
     */
    private $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @var bool|null
     */
    private $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @var bool|null
     */
    private $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @var bool|null
     */
    private $matchOtherCategory = null;

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
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @ElementName prefixDigits
     * @return string|null
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @ElementName prefixDigits
     * @param string|null $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * Getter for matchCallType
     *
     * @ElementName matchCallType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null
     */
    public function getMatchCallType()
    {
        return $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @ElementName matchCallType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null $matchCallType
     * @return $this
     */
    public function setMatchCallType($matchCallType)
    {
        $this->matchCallType = $matchCallType;
        return $this;
    }

    /**
     * Getter for matchAlternateCallIndicator
     *
     * @ElementName matchAlternateCallIndicator
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @ElementName matchAlternateCallIndicator
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for matchLocalCategory
     *
     * @ElementName matchLocalCategory
     * @return bool|null
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory;
    }

    /**
     * Setter for matchLocalCategory
     *
     * @ElementName matchLocalCategory
     * @param bool|null $matchLocalCategory
     * @return $this
     */
    public function setMatchLocalCategory($matchLocalCategory)
    {
        $this->matchLocalCategory = $matchLocalCategory;
        return $this;
    }

    /**
     * Getter for matchNationalCategory
     *
     * @ElementName matchNationalCategory
     * @return bool|null
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory;
    }

    /**
     * Setter for matchNationalCategory
     *
     * @ElementName matchNationalCategory
     * @param bool|null $matchNationalCategory
     * @return $this
     */
    public function setMatchNationalCategory($matchNationalCategory)
    {
        $this->matchNationalCategory = $matchNationalCategory;
        return $this;
    }

    /**
     * Getter for matchInterlataCategory
     *
     * @ElementName matchInterlataCategory
     * @return bool|null
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory;
    }

    /**
     * Setter for matchInterlataCategory
     *
     * @ElementName matchInterlataCategory
     * @param bool|null $matchInterlataCategory
     * @return $this
     */
    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $this->matchInterlataCategory = $matchInterlataCategory;
        return $this;
    }

    /**
     * Getter for matchIntralataCategory
     *
     * @ElementName matchIntralataCategory
     * @return bool|null
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory;
    }

    /**
     * Setter for matchIntralataCategory
     *
     * @ElementName matchIntralataCategory
     * @param bool|null $matchIntralataCategory
     * @return $this
     */
    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $this->matchIntralataCategory = $matchIntralataCategory;
        return $this;
    }

    /**
     * Getter for matchInternationalCategory
     *
     * @ElementName matchInternationalCategory
     * @return bool|null
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory;
    }

    /**
     * Setter for matchInternationalCategory
     *
     * @ElementName matchInternationalCategory
     * @param bool|null $matchInternationalCategory
     * @return $this
     */
    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $this->matchInternationalCategory = $matchInternationalCategory;
        return $this;
    }

    /**
     * Getter for matchPrivateCategory
     *
     * @ElementName matchPrivateCategory
     * @return bool|null
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory;
    }

    /**
     * Setter for matchPrivateCategory
     *
     * @ElementName matchPrivateCategory
     * @param bool|null $matchPrivateCategory
     * @return $this
     */
    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $this->matchPrivateCategory = $matchPrivateCategory;
        return $this;
    }

    /**
     * Getter for matchEmergencyCategory
     *
     * @ElementName matchEmergencyCategory
     * @return bool|null
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory;
    }

    /**
     * Setter for matchEmergencyCategory
     *
     * @ElementName matchEmergencyCategory
     * @param bool|null $matchEmergencyCategory
     * @return $this
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $this->matchEmergencyCategory = $matchEmergencyCategory;
        return $this;
    }

    /**
     * Getter for matchOtherCategory
     *
     * @ElementName matchOtherCategory
     * @return bool|null
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory;
    }

    /**
     * Setter for matchOtherCategory
     *
     * @ElementName matchOtherCategory
     * @param bool|null $matchOtherCategory
     * @return $this
     */
    public function setMatchOtherCategory($matchOtherCategory)
    {
        $this->matchOtherCategory = $matchOtherCategory;
        return $this;
    }


}

