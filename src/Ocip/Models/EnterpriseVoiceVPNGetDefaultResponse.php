<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetDefaultResponse
 *
 * Response to EnterpriseVoiceVPNGetDefaultResponse.
 *
 * @see EnterpriseVoiceVPNGetDefaultResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1403","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName policySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     * @Array
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1403
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection[]
     */
    private $policySelection = array(
        
    );

    /**
     * @ElementName digitManipulationOperation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperation
     * @Array
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1403
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperation[]
     */
    private $digitManipulationOperation = array(
        
    );

    /**
     * @ElementName routeGroupId
     * @Type string
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1403
     * @var string[]
     */
    private $routeGroupId = array(
        
    );

    /**
     * @ElementName treatment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1403
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[]
     */
    private $treatment = array(
        
    );

    /**
     * Getter for policySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection[]
     */
    public function getPolicySelection()
    {
        return $this->policySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection[] $policySelection
     * @return $this
     */
    public function setPolicySelection(array $policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicySelection()
    {
        $this->policySelection = null;
        return $this;
    }

    /**
     * Adder for policySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection
     * @return $this
     */
    public function addPolicySelection($policySelection)
    {
        $this->policySelection[] = $policySelection;
        return $this;
    }

    /**
     * Getter for digitManipulationOperation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperation[]
     */
    public function getDigitManipulationOperation()
    {
        return $this->digitManipulationOperation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitManipulationOperation;
    }

    /**
     * Setter for digitManipulationOperation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperation[] $digitManipulationOperation
     * @return $this
     */
    public function setDigitManipulationOperation(array $digitManipulationOperation)
    {
        $this->digitManipulationOperation = $digitManipulationOperation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitManipulationOperation()
    {
        $this->digitManipulationOperation = null;
        return $this;
    }

    /**
     * Adder for digitManipulationOperation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOperation $digitManipulationOperation
     * @return $this
     */
    public function addDigitManipulationOperation($digitManipulationOperation)
    {
        $this->digitManipulationOperation[] = $digitManipulationOperation;
        return $this;
    }

    /**
     * Getter for routeGroupId
     *
     * @return string[]
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeGroupId;
    }

    /**
     * Setter for routeGroupId
     *
     * @param string[] $routeGroupId
     * @return $this
     */
    public function setRouteGroupId(array $routeGroupId)
    {
        $this->routeGroupId = $routeGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteGroupId()
    {
        $this->routeGroupId = null;
        return $this;
    }

    /**
     * Adder for routeGroupId
     *
     * @param string $routeGroupId
     * @return $this
     */
    public function addRouteGroupId(string $routeGroupId)
    {
        $this->routeGroupId[] = $routeGroupId;
        return $this;
    }

    /**
     * Getter for treatment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[]
     */
    public function getTreatment()
    {
        return $this->treatment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatment;
    }

    /**
     * Setter for treatment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[] $treatment
     * @return $this
     */
    public function setTreatment(array $treatment)
    {
        $this->treatment = $treatment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatment()
    {
        $this->treatment = null;
        return $this;
    }

    /**
     * Adder for treatment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry $treatment
     * @return $this
     */
    public function addTreatment($treatment)
    {
        $this->treatment[] = $treatment;
        return $this;
    }


}

