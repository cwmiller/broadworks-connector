<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionGetResponse
 *
 * Response to the ServiceProviderHPBXAlternateCarrierSelectionGetRequest.
 *
 * @see ServiceProviderHPBXAlternateCarrierSelectionGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4633","type":"sequence"}]
 */
class ServiceProviderHPBXAlternateCarrierSelectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName processCbcCarrierSelection
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4633
     * @var bool|null
     */
    private $processCbcCarrierSelection = null;

    /**
     * @ElementName preselectedLocalCarrier
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4633
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $preselectedLocalCarrier = null;

    /**
     * @ElementName preselectedDistantCarrier
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4633
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $preselectedDistantCarrier = null;

    /**
     * Getter for processCbcCarrierSelection
     *
     * @return bool
     */
    public function getProcessCbcCarrierSelection()
    {
        return $this->processCbcCarrierSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->processCbcCarrierSelection;
    }

    /**
     * Setter for processCbcCarrierSelection
     *
     * @param bool $processCbcCarrierSelection
     * @return $this
     */
    public function setProcessCbcCarrierSelection($processCbcCarrierSelection)
    {
        $this->processCbcCarrierSelection = $processCbcCarrierSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProcessCbcCarrierSelection()
    {
        $this->processCbcCarrierSelection = null;
        return $this;
    }

    /**
     * Getter for preselectedLocalCarrier
     *
     * @return string
     */
    public function getPreselectedLocalCarrier()
    {
        return $this->preselectedLocalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preselectedLocalCarrier;
    }

    /**
     * Setter for preselectedLocalCarrier
     *
     * @param string $preselectedLocalCarrier
     * @return $this
     */
    public function setPreselectedLocalCarrier($preselectedLocalCarrier)
    {
        $this->preselectedLocalCarrier = $preselectedLocalCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreselectedLocalCarrier()
    {
        $this->preselectedLocalCarrier = null;
        return $this;
    }

    /**
     * Getter for preselectedDistantCarrier
     *
     * @return string
     */
    public function getPreselectedDistantCarrier()
    {
        return $this->preselectedDistantCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preselectedDistantCarrier;
    }

    /**
     * Setter for preselectedDistantCarrier
     *
     * @param string $preselectedDistantCarrier
     * @return $this
     */
    public function setPreselectedDistantCarrier($preselectedDistantCarrier)
    {
        $this->preselectedDistantCarrier = $preselectedDistantCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreselectedDistantCarrier()
    {
        $this->preselectedDistantCarrier = null;
        return $this;
    }


}

