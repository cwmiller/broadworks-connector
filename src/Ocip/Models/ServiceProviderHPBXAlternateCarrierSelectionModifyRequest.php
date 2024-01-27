<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderHPBXAlternateCarrierSelectionModifyRequest
 *
 * Request to modify the Alternate Carrier Selection parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4727","type":"sequence"}]
 */
class ServiceProviderHPBXAlternateCarrierSelectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4727
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName processCbcCarrierSelection
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4727
     * @var bool|null
     */
    protected $processCbcCarrierSelection = null;

    /**
     * @ElementName preselectedLocalCarrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4727
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $preselectedLocalCarrier = null;

    /**
     * @ElementName preselectedDistantCarrier
     * @Type string
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4727
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $preselectedDistantCarrier = null;

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
     * @return string|null
     */
    public function getPreselectedLocalCarrier()
    {
        return $this->preselectedLocalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preselectedLocalCarrier;
    }

    /**
     * Setter for preselectedLocalCarrier
     *
     * @param string|null $preselectedLocalCarrier
     * @return $this
     */
    public function setPreselectedLocalCarrier($preselectedLocalCarrier = null)
    {
        if ($preselectedLocalCarrier === null) {
            $this->preselectedLocalCarrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->preselectedLocalCarrier = $preselectedLocalCarrier;
        }
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
     * @return string|null
     */
    public function getPreselectedDistantCarrier()
    {
        return $this->preselectedDistantCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preselectedDistantCarrier;
    }

    /**
     * Setter for preselectedDistantCarrier
     *
     * @param string|null $preselectedDistantCarrier
     * @return $this
     */
    public function setPreselectedDistantCarrier($preselectedDistantCarrier = null)
    {
        if ($preselectedDistantCarrier === null) {
            $this->preselectedDistantCarrier = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->preselectedDistantCarrier = $preselectedDistantCarrier;
        }
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

