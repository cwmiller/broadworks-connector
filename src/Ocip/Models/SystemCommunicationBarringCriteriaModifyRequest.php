<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaModifyRequest
 *
 * Modify an existing Communication Barring Criteria.
 *         The following elements are only used in AS data mode:
 *           matchNumberPortabilityStatus  
 * 	    The following elements are only used in XS data mode and ignored in AS data
 * mode:
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
 */
class SystemCommunicationBarringCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @ElementName matchVirtualOnNetCallType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null
     */
    private $matchVirtualOnNetCallType = null;

    /**
     * @ElementName matchPublicNetwork
     * @var bool|null
     */
    private $matchPublicNetwork = null;

    /**
     * @ElementName matchPrivateNetwork
     * @var bool|null
     */
    private $matchPrivateNetwork = null;

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
     * @ElementName matchInterNetwork
     * @var bool|null
     */
    private $matchInterNetwork = null;

    /**
     * @ElementName matchInterHostingNE
     * @var bool|null
     */
    private $matchInterHostingNE = null;

    /**
     * @ElementName matchInterAS
     * @var bool|null
     */
    private $matchInterAS = null;

    /**
     * @ElementName matchIntraAS
     * @var bool|null
     */
    private $matchIntraAS = null;

    /**
     * @ElementName matchChargeCalls
     * @var bool|null
     */
    private $matchChargeCalls = null;

    /**
     * @ElementName matchNoChargeCalls
     * @var bool|null
     */
    private $matchNoChargeCalls = null;

    /**
     * @ElementName matchGroupCalls
     * @var bool|null
     */
    private $matchGroupCalls = null;

    /**
     * @ElementName matchEnterpriseCalls
     * @var bool|null
     */
    private $matchEnterpriseCalls = null;

    /**
     * @ElementName matchNetworkCalls
     * @var bool|null
     */
    private $matchNetworkCalls = null;

    /**
     * @ElementName matchNetworkURLCalls
     * @var bool|null
     */
    private $matchNetworkURLCalls = null;

    /**
     * @ElementName matchRepairCalls
     * @var bool|null
     */
    private $matchRepairCalls = null;

    /**
     * @ElementName matchEmergencyCalls
     * @var bool|null
     */
    private $matchEmergencyCalls = null;

    /**
     * @ElementName matchInternalCalls
     * @var bool|null
     */
    private $matchInternalCalls = null;

    /**
     * @ElementName matchOtherGETSGets
     * @var bool|null
     */
    private $matchOtherGETSGets = null;

    /**
     * @ElementName matchNotGETSGets
     * @var bool|null
     */
    private $matchNotGETSGets = null;

    /**
     * @ElementName matchGETSANGets
     * @var bool|null
     */
    private $matchGETSANGets = null;

    /**
     * @ElementName matchGETSNTGets
     * @var bool|null
     */
    private $matchGETSNTGets = null;

    /**
     * @ElementName matchGETSFCGets
     * @var bool|null
     */
    private $matchGETSFCGets = null;

    /**
     * @ElementName matchGETSFCANGets
     * @var bool|null
     */
    private $matchGETSFCANGets = null;

    /**
     * @ElementName matchGETSFCNTGets
     * @var bool|null
     */
    private $matchGETSFCNTGets = null;

    /**
     * @ElementName matchLocation
     * @var \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria|null
     */
    private $matchLocation = null;

    /**
     * @ElementName matchRoaming
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria|null
     */
    private $matchRoaming = null;

    /**
     * @ElementName timeSchedule
     * @var string|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @var string|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null
     */
    private $matchNumberPortabilityStatus = null;

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
    public function setMatchCallType(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList $matchCallType)
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
    public function setMatchAlternateCallIndicator(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for matchVirtualOnNetCallType
     *
     * @ElementName matchVirtualOnNetCallType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null
     */
    public function getMatchVirtualOnNetCallType()
    {
        return $this->matchVirtualOnNetCallType;
    }

    /**
     * Setter for matchVirtualOnNetCallType
     *
     * @ElementName matchVirtualOnNetCallType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList|null $matchVirtualOnNetCallType
     * @return $this
     */
    public function setMatchVirtualOnNetCallType(\CWM\BroadWorksConnector\Ocip\Models\ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType)
    {
        $this->matchVirtualOnNetCallType = $matchVirtualOnNetCallType;
        return $this;
    }

    /**
     * Getter for matchPublicNetwork
     *
     * @ElementName matchPublicNetwork
     * @return bool|null
     */
    public function getMatchPublicNetwork()
    {
        return $this->matchPublicNetwork;
    }

    /**
     * Setter for matchPublicNetwork
     *
     * @ElementName matchPublicNetwork
     * @param bool|null $matchPublicNetwork
     * @return $this
     */
    public function setMatchPublicNetwork($matchPublicNetwork)
    {
        $this->matchPublicNetwork = $matchPublicNetwork;
        return $this;
    }

    /**
     * Getter for matchPrivateNetwork
     *
     * @ElementName matchPrivateNetwork
     * @return bool|null
     */
    public function getMatchPrivateNetwork()
    {
        return $this->matchPrivateNetwork;
    }

    /**
     * Setter for matchPrivateNetwork
     *
     * @ElementName matchPrivateNetwork
     * @param bool|null $matchPrivateNetwork
     * @return $this
     */
    public function setMatchPrivateNetwork($matchPrivateNetwork)
    {
        $this->matchPrivateNetwork = $matchPrivateNetwork;
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

    /**
     * Getter for matchInterNetwork
     *
     * @ElementName matchInterNetwork
     * @return bool|null
     */
    public function getMatchInterNetwork()
    {
        return $this->matchInterNetwork;
    }

    /**
     * Setter for matchInterNetwork
     *
     * @ElementName matchInterNetwork
     * @param bool|null $matchInterNetwork
     * @return $this
     */
    public function setMatchInterNetwork($matchInterNetwork)
    {
        $this->matchInterNetwork = $matchInterNetwork;
        return $this;
    }

    /**
     * Getter for matchInterHostingNE
     *
     * @ElementName matchInterHostingNE
     * @return bool|null
     */
    public function getMatchInterHostingNE()
    {
        return $this->matchInterHostingNE;
    }

    /**
     * Setter for matchInterHostingNE
     *
     * @ElementName matchInterHostingNE
     * @param bool|null $matchInterHostingNE
     * @return $this
     */
    public function setMatchInterHostingNE($matchInterHostingNE)
    {
        $this->matchInterHostingNE = $matchInterHostingNE;
        return $this;
    }

    /**
     * Getter for matchInterAS
     *
     * @ElementName matchInterAS
     * @return bool|null
     */
    public function getMatchInterAS()
    {
        return $this->matchInterAS;
    }

    /**
     * Setter for matchInterAS
     *
     * @ElementName matchInterAS
     * @param bool|null $matchInterAS
     * @return $this
     */
    public function setMatchInterAS($matchInterAS)
    {
        $this->matchInterAS = $matchInterAS;
        return $this;
    }

    /**
     * Getter for matchIntraAS
     *
     * @ElementName matchIntraAS
     * @return bool|null
     */
    public function getMatchIntraAS()
    {
        return $this->matchIntraAS;
    }

    /**
     * Setter for matchIntraAS
     *
     * @ElementName matchIntraAS
     * @param bool|null $matchIntraAS
     * @return $this
     */
    public function setMatchIntraAS($matchIntraAS)
    {
        $this->matchIntraAS = $matchIntraAS;
        return $this;
    }

    /**
     * Getter for matchChargeCalls
     *
     * @ElementName matchChargeCalls
     * @return bool|null
     */
    public function getMatchChargeCalls()
    {
        return $this->matchChargeCalls;
    }

    /**
     * Setter for matchChargeCalls
     *
     * @ElementName matchChargeCalls
     * @param bool|null $matchChargeCalls
     * @return $this
     */
    public function setMatchChargeCalls($matchChargeCalls)
    {
        $this->matchChargeCalls = $matchChargeCalls;
        return $this;
    }

    /**
     * Getter for matchNoChargeCalls
     *
     * @ElementName matchNoChargeCalls
     * @return bool|null
     */
    public function getMatchNoChargeCalls()
    {
        return $this->matchNoChargeCalls;
    }

    /**
     * Setter for matchNoChargeCalls
     *
     * @ElementName matchNoChargeCalls
     * @param bool|null $matchNoChargeCalls
     * @return $this
     */
    public function setMatchNoChargeCalls($matchNoChargeCalls)
    {
        $this->matchNoChargeCalls = $matchNoChargeCalls;
        return $this;
    }

    /**
     * Getter for matchGroupCalls
     *
     * @ElementName matchGroupCalls
     * @return bool|null
     */
    public function getMatchGroupCalls()
    {
        return $this->matchGroupCalls;
    }

    /**
     * Setter for matchGroupCalls
     *
     * @ElementName matchGroupCalls
     * @param bool|null $matchGroupCalls
     * @return $this
     */
    public function setMatchGroupCalls($matchGroupCalls)
    {
        $this->matchGroupCalls = $matchGroupCalls;
        return $this;
    }

    /**
     * Getter for matchEnterpriseCalls
     *
     * @ElementName matchEnterpriseCalls
     * @return bool|null
     */
    public function getMatchEnterpriseCalls()
    {
        return $this->matchEnterpriseCalls;
    }

    /**
     * Setter for matchEnterpriseCalls
     *
     * @ElementName matchEnterpriseCalls
     * @param bool|null $matchEnterpriseCalls
     * @return $this
     */
    public function setMatchEnterpriseCalls($matchEnterpriseCalls)
    {
        $this->matchEnterpriseCalls = $matchEnterpriseCalls;
        return $this;
    }

    /**
     * Getter for matchNetworkCalls
     *
     * @ElementName matchNetworkCalls
     * @return bool|null
     */
    public function getMatchNetworkCalls()
    {
        return $this->matchNetworkCalls;
    }

    /**
     * Setter for matchNetworkCalls
     *
     * @ElementName matchNetworkCalls
     * @param bool|null $matchNetworkCalls
     * @return $this
     */
    public function setMatchNetworkCalls($matchNetworkCalls)
    {
        $this->matchNetworkCalls = $matchNetworkCalls;
        return $this;
    }

    /**
     * Getter for matchNetworkURLCalls
     *
     * @ElementName matchNetworkURLCalls
     * @return bool|null
     */
    public function getMatchNetworkURLCalls()
    {
        return $this->matchNetworkURLCalls;
    }

    /**
     * Setter for matchNetworkURLCalls
     *
     * @ElementName matchNetworkURLCalls
     * @param bool|null $matchNetworkURLCalls
     * @return $this
     */
    public function setMatchNetworkURLCalls($matchNetworkURLCalls)
    {
        $this->matchNetworkURLCalls = $matchNetworkURLCalls;
        return $this;
    }

    /**
     * Getter for matchRepairCalls
     *
     * @ElementName matchRepairCalls
     * @return bool|null
     */
    public function getMatchRepairCalls()
    {
        return $this->matchRepairCalls;
    }

    /**
     * Setter for matchRepairCalls
     *
     * @ElementName matchRepairCalls
     * @param bool|null $matchRepairCalls
     * @return $this
     */
    public function setMatchRepairCalls($matchRepairCalls)
    {
        $this->matchRepairCalls = $matchRepairCalls;
        return $this;
    }

    /**
     * Getter for matchEmergencyCalls
     *
     * @ElementName matchEmergencyCalls
     * @return bool|null
     */
    public function getMatchEmergencyCalls()
    {
        return $this->matchEmergencyCalls;
    }

    /**
     * Setter for matchEmergencyCalls
     *
     * @ElementName matchEmergencyCalls
     * @param bool|null $matchEmergencyCalls
     * @return $this
     */
    public function setMatchEmergencyCalls($matchEmergencyCalls)
    {
        $this->matchEmergencyCalls = $matchEmergencyCalls;
        return $this;
    }

    /**
     * Getter for matchInternalCalls
     *
     * @ElementName matchInternalCalls
     * @return bool|null
     */
    public function getMatchInternalCalls()
    {
        return $this->matchInternalCalls;
    }

    /**
     * Setter for matchInternalCalls
     *
     * @ElementName matchInternalCalls
     * @param bool|null $matchInternalCalls
     * @return $this
     */
    public function setMatchInternalCalls($matchInternalCalls)
    {
        $this->matchInternalCalls = $matchInternalCalls;
        return $this;
    }

    /**
     * Getter for matchOtherGETSGets
     *
     * @ElementName matchOtherGETSGets
     * @return bool|null
     */
    public function getMatchOtherGETSGets()
    {
        return $this->matchOtherGETSGets;
    }

    /**
     * Setter for matchOtherGETSGets
     *
     * @ElementName matchOtherGETSGets
     * @param bool|null $matchOtherGETSGets
     * @return $this
     */
    public function setMatchOtherGETSGets($matchOtherGETSGets)
    {
        $this->matchOtherGETSGets = $matchOtherGETSGets;
        return $this;
    }

    /**
     * Getter for matchNotGETSGets
     *
     * @ElementName matchNotGETSGets
     * @return bool|null
     */
    public function getMatchNotGETSGets()
    {
        return $this->matchNotGETSGets;
    }

    /**
     * Setter for matchNotGETSGets
     *
     * @ElementName matchNotGETSGets
     * @param bool|null $matchNotGETSGets
     * @return $this
     */
    public function setMatchNotGETSGets($matchNotGETSGets)
    {
        $this->matchNotGETSGets = $matchNotGETSGets;
        return $this;
    }

    /**
     * Getter for matchGETSANGets
     *
     * @ElementName matchGETSANGets
     * @return bool|null
     */
    public function getMatchGETSANGets()
    {
        return $this->matchGETSANGets;
    }

    /**
     * Setter for matchGETSANGets
     *
     * @ElementName matchGETSANGets
     * @param bool|null $matchGETSANGets
     * @return $this
     */
    public function setMatchGETSANGets($matchGETSANGets)
    {
        $this->matchGETSANGets = $matchGETSANGets;
        return $this;
    }

    /**
     * Getter for matchGETSNTGets
     *
     * @ElementName matchGETSNTGets
     * @return bool|null
     */
    public function getMatchGETSNTGets()
    {
        return $this->matchGETSNTGets;
    }

    /**
     * Setter for matchGETSNTGets
     *
     * @ElementName matchGETSNTGets
     * @param bool|null $matchGETSNTGets
     * @return $this
     */
    public function setMatchGETSNTGets($matchGETSNTGets)
    {
        $this->matchGETSNTGets = $matchGETSNTGets;
        return $this;
    }

    /**
     * Getter for matchGETSFCGets
     *
     * @ElementName matchGETSFCGets
     * @return bool|null
     */
    public function getMatchGETSFCGets()
    {
        return $this->matchGETSFCGets;
    }

    /**
     * Setter for matchGETSFCGets
     *
     * @ElementName matchGETSFCGets
     * @param bool|null $matchGETSFCGets
     * @return $this
     */
    public function setMatchGETSFCGets($matchGETSFCGets)
    {
        $this->matchGETSFCGets = $matchGETSFCGets;
        return $this;
    }

    /**
     * Getter for matchGETSFCANGets
     *
     * @ElementName matchGETSFCANGets
     * @return bool|null
     */
    public function getMatchGETSFCANGets()
    {
        return $this->matchGETSFCANGets;
    }

    /**
     * Setter for matchGETSFCANGets
     *
     * @ElementName matchGETSFCANGets
     * @param bool|null $matchGETSFCANGets
     * @return $this
     */
    public function setMatchGETSFCANGets($matchGETSFCANGets)
    {
        $this->matchGETSFCANGets = $matchGETSFCANGets;
        return $this;
    }

    /**
     * Getter for matchGETSFCNTGets
     *
     * @ElementName matchGETSFCNTGets
     * @return bool|null
     */
    public function getMatchGETSFCNTGets()
    {
        return $this->matchGETSFCNTGets;
    }

    /**
     * Setter for matchGETSFCNTGets
     *
     * @ElementName matchGETSFCNTGets
     * @param bool|null $matchGETSFCNTGets
     * @return $this
     */
    public function setMatchGETSFCNTGets($matchGETSFCNTGets)
    {
        $this->matchGETSFCNTGets = $matchGETSFCNTGets;
        return $this;
    }

    /**
     * Getter for matchLocation
     *
     * @ElementName matchLocation
     * @return \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria|null
     */
    public function getMatchLocation()
    {
        return $this->matchLocation;
    }

    /**
     * Setter for matchLocation
     *
     * @ElementName matchLocation
     * @param \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria|null $matchLocation
     * @return $this
     */
    public function setMatchLocation(\CWM\BroadWorksConnector\Ocip\Models\LocationCriteria $matchLocation)
    {
        $this->matchLocation = $matchLocation;
        return $this;
    }

    /**
     * Getter for matchRoaming
     *
     * @ElementName matchRoaming
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria|null
     */
    public function getMatchRoaming()
    {
        return $this->matchRoaming;
    }

    /**
     * Setter for matchRoaming
     *
     * @ElementName matchRoaming
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria|null $matchRoaming
     * @return $this
     */
    public function setMatchRoaming(\CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria $matchRoaming)
    {
        $this->matchRoaming = $matchRoaming;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return string|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return string|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param string|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for matchNumberPortabilityStatus
     *
     * @ElementName matchNumberPortabilityStatus
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @ElementName matchNumberPortabilityStatus
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus(\CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList $matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus = $matchNumberPortabilityStatus;
        return $this;
    }


}

