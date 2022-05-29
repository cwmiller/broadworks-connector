<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationModifyRequest17
 *
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ece0b65e69189d3e8b8deee895f0a7ff:77","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:77
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName flashActivationDigits
     * @Type string
     * @Optional
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:77
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $flashActivationDigits = null;

    /**
     * @ElementName callTransferActivationDigits
     * @Type string
     * @Optional
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:77
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $callTransferActivationDigits = null;

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
     * Getter for flashActivationDigits
     *
     * @return string
     */
    public function getFlashActivationDigits()
    {
        return $this->flashActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->flashActivationDigits;
    }

    /**
     * Setter for flashActivationDigits
     *
     * @param string $flashActivationDigits
     * @return $this
     */
    public function setFlashActivationDigits($flashActivationDigits)
    {
        $this->flashActivationDigits = $flashActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFlashActivationDigits()
    {
        $this->flashActivationDigits = null;
        return $this;
    }

    /**
     * Getter for callTransferActivationDigits
     *
     * @return string
     */
    public function getCallTransferActivationDigits()
    {
        return $this->callTransferActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTransferActivationDigits;
    }

    /**
     * Setter for callTransferActivationDigits
     *
     * @param string $callTransferActivationDigits
     * @return $this
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits)
    {
        $this->callTransferActivationDigits = $callTransferActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTransferActivationDigits()
    {
        $this->callTransferActivationDigits = null;
        return $this;
    }


}

