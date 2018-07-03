<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionGetResponse
 *
 * Response to the ServiceProviderHPBXAlternateCarrierSelectionGetRequest.
 *
 * @see ServiceProviderHPBXAlternateCarrierSelectionGetRequest
 */
class ServiceProviderHPBXAlternateCarrierSelectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName processCbcCarrierSelection
     * @var bool|null
     */
    private $processCbcCarrierSelection = null;

    /**
     * @ElementName preselectedLocalCarrier
     * @var string|null
     */
    private $preselectedLocalCarrier = null;

    /**
     * @ElementName preselectedDistantCarrier
     * @var string|null
     */
    private $preselectedDistantCarrier = null;

    /**
     * Getter for processCbcCarrierSelection
     *
     * @ElementName processCbcCarrierSelection
     * @return bool|null
     */
    public function getProcessCbcCarrierSelection()
    {
        return $this->processCbcCarrierSelection;
    }

    /**
     * Setter for processCbcCarrierSelection
     *
     * @ElementName processCbcCarrierSelection
     * @param bool|null $processCbcCarrierSelection
     * @return $this
     */
    public function setProcessCbcCarrierSelection($processCbcCarrierSelection)
    {
        $this->processCbcCarrierSelection = $processCbcCarrierSelection;
        return $this;
    }

    /**
     * Getter for preselectedLocalCarrier
     *
     * @ElementName preselectedLocalCarrier
     * @return string|null
     */
    public function getPreselectedLocalCarrier()
    {
        return $this->preselectedLocalCarrier;
    }

    /**
     * Setter for preselectedLocalCarrier
     *
     * @ElementName preselectedLocalCarrier
     * @param string|null $preselectedLocalCarrier
     * @return $this
     */
    public function setPreselectedLocalCarrier($preselectedLocalCarrier)
    {
        $this->preselectedLocalCarrier = $preselectedLocalCarrier;
        return $this;
    }

    /**
     * Getter for preselectedDistantCarrier
     *
     * @ElementName preselectedDistantCarrier
     * @return string|null
     */
    public function getPreselectedDistantCarrier()
    {
        return $this->preselectedDistantCarrier;
    }

    /**
     * Setter for preselectedDistantCarrier
     *
     * @ElementName preselectedDistantCarrier
     * @param string|null $preselectedDistantCarrier
     * @return $this
     */
    public function setPreselectedDistantCarrier($preselectedDistantCarrier)
    {
        $this->preselectedDistantCarrier = $preselectedDistantCarrier;
        return $this;
    }


}

