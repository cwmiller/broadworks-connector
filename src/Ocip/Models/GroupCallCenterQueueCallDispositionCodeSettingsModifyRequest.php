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
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enableCallDispositionCodes
     * @Type bool
     * @var bool|null
     */
    private $enableCallDispositionCodes = null;

    /**
     * @ElementName includeOrganizationCodes
     * @Type bool
     * @var bool|null
     */
    private $includeOrganizationCodes = null;

    /**
     * @ElementName forceUseOfCallDispositionCodes
     * @Type bool
     * @var bool|null
     */
    private $forceUseOfCallDispositionCodes = null;

    /**
     * @ElementName defaultCallDispositionCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultCallDispositionCode = null;

    /**
     * @ElementName callDispositionCodeActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    private $callDispositionCodeActivation = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for enableCallDispositionCodes
     *
     * @return bool
     */
    public function getEnableCallDispositionCodes()
    {
        return $this->enableCallDispositionCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallDispositionCodes;
    }

    /**
     * Setter for enableCallDispositionCodes
     *
     * @param bool $enableCallDispositionCodes
     * @return $this
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes)
    {
        $this->enableCallDispositionCodes = $enableCallDispositionCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallDispositionCodes()
    {
        $this->enableCallDispositionCodes = null;
        return $this;
    }

    /**
     * Getter for includeOrganizationCodes
     *
     * @return bool
     */
    public function getIncludeOrganizationCodes()
    {
        return $this->includeOrganizationCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOrganizationCodes;
    }

    /**
     * Setter for includeOrganizationCodes
     *
     * @param bool $includeOrganizationCodes
     * @return $this
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes)
    {
        $this->includeOrganizationCodes = $includeOrganizationCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOrganizationCodes()
    {
        $this->includeOrganizationCodes = null;
        return $this;
    }

    /**
     * Getter for forceUseOfCallDispositionCodes
     *
     * @return bool
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return $this->forceUseOfCallDispositionCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceUseOfCallDispositionCodes;
    }

    /**
     * Setter for forceUseOfCallDispositionCodes
     *
     * @param bool $forceUseOfCallDispositionCodes
     * @return $this
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes)
    {
        $this->forceUseOfCallDispositionCodes = $forceUseOfCallDispositionCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceUseOfCallDispositionCodes()
    {
        $this->forceUseOfCallDispositionCodes = null;
        return $this;
    }

    /**
     * Getter for defaultCallDispositionCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCallDispositionCode;
    }

    /**
     * Setter for defaultCallDispositionCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null $defaultCallDispositionCode
     * @return $this
     */
    public function setDefaultCallDispositionCode(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel $defaultCallDispositionCode)
    {
        if ($defaultCallDispositionCode === null) {
            $this->defaultCallDispositionCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultCallDispositionCode = $defaultCallDispositionCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCallDispositionCode()
    {
        $this->defaultCallDispositionCode = null;
        return $this;
    }

    /**
     * Getter for callDispositionCodeActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callDispositionCodeActivation;
    }

    /**
     * Setter for callDispositionCodeActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[] $callDispositionCodeActivation
     * @return $this
     */
    public function setCallDispositionCodeActivation(array $callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation = $callDispositionCodeActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallDispositionCodeActivation()
    {
        $this->callDispositionCodeActivation = null;
        return $this;
    }

    /**
     * Adder for callDispositionCodeActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation $callDispositionCodeActivation
     * @return $this
     */
    public function addCallDispositionCodeActivation($callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation[] = $callDispositionCodeActivation;
        return $this;
    }


}

