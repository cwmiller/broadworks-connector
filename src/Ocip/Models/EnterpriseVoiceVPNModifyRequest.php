<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNModifyRequest
 *
 * Modify the enterprise voice VPN level data associated with voice VPN.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName defaultSelection
     * @var string|null
     */
    private $defaultSelection = null;

    /**
     * @ElementName e164Selection
     * @var string|null
     */
    private $e164Selection = null;

    /**
     * @ElementName usePhoneContext
     * @var bool|null
     */
    private $usePhoneContext = null;

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
     * Getter for defaultSelection
     *
     * @ElementName defaultSelection
     * @return string|null
     */
    public function getDefaultSelection()
    {
        return $this->defaultSelection;
    }

    /**
     * Setter for defaultSelection
     *
     * @ElementName defaultSelection
     * @param string|null $defaultSelection
     * @return $this
     */
    public function setDefaultSelection($defaultSelection)
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * Getter for e164Selection
     *
     * @ElementName e164Selection
     * @return string|null
     */
    public function getE164Selection()
    {
        return $this->e164Selection;
    }

    /**
     * Setter for e164Selection
     *
     * @ElementName e164Selection
     * @param string|null $e164Selection
     * @return $this
     */
    public function setE164Selection($e164Selection)
    {
        $this->e164Selection = $e164Selection;
        return $this;
    }

    /**
     * Getter for usePhoneContext
     *
     * @ElementName usePhoneContext
     * @return bool|null
     */
    public function getUsePhoneContext()
    {
        return $this->usePhoneContext;
    }

    /**
     * Setter for usePhoneContext
     *
     * @ElementName usePhoneContext
     * @param bool|null $usePhoneContext
     * @return $this
     */
    public function setUsePhoneContext($usePhoneContext)
    {
        $this->usePhoneContext = $usePhoneContext;
        return $this;
    }


}

