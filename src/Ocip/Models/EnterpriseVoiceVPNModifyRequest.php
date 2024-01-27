<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNModifyRequest
 *
 * Modify the enterprise voice VPN level data associated with voice VPN.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1221","type":"sequence"}]
 */
class EnterpriseVoiceVPNModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1221
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1221
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName defaultSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1221
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection|null
     */
    protected $defaultSelection = null;

    /**
     * @ElementName e164Selection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1221
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection|null
     */
    protected $e164Selection = null;

    /**
     * @ElementName usePhoneContext
     * @Type bool
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1221
     * @var bool|null
     */
    protected $usePhoneContext = null;

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
     * Getter for defaultSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection
     */
    public function getDefaultSelection()
    {
        return $this->defaultSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSelection;
    }

    /**
     * Setter for defaultSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection $defaultSelection
     * @return $this
     */
    public function setDefaultSelection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection $defaultSelection)
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSelection()
    {
        $this->defaultSelection = null;
        return $this;
    }

    /**
     * Getter for e164Selection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection
     */
    public function getE164Selection()
    {
        return $this->e164Selection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->e164Selection;
    }

    /**
     * Setter for e164Selection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection $e164Selection
     * @return $this
     */
    public function setE164Selection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection $e164Selection)
    {
        $this->e164Selection = $e164Selection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetE164Selection()
    {
        $this->e164Selection = null;
        return $this;
    }

    /**
     * Getter for usePhoneContext
     *
     * @return bool
     */
    public function getUsePhoneContext()
    {
        return $this->usePhoneContext instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usePhoneContext;
    }

    /**
     * Setter for usePhoneContext
     *
     * @param bool $usePhoneContext
     * @return $this
     */
    public function setUsePhoneContext($usePhoneContext)
    {
        $this->usePhoneContext = $usePhoneContext;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsePhoneContext()
    {
        $this->usePhoneContext = null;
        return $this;
    }
}

