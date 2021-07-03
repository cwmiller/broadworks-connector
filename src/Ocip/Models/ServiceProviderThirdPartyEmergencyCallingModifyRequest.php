<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderThirdPartyEmergencyCallingModifyRequest
 *
 * Modify the third-party emergency call service settings for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:6991","type":"sequence"}]
 */
class ServiceProviderThirdPartyEmergencyCallingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6991
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName allowActivation
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6991
     * @var bool|null
     */
    private $allowActivation = null;

    /**
     * @ElementName customerId
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6991
     * @MinLength 1
     * @MaxLength 36
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $customerId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for allowActivation
     *
     * @return bool
     */
    public function getAllowActivation()
    {
        return $this->allowActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowActivation;
    }

    /**
     * Setter for allowActivation
     *
     * @param bool $allowActivation
     * @return $this
     */
    public function setAllowActivation($allowActivation)
    {
        $this->allowActivation = $allowActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowActivation()
    {
        $this->allowActivation = null;
        return $this;
    }

    /**
     * Getter for customerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->customerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customerId;
    }

    /**
     * Setter for customerId
     *
     * @param string|null $customerId
     * @return $this
     */
    public function setCustomerId($customerId = null)
    {
        if ($customerId === null) {
            $this->customerId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->customerId = $customerId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomerId()
    {
        $this->customerId = null;
        return $this;
    }


}

