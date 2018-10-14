<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetResponse
 *
 * Response to EnterpriseVoiceVPNGetRequest.
 *         Replaced By: EnterpriseVoiceVPNGetResponse14sp3
 *
 * @see EnterpriseVoiceVPNGetRequest
 * @see EnterpriseVoiceVPNGetResponse14sp3
 */
class EnterpriseVoiceVPNGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName defaultSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection|null
     */
    private $defaultSelection = null;

    /**
     * @ElementName e164Selection
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection|null
     */
    private $e164Selection = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection|null
     */
    public function getDefaultSelection()
    {
        return $this->defaultSelection;
    }

    /**
     * Setter for defaultSelection
     *
     * @ElementName defaultSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection|null $defaultSelection
     * @return $this
     */
    public function setDefaultSelection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection $defaultSelection)
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * Getter for e164Selection
     *
     * @ElementName e164Selection
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection|null
     */
    public function getE164Selection()
    {
        return $this->e164Selection;
    }

    /**
     * Setter for e164Selection
     *
     * @ElementName e164Selection
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection|null $e164Selection
     * @return $this
     */
    public function setE164Selection(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection $e164Selection)
    {
        $this->e164Selection = $e164Selection;
        return $this;
    }


}

