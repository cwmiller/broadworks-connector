<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNModifyPolicyRequest
 *
 * Modify the enterprise level data associated with a Voice VPN location code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName locationDialingCode
     * @var string|null
     */
    private $locationDialingCode = null;

    /**
     * @ElementName minExtensionLength
     * @var int|null
     */
    private $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @var int|null
     */
    private $maxExtensionLength = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName routeGroupId
     * @var string|null
     */
    private $routeGroupId = null;

    /**
     * @ElementName policySelection
     * @var string|null
     */
    private $policySelection = null;

    /**
     * @ElementName digitManipulation
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[]
     */
    private $digitManipulation = array(
        
    );

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

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
     * Getter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @return string|null
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @param string|null $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * Getter for minExtensionLength
     *
     * @ElementName minExtensionLength
     * @return int|null
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @ElementName minExtensionLength
     * @param int|null $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @ElementName maxExtensionLength
     * @return int|null
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @ElementName maxExtensionLength
     * @param int|null $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
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
     * Getter for routeGroupId
     *
     * @ElementName routeGroupId
     * @return string|null
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId;
    }

    /**
     * Setter for routeGroupId
     *
     * @ElementName routeGroupId
     * @param string|null $routeGroupId
     * @return $this
     */
    public function setRouteGroupId($routeGroupId)
    {
        $this->routeGroupId = $routeGroupId;
        return $this;
    }

    /**
     * Getter for policySelection
     *
     * @ElementName policySelection
     * @return string|null
     */
    public function getPolicySelection()
    {
        return $this->policySelection;
    }

    /**
     * Setter for policySelection
     *
     * @ElementName policySelection
     * @param string|null $policySelection
     * @return $this
     */
    public function setPolicySelection($policySelection)
    {
        $this->policySelection = $policySelection;
        return $this;
    }

    /**
     * Getter for digitManipulation
     *
     * @ElementName digitManipulation
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[]
     */
    public function getDigitManipulation()
    {
        return $this->digitManipulation;
    }

    /**
     * Setter for digitManipulation
     *
     * @ElementName digitManipulation
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation[] $digitManipulation
     * @return $this
     */
    public function setDigitManipulation($digitManipulation)
    {
        $this->digitManipulation = $digitManipulation;
        return $this;
    }

    /**
     * Adder for digitManipulation
     *
     * @ElementName digitManipulation
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDigitManipulation $digitManipulation
     * @return $this
     */
    public function addDigitManipulation($digitManipulation)
    {
        $this->digitManipulation []= $digitManipulation;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }


}

