<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionGetResponse
 *
 * Response to the ServiceProviderHPBXAlternateCarrierSelectionGetRequest.
 *
 * @see ServiceProviderHPBXAlternateCarrierSelectionGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4709","type":"sequence"}]
 */
class ServiceProviderHPBXAlternateCarrierSelectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName processCbcCarrierSelection
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:4709
     * @var bool|null
     */
    protected $processCbcCarrierSelection = null;

    /**
     * @ElementName preselectedLocalCarrier
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4709
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preselectedLocalCarrier = null;

    /**
     * @ElementName preselectedDistantCarrier
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4709
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preselectedDistantCarrier = null;

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

