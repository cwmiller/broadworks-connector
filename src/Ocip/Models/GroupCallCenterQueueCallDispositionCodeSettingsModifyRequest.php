<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest
 *
 * Modify the enterprise level data associated with Call Center Agents Unavailable
 * Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enableCallDispositionCodes
     * @var bool|null
     */
    private $enableCallDispositionCodes = null;

    /**
     * @ElementName includeOrganizationCodes
     * @var bool|null
     */
    private $includeOrganizationCodes = null;

    /**
     * @ElementName forceUseOfCallDispositionCodes
     * @var bool|null
     */
    private $forceUseOfCallDispositionCodes = null;

    /**
     * @ElementName defaultCallDispositionCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    private $defaultCallDispositionCode = null;

    /**
     * @ElementName callDispositionCodeActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    private $callDispositionCodeActivation = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for enableCallDispositionCodes
     *
     * @ElementName enableCallDispositionCodes
     * @return bool|null
     */
    public function getEnableCallDispositionCodes()
    {
        return $this->enableCallDispositionCodes;
    }

    /**
     * Setter for enableCallDispositionCodes
     *
     * @ElementName enableCallDispositionCodes
     * @param bool|null $enableCallDispositionCodes
     * @return $this
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes)
    {
        $this->enableCallDispositionCodes = $enableCallDispositionCodes;
        return $this;
    }

    /**
     * Getter for includeOrganizationCodes
     *
     * @ElementName includeOrganizationCodes
     * @return bool|null
     */
    public function getIncludeOrganizationCodes()
    {
        return $this->includeOrganizationCodes;
    }

    /**
     * Setter for includeOrganizationCodes
     *
     * @ElementName includeOrganizationCodes
     * @param bool|null $includeOrganizationCodes
     * @return $this
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes)
    {
        $this->includeOrganizationCodes = $includeOrganizationCodes;
        return $this;
    }

    /**
     * Getter for forceUseOfCallDispositionCodes
     *
     * @ElementName forceUseOfCallDispositionCodes
     * @return bool|null
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return $this->forceUseOfCallDispositionCodes;
    }

    /**
     * Setter for forceUseOfCallDispositionCodes
     *
     * @ElementName forceUseOfCallDispositionCodes
     * @param bool|null $forceUseOfCallDispositionCodes
     * @return $this
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes)
    {
        $this->forceUseOfCallDispositionCodes = $forceUseOfCallDispositionCodes;
        return $this;
    }

    /**
     * Getter for defaultCallDispositionCode
     *
     * @ElementName defaultCallDispositionCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode;
    }

    /**
     * Setter for defaultCallDispositionCode
     *
     * @ElementName defaultCallDispositionCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null $defaultCallDispositionCode
     * @return $this
     */
    public function setDefaultCallDispositionCode(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel $defaultCallDispositionCode)
    {
        $this->defaultCallDispositionCode = $defaultCallDispositionCode;
        return $this;
    }

    /**
     * Getter for callDispositionCodeActivation
     *
     * @ElementName callDispositionCodeActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation;
    }

    /**
     * Setter for callDispositionCodeActivation
     *
     * @ElementName callDispositionCodeActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[] $callDispositionCodeActivation
     * @return $this
     */
    public function setCallDispositionCodeActivation(array $callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation = $callDispositionCodeActivation;
        return $this;
    }

    /**
     * Adder for callDispositionCodeActivation
     *
     * @ElementName callDispositionCodeActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation $callDispositionCodeActivation
     * @return $this
     */
    public function addCallDispositionCodeActivation($callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation []= $callDispositionCodeActivation;
        return $this;
    }


}

