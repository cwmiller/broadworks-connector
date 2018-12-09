<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaModifyRequest
 *
 * Modify an existing Communication Barring Criteria.
 *         The following elements are only used in AS data mode:
 *           matchNumberPortabilityStatus  
 * 	    The following elements are only used in XS data mode and ignored in AS data mode:
 * 	      matchOtherGETS
 *           matchNotGETS
 *           matchGETSAN
 *           matchGETSNT
 *           matchGETSFC
 *           matchGETSFCAN
 *           matchGETSFCNT
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:5113","type":"sequence"}]
 */
class SystemCommunicationBarringCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName matchCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $matchCallType = null;

    /**
     * @ElementName matchAlternateCallIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $matchAlternateCallIndicator = null;

    /**
     * @ElementName matchVirtualOnNetCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $matchVirtualOnNetCallType = null;

    /**
     * @ElementName matchPublicNetwork
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchPublicNetwork = null;

    /**
     * @ElementName matchPrivateNetwork
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchPrivateNetwork = null;

    /**
     * @ElementName matchLocalCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchOtherCategory = null;

    /**
     * @ElementName matchInterNetwork
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInterNetwork = null;

    /**
     * @ElementName matchInterHostingNE
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInterHostingNE = null;

    /**
     * @ElementName matchInterAS
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInterAS = null;

    /**
     * @ElementName matchIntraAS
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchIntraAS = null;

    /**
     * @ElementName matchChargeCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchChargeCalls = null;

    /**
     * @ElementName matchNoChargeCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchNoChargeCalls = null;

    /**
     * @ElementName matchGroupCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGroupCalls = null;

    /**
     * @ElementName matchEnterpriseCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchEnterpriseCalls = null;

    /**
     * @ElementName matchNetworkCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchNetworkCalls = null;

    /**
     * @ElementName matchNetworkURLCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchNetworkURLCalls = null;

    /**
     * @ElementName matchRepairCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchRepairCalls = null;

    /**
     * @ElementName matchEmergencyCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchEmergencyCalls = null;

    /**
     * @ElementName matchInternalCalls
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchInternalCalls = null;

    /**
     * @ElementName matchOtherGETSGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchOtherGETSGets = null;

    /**
     * @ElementName matchNotGETSGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchNotGETSGets = null;

    /**
     * @ElementName matchGETSANGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGETSANGets = null;

    /**
     * @ElementName matchGETSNTGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGETSNTGets = null;

    /**
     * @ElementName matchGETSFCGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGETSFCGets = null;

    /**
     * @ElementName matchGETSFCANGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGETSFCANGets = null;

    /**
     * @ElementName matchGETSFCNTGets
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var bool|null
     */
    private $matchGETSFCNTGets = null;

    /**
     * @ElementName matchLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria|null
     */
    private $matchLocation = null;

    /**
     * @ElementName matchRoaming
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria|null
     */
    private $matchRoaming = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:5113
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null
     */
    private $matchNumberPortabilityStatus = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for matchCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null
     */
    public function getMatchCallType()
    {
        return $this->matchCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null $matchCallType
     * @return $this
     */
    public function setMatchCallType(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList $matchCallType)
    {
        if ($matchCallType === null) {
            $this->matchCallType = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchCallType = $matchCallType;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchCallType()
    {
        $this->matchCallType = null;
        return $this;
    }

    /**
     * Getter for matchAlternateCallIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator)
    {
        if ($matchAlternateCallIndicator === null) {
            $this->matchAlternateCallIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchAlternateCallIndicator()
    {
        $this->matchAlternateCallIndicator = null;
        return $this;
    }

    /**
     * Getter for matchVirtualOnNetCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null
     */
    public function getMatchVirtualOnNetCallType()
    {
        return $this->matchVirtualOnNetCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchVirtualOnNetCallType;
    }

    /**
     * Setter for matchVirtualOnNetCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null $matchVirtualOnNetCallType
     * @return $this
     */
    public function setMatchVirtualOnNetCallType(\CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType)
    {
        if ($matchVirtualOnNetCallType === null) {
            $this->matchVirtualOnNetCallType = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchVirtualOnNetCallType = $matchVirtualOnNetCallType;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchVirtualOnNetCallType()
    {
        $this->matchVirtualOnNetCallType = null;
        return $this;
    }

    /**
     * Getter for matchPublicNetwork
     *
     * @return bool
     */
    public function getMatchPublicNetwork()
    {
        return $this->matchPublicNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchPublicNetwork;
    }

    /**
     * Setter for matchPublicNetwork
     *
     * @param bool $matchPublicNetwork
     * @return $this
     */
    public function setMatchPublicNetwork($matchPublicNetwork)
    {
        $this->matchPublicNetwork = $matchPublicNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchPublicNetwork()
    {
        $this->matchPublicNetwork = null;
        return $this;
    }

    /**
     * Getter for matchPrivateNetwork
     *
     * @return bool
     */
    public function getMatchPrivateNetwork()
    {
        return $this->matchPrivateNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchPrivateNetwork;
    }

    /**
     * Setter for matchPrivateNetwork
     *
     * @param bool $matchPrivateNetwork
     * @return $this
     */
    public function setMatchPrivateNetwork($matchPrivateNetwork)
    {
        $this->matchPrivateNetwork = $matchPrivateNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchPrivateNetwork()
    {
        $this->matchPrivateNetwork = null;
        return $this;
    }

    /**
     * Getter for matchLocalCategory
     *
     * @return bool
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchLocalCategory;
    }

    /**
     * Setter for matchLocalCategory
     *
     * @param bool $matchLocalCategory
     * @return $this
     */
    public function setMatchLocalCategory($matchLocalCategory)
    {
        $this->matchLocalCategory = $matchLocalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchLocalCategory()
    {
        $this->matchLocalCategory = null;
        return $this;
    }

    /**
     * Getter for matchNationalCategory
     *
     * @return bool
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNationalCategory;
    }

    /**
     * Setter for matchNationalCategory
     *
     * @param bool $matchNationalCategory
     * @return $this
     */
    public function setMatchNationalCategory($matchNationalCategory)
    {
        $this->matchNationalCategory = $matchNationalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNationalCategory()
    {
        $this->matchNationalCategory = null;
        return $this;
    }

    /**
     * Getter for matchInterlataCategory
     *
     * @return bool
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInterlataCategory;
    }

    /**
     * Setter for matchInterlataCategory
     *
     * @param bool $matchInterlataCategory
     * @return $this
     */
    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $this->matchInterlataCategory = $matchInterlataCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInterlataCategory()
    {
        $this->matchInterlataCategory = null;
        return $this;
    }

    /**
     * Getter for matchIntralataCategory
     *
     * @return bool
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchIntralataCategory;
    }

    /**
     * Setter for matchIntralataCategory
     *
     * @param bool $matchIntralataCategory
     * @return $this
     */
    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $this->matchIntralataCategory = $matchIntralataCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchIntralataCategory()
    {
        $this->matchIntralataCategory = null;
        return $this;
    }

    /**
     * Getter for matchInternationalCategory
     *
     * @return bool
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInternationalCategory;
    }

    /**
     * Setter for matchInternationalCategory
     *
     * @param bool $matchInternationalCategory
     * @return $this
     */
    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $this->matchInternationalCategory = $matchInternationalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInternationalCategory()
    {
        $this->matchInternationalCategory = null;
        return $this;
    }

    /**
     * Getter for matchPrivateCategory
     *
     * @return bool
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchPrivateCategory;
    }

    /**
     * Setter for matchPrivateCategory
     *
     * @param bool $matchPrivateCategory
     * @return $this
     */
    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $this->matchPrivateCategory = $matchPrivateCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchPrivateCategory()
    {
        $this->matchPrivateCategory = null;
        return $this;
    }

    /**
     * Getter for matchEmergencyCategory
     *
     * @return bool
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchEmergencyCategory;
    }

    /**
     * Setter for matchEmergencyCategory
     *
     * @param bool $matchEmergencyCategory
     * @return $this
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $this->matchEmergencyCategory = $matchEmergencyCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchEmergencyCategory()
    {
        $this->matchEmergencyCategory = null;
        return $this;
    }

    /**
     * Getter for matchOtherCategory
     *
     * @return bool
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchOtherCategory;
    }

    /**
     * Setter for matchOtherCategory
     *
     * @param bool $matchOtherCategory
     * @return $this
     */
    public function setMatchOtherCategory($matchOtherCategory)
    {
        $this->matchOtherCategory = $matchOtherCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchOtherCategory()
    {
        $this->matchOtherCategory = null;
        return $this;
    }

    /**
     * Getter for matchInterNetwork
     *
     * @return bool
     */
    public function getMatchInterNetwork()
    {
        return $this->matchInterNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInterNetwork;
    }

    /**
     * Setter for matchInterNetwork
     *
     * @param bool $matchInterNetwork
     * @return $this
     */
    public function setMatchInterNetwork($matchInterNetwork)
    {
        $this->matchInterNetwork = $matchInterNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInterNetwork()
    {
        $this->matchInterNetwork = null;
        return $this;
    }

    /**
     * Getter for matchInterHostingNE
     *
     * @return bool
     */
    public function getMatchInterHostingNE()
    {
        return $this->matchInterHostingNE instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInterHostingNE;
    }

    /**
     * Setter for matchInterHostingNE
     *
     * @param bool $matchInterHostingNE
     * @return $this
     */
    public function setMatchInterHostingNE($matchInterHostingNE)
    {
        $this->matchInterHostingNE = $matchInterHostingNE;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInterHostingNE()
    {
        $this->matchInterHostingNE = null;
        return $this;
    }

    /**
     * Getter for matchInterAS
     *
     * @return bool
     */
    public function getMatchInterAS()
    {
        return $this->matchInterAS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInterAS;
    }

    /**
     * Setter for matchInterAS
     *
     * @param bool $matchInterAS
     * @return $this
     */
    public function setMatchInterAS($matchInterAS)
    {
        $this->matchInterAS = $matchInterAS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInterAS()
    {
        $this->matchInterAS = null;
        return $this;
    }

    /**
     * Getter for matchIntraAS
     *
     * @return bool
     */
    public function getMatchIntraAS()
    {
        return $this->matchIntraAS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchIntraAS;
    }

    /**
     * Setter for matchIntraAS
     *
     * @param bool $matchIntraAS
     * @return $this
     */
    public function setMatchIntraAS($matchIntraAS)
    {
        $this->matchIntraAS = $matchIntraAS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchIntraAS()
    {
        $this->matchIntraAS = null;
        return $this;
    }

    /**
     * Getter for matchChargeCalls
     *
     * @return bool
     */
    public function getMatchChargeCalls()
    {
        return $this->matchChargeCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchChargeCalls;
    }

    /**
     * Setter for matchChargeCalls
     *
     * @param bool $matchChargeCalls
     * @return $this
     */
    public function setMatchChargeCalls($matchChargeCalls)
    {
        $this->matchChargeCalls = $matchChargeCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchChargeCalls()
    {
        $this->matchChargeCalls = null;
        return $this;
    }

    /**
     * Getter for matchNoChargeCalls
     *
     * @return bool
     */
    public function getMatchNoChargeCalls()
    {
        return $this->matchNoChargeCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNoChargeCalls;
    }

    /**
     * Setter for matchNoChargeCalls
     *
     * @param bool $matchNoChargeCalls
     * @return $this
     */
    public function setMatchNoChargeCalls($matchNoChargeCalls)
    {
        $this->matchNoChargeCalls = $matchNoChargeCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNoChargeCalls()
    {
        $this->matchNoChargeCalls = null;
        return $this;
    }

    /**
     * Getter for matchGroupCalls
     *
     * @return bool
     */
    public function getMatchGroupCalls()
    {
        return $this->matchGroupCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGroupCalls;
    }

    /**
     * Setter for matchGroupCalls
     *
     * @param bool $matchGroupCalls
     * @return $this
     */
    public function setMatchGroupCalls($matchGroupCalls)
    {
        $this->matchGroupCalls = $matchGroupCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGroupCalls()
    {
        $this->matchGroupCalls = null;
        return $this;
    }

    /**
     * Getter for matchEnterpriseCalls
     *
     * @return bool
     */
    public function getMatchEnterpriseCalls()
    {
        return $this->matchEnterpriseCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchEnterpriseCalls;
    }

    /**
     * Setter for matchEnterpriseCalls
     *
     * @param bool $matchEnterpriseCalls
     * @return $this
     */
    public function setMatchEnterpriseCalls($matchEnterpriseCalls)
    {
        $this->matchEnterpriseCalls = $matchEnterpriseCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchEnterpriseCalls()
    {
        $this->matchEnterpriseCalls = null;
        return $this;
    }

    /**
     * Getter for matchNetworkCalls
     *
     * @return bool
     */
    public function getMatchNetworkCalls()
    {
        return $this->matchNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNetworkCalls;
    }

    /**
     * Setter for matchNetworkCalls
     *
     * @param bool $matchNetworkCalls
     * @return $this
     */
    public function setMatchNetworkCalls($matchNetworkCalls)
    {
        $this->matchNetworkCalls = $matchNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNetworkCalls()
    {
        $this->matchNetworkCalls = null;
        return $this;
    }

    /**
     * Getter for matchNetworkURLCalls
     *
     * @return bool
     */
    public function getMatchNetworkURLCalls()
    {
        return $this->matchNetworkURLCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNetworkURLCalls;
    }

    /**
     * Setter for matchNetworkURLCalls
     *
     * @param bool $matchNetworkURLCalls
     * @return $this
     */
    public function setMatchNetworkURLCalls($matchNetworkURLCalls)
    {
        $this->matchNetworkURLCalls = $matchNetworkURLCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNetworkURLCalls()
    {
        $this->matchNetworkURLCalls = null;
        return $this;
    }

    /**
     * Getter for matchRepairCalls
     *
     * @return bool
     */
    public function getMatchRepairCalls()
    {
        return $this->matchRepairCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchRepairCalls;
    }

    /**
     * Setter for matchRepairCalls
     *
     * @param bool $matchRepairCalls
     * @return $this
     */
    public function setMatchRepairCalls($matchRepairCalls)
    {
        $this->matchRepairCalls = $matchRepairCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchRepairCalls()
    {
        $this->matchRepairCalls = null;
        return $this;
    }

    /**
     * Getter for matchEmergencyCalls
     *
     * @return bool
     */
    public function getMatchEmergencyCalls()
    {
        return $this->matchEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchEmergencyCalls;
    }

    /**
     * Setter for matchEmergencyCalls
     *
     * @param bool $matchEmergencyCalls
     * @return $this
     */
    public function setMatchEmergencyCalls($matchEmergencyCalls)
    {
        $this->matchEmergencyCalls = $matchEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchEmergencyCalls()
    {
        $this->matchEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for matchInternalCalls
     *
     * @return bool
     */
    public function getMatchInternalCalls()
    {
        return $this->matchInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInternalCalls;
    }

    /**
     * Setter for matchInternalCalls
     *
     * @param bool $matchInternalCalls
     * @return $this
     */
    public function setMatchInternalCalls($matchInternalCalls)
    {
        $this->matchInternalCalls = $matchInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInternalCalls()
    {
        $this->matchInternalCalls = null;
        return $this;
    }

    /**
     * Getter for matchOtherGETSGets
     *
     * @return bool
     */
    public function getMatchOtherGETSGets()
    {
        return $this->matchOtherGETSGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchOtherGETSGets;
    }

    /**
     * Setter for matchOtherGETSGets
     *
     * @param bool $matchOtherGETSGets
     * @return $this
     */
    public function setMatchOtherGETSGets($matchOtherGETSGets)
    {
        $this->matchOtherGETSGets = $matchOtherGETSGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchOtherGETSGets()
    {
        $this->matchOtherGETSGets = null;
        return $this;
    }

    /**
     * Getter for matchNotGETSGets
     *
     * @return bool
     */
    public function getMatchNotGETSGets()
    {
        return $this->matchNotGETSGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNotGETSGets;
    }

    /**
     * Setter for matchNotGETSGets
     *
     * @param bool $matchNotGETSGets
     * @return $this
     */
    public function setMatchNotGETSGets($matchNotGETSGets)
    {
        $this->matchNotGETSGets = $matchNotGETSGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNotGETSGets()
    {
        $this->matchNotGETSGets = null;
        return $this;
    }

    /**
     * Getter for matchGETSANGets
     *
     * @return bool
     */
    public function getMatchGETSANGets()
    {
        return $this->matchGETSANGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGETSANGets;
    }

    /**
     * Setter for matchGETSANGets
     *
     * @param bool $matchGETSANGets
     * @return $this
     */
    public function setMatchGETSANGets($matchGETSANGets)
    {
        $this->matchGETSANGets = $matchGETSANGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGETSANGets()
    {
        $this->matchGETSANGets = null;
        return $this;
    }

    /**
     * Getter for matchGETSNTGets
     *
     * @return bool
     */
    public function getMatchGETSNTGets()
    {
        return $this->matchGETSNTGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGETSNTGets;
    }

    /**
     * Setter for matchGETSNTGets
     *
     * @param bool $matchGETSNTGets
     * @return $this
     */
    public function setMatchGETSNTGets($matchGETSNTGets)
    {
        $this->matchGETSNTGets = $matchGETSNTGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGETSNTGets()
    {
        $this->matchGETSNTGets = null;
        return $this;
    }

    /**
     * Getter for matchGETSFCGets
     *
     * @return bool
     */
    public function getMatchGETSFCGets()
    {
        return $this->matchGETSFCGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGETSFCGets;
    }

    /**
     * Setter for matchGETSFCGets
     *
     * @param bool $matchGETSFCGets
     * @return $this
     */
    public function setMatchGETSFCGets($matchGETSFCGets)
    {
        $this->matchGETSFCGets = $matchGETSFCGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGETSFCGets()
    {
        $this->matchGETSFCGets = null;
        return $this;
    }

    /**
     * Getter for matchGETSFCANGets
     *
     * @return bool
     */
    public function getMatchGETSFCANGets()
    {
        return $this->matchGETSFCANGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGETSFCANGets;
    }

    /**
     * Setter for matchGETSFCANGets
     *
     * @param bool $matchGETSFCANGets
     * @return $this
     */
    public function setMatchGETSFCANGets($matchGETSFCANGets)
    {
        $this->matchGETSFCANGets = $matchGETSFCANGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGETSFCANGets()
    {
        $this->matchGETSFCANGets = null;
        return $this;
    }

    /**
     * Getter for matchGETSFCNTGets
     *
     * @return bool
     */
    public function getMatchGETSFCNTGets()
    {
        return $this->matchGETSFCNTGets instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchGETSFCNTGets;
    }

    /**
     * Setter for matchGETSFCNTGets
     *
     * @param bool $matchGETSFCNTGets
     * @return $this
     */
    public function setMatchGETSFCNTGets($matchGETSFCNTGets)
    {
        $this->matchGETSFCNTGets = $matchGETSFCNTGets;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchGETSFCNTGets()
    {
        $this->matchGETSFCNTGets = null;
        return $this;
    }

    /**
     * Getter for matchLocation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria
     */
    public function getMatchLocation()
    {
        return $this->matchLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchLocation;
    }

    /**
     * Setter for matchLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria $matchLocation
     * @return $this
     */
    public function setMatchLocation(\CWM\BroadWorksConnector\Ocip\Models\LocationCriteria $matchLocation)
    {
        $this->matchLocation = $matchLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchLocation()
    {
        $this->matchLocation = null;
        return $this;
    }

    /**
     * Getter for matchRoaming
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria
     */
    public function getMatchRoaming()
    {
        return $this->matchRoaming instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchRoaming;
    }

    /**
     * Setter for matchRoaming
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria $matchRoaming
     * @return $this
     */
    public function setMatchRoaming(\CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria $matchRoaming)
    {
        $this->matchRoaming = $matchRoaming;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchRoaming()
    {
        $this->matchRoaming = null;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @return string|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param string|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        if ($timeSchedule === null) {
            $this->timeSchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeSchedule = $timeSchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return string|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param string|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        if ($holidaySchedule === null) {
            $this->holidaySchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidaySchedule = $holidaySchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for matchNumberPortabilityStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus(\CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList $matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus = $matchNumberPortabilityStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNumberPortabilityStatus()
    {
        $this->matchNumberPortabilityStatus = null;
        return $this;
    }


}

