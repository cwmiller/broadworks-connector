<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerActivationRequest
 *
 * Activates or Deactivates the BroadWorks Mobile Manager.
 *         The deactivationReason is required when isActive is set to false. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerActivationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName deactivationReason
     * @var string|null
     */
    private $deactivationReason = null;

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
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for deactivationReason
     *
     * @ElementName deactivationReason
     * @return string|null
     */
    public function getDeactivationReason()
    {
        return $this->deactivationReason;
    }

    /**
     * Setter for deactivationReason
     *
     * @ElementName deactivationReason
     * @param string|null $deactivationReason
     * @return $this
     */
    public function setDeactivationReason($deactivationReason)
    {
        $this->deactivationReason = $deactivationReason;
        return $this;
    }


}

