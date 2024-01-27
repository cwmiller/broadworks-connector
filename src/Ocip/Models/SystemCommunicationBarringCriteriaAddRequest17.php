<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaAddRequest17
 *
 * Add a new Communication Barring Criteria.
 *         The following elements are only used in AS data mode:
 *           matchNumberPortabilityStatus  
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5777","type":"sequence"}]
 */
class SystemCommunicationBarringCriteriaAddRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName matchCallType
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchCallType = [
        
    ];

    /**
     * @ElementName matchAlternateCallIndicator
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchAlternateCallIndicator = [
        
    ];

    /**
     * @ElementName matchVirtualOnNetCallType
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchVirtualOnNetCallType = [
        
    ];

    /**
     * @ElementName matchPublicNetwork
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchPublicNetwork = null;

    /**
     * @ElementName matchPrivateNetwork
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchPrivateNetwork = null;

    /**
     * @ElementName matchLocalCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchOtherCategory = null;

    /**
     * @ElementName matchInterNetwork
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInterNetwork = null;

    /**
     * @ElementName matchInterHostingNE
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInterHostingNE = null;

    /**
     * @ElementName matchInterAS
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInterAS = null;

    /**
     * @ElementName matchIntraAS
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchIntraAS = null;

    /**
     * @ElementName matchChargeCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchChargeCalls = null;

    /**
     * @ElementName matchNoChargeCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchNoChargeCalls = null;

    /**
     * @ElementName matchGroupCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchGroupCalls = null;

    /**
     * @ElementName matchEnterpriseCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchEnterpriseCalls = null;

    /**
     * @ElementName matchNetworkCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchNetworkCalls = null;

    /**
     * @ElementName matchNetworkURLCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchNetworkURLCalls = null;

    /**
     * @ElementName matchRepairCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchRepairCalls = null;

    /**
     * @ElementName matchEmergencyCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchEmergencyCalls = null;

    /**
     * @ElementName matchInternalCalls
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var bool|null
     */
    protected $matchInternalCalls = null;

    /**
     * @ElementName matchLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var \CWM\BroadWorksConnector\Ocip\Models\LocationCriteria|null
     */
    protected $matchLocation = null;

    /**
     * @ElementName matchRoaming
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoamingCriteria|null
     */
    protected $matchRoaming = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5777
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchNumberPortabilityStatus = [
        
    ];

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
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return string[]
     */
    public function getMatchCallType()
    {
        return $this->matchCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @param string[] $matchCallType
     * @return $this
     */
    public function setMatchCallType(array $matchCallType)
    {
        $this->matchCallType = $matchCallType;
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
     * Adder for matchCallType
     *
     * @param string $matchCallType
     * @return $this
     */
    public function addMatchCallType(string $matchCallType)
    {
        $this->matchCallType[] = $matchCallType;
        return $this;
    }

    /**
     * Getter for matchAlternateCallIndicator
     *
     * @return string[]
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @param string[] $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator(array $matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
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
     * Adder for matchAlternateCallIndicator
     *
     * @param string $matchAlternateCallIndicator
     * @return $this
     */
    public function addMatchAlternateCallIndicator(string $matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator[] = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for matchVirtualOnNetCallType
     *
     * @return string[]
     */
    public function getMatchVirtualOnNetCallType()
    {
        return $this->matchVirtualOnNetCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchVirtualOnNetCallType;
    }

    /**
     * Setter for matchVirtualOnNetCallType
     *
     * @param string[] $matchVirtualOnNetCallType
     * @return $this
     */
    public function setMatchVirtualOnNetCallType(array $matchVirtualOnNetCallType)
    {
        $this->matchVirtualOnNetCallType = $matchVirtualOnNetCallType;
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
     * Adder for matchVirtualOnNetCallType
     *
     * @param string $matchVirtualOnNetCallType
     * @return $this
     */
    public function addMatchVirtualOnNetCallType(string $matchVirtualOnNetCallType)
    {
        $this->matchVirtualOnNetCallType[] = $matchVirtualOnNetCallType;
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
     * @return string
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param string $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
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
     * @return string
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param string $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
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
     * @return string[]
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @param string[] $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus(array $matchNumberPortabilityStatus)
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

    /**
     * Adder for matchNumberPortabilityStatus
     *
     * @param string $matchNumberPortabilityStatus
     * @return $this
     */
    public function addMatchNumberPortabilityStatus(string $matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus[] = $matchNumberPortabilityStatus;
        return $this;
    }
}

