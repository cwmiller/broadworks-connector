<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerActivationRequest
 *
 * Activates or Deactivates the BroadWorks Mobile Manager.
 *         The deactivationReason is required when isActive is set to false. 
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"889c8c305076ef39cc50c70d0c2dc820:89","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerActivationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 889c8c305076ef39cc50c70d0c2dc820:89
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 889c8c305076ef39cc50c70d0c2dc820:89
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName deactivationReason
     * @Type string
     * @Optional
     * @Group 889c8c305076ef39cc50c70d0c2dc820:89
     * @var string|null
     */
    private $deactivationReason = null;

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
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for deactivationReason
     *
     * @return string
     */
    public function getDeactivationReason()
    {
        return $this->deactivationReason instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivationReason;
    }

    /**
     * Setter for deactivationReason
     *
     * @param string $deactivationReason
     * @return $this
     */
    public function setDeactivationReason($deactivationReason)
    {
        $this->deactivationReason = $deactivationReason;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeactivationReason()
    {
        $this->deactivationReason = null;
        return $this;
    }


}

