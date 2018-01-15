<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetDefaultResponse
 *
 * Response to EnterpriseVoiceVPNGetDefaultResponse.
 */
class EnterpriseVoiceVPNGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName policySelection
     * @var string[]
     */
    private $policySelection = array(
        
    );

    /**
     * @ElementName digitManipulationOperation
     * @var string[]
     */
    private $digitManipulationOperation = array(
        
    );

    /**
     * @ElementName routeGroupId
     * @var string[]
     */
    private $routeGroupId = array(
        
    );

    /**
     * @ElementName treatment
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[]
     */
    private $treatment = array(
        
    );

    /**
     * Getter for policySelection
     *
     * @ElementName policySelection
     * @return string[]
     */
    public function getPolicySelection()
    {
        return $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @ElementName policySelection
     * @param string[] $policySelection
     * @return $this
     */
    public function setPolicySelection($policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }

    /**
     * Adder for policySelection
     *
     * @ElementName policySelection
     * @param string $policySelection
     * @return $this
     */
    public function addPolicySelection($policySelection)
    {
        $this->policySelection []= $policySelection;
        return $this;
    }

    /**
     * Getter for digitManipulationOperation
     *
     * @ElementName digitManipulationOperation
     * @return string[]
     */
    public function getDigitManipulationOperation()
    {
        return $this->digitManipulationOperation;
    }

    /**
     * Setter for digitManipulationOperation
     *
     * @ElementName digitManipulationOperation
     * @param string[] $digitManipulationOperation
     * @return $this
     */
    public function setDigitManipulationOperation($digitManipulationOperation)
    {
        $this->digitManipulationOperation = $digitManipulationOperation;
        return $this;
    }

    /**
     * Adder for digitManipulationOperation
     *
     * @ElementName digitManipulationOperation
     * @param string $digitManipulationOperation
     * @return $this
     */
    public function addDigitManipulationOperation($digitManipulationOperation)
    {
        $this->digitManipulationOperation []= $digitManipulationOperation;
        return $this;
    }

    /**
     * Getter for routeGroupId
     *
     * @ElementName routeGroupId
     * @return string[]
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId;
    }

    /**
     * Setter for routeGroupId
     *
     * @ElementName routeGroupId
     * @param string[] $routeGroupId
     * @return $this
     */
    public function setRouteGroupId($routeGroupId)
    {
        $this->routeGroupId = $routeGroupId;
        return $this;
    }

    /**
     * Adder for routeGroupId
     *
     * @ElementName routeGroupId
     * @param string $routeGroupId
     * @return $this
     */
    public function addRouteGroupId($routeGroupId)
    {
        $this->routeGroupId []= $routeGroupId;
        return $this;
    }

    /**
     * Getter for treatment
     *
     * @ElementName treatment
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Setter for treatment
     *
     * @ElementName treatment
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry[] $treatment
     * @return $this
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;
        return $this;
    }

    /**
     * Adder for treatment
     *
     * @ElementName treatment
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNTreatmentEntry $treatment
     * @return $this
     */
    public function addTreatment($treatment)
    {
        $this->treatment []= $treatment;
        return $this;
    }


}

