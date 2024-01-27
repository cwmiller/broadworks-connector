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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2890","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:2890
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName defaultSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection
     * @Group d8f04177e438f303b41c211e518706bf:2890
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDefaultSelection|null
     */
    protected $defaultSelection = null;

    /**
     * @ElementName e164Selection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection
     * @Group d8f04177e438f303b41c211e518706bf:2890
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNNonMatchingE164NumberSelection|null
     */
    protected $e164Selection = null;

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
}

