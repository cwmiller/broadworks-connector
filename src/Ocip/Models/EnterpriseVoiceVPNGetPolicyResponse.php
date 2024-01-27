<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetPolicyResponse
 *
 * Response to EnterpriseVoiceVPNGetPolicyRequest.
 *
 * @see EnterpriseVoiceVPNGetPolicyRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1137","type":"sequence","children":[{"id":"405ec18fe08719ecf74e749d7e18c88f:1143","type":"choice"}]}]
 */
class EnterpriseVoiceVPNGetPolicyResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1137
     * @MinInclusive 0
     * @MaxInclusive 100
     * @var int|null
     */
    protected $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1137
     * @MinInclusive 0
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxExtensionLength = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1137
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName routeGroupId
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1137
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $routeGroupId = null;

    /**
     * @ElementName policySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1137
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection|null
     */
    protected $policySelection = null;

    /**
     * @ElementName digitManipulation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation
     * @Array
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationNoValue,\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationOptionalValue,\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulationRequiredValue
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1143
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[]
     */
    protected $digitManipulation = [
        
    ];

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1143
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $treatmentId = null;

    /**
     * Getter for minExtensionLength
     *
     * @return int
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @param int $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtensionLength()
    {
        $this->minExtensionLength = null;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @return int
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @param int $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtensionLength()
    {
        $this->maxExtensionLength = null;
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
     * Getter for routeGroupId
     *
     * @return string
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeGroupId;
    }

    /**
     * Setter for routeGroupId
     *
     * @param string $routeGroupId
     * @return $this
     */
    public function setRouteGroupId($routeGroupId)
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
     * Getter for policySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection
     */
    public function getPolicySelection()
    {
        return $this->policySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection
     * @return $this
     */
    public function setPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNPolicySelection $policySelection)
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
     * Getter for digitManipulation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[]
     */
    public function getDigitManipulation()
    {
        return $this->digitManipulation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitManipulation;
    }

    /**
     * Setter for digitManipulation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[] $digitManipulation
     * @return $this
     */
    public function setDigitManipulation(array $digitManipulation)
    {
        $this->digitManipulation = $digitManipulation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitManipulation()
    {
        $this->digitManipulation = null;
        return $this;
    }

    /**
     * Adder for digitManipulation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation $digitManipulation
     * @return $this
     */
    public function addDigitManipulation($digitManipulation)
    {
        $this->digitManipulation[] = $digitManipulation;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }
}

