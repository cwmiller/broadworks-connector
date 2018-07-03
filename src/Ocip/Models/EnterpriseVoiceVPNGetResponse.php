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
     * @var string|null
     */
    private $defaultSelection = null;

    /**
     * @ElementName e164Selection
     * @var string|null
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


}

