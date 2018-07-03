<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationModifyRequest17
 *
 * Modifies the service provider's DTMF based in-call service activation trigger
 * attributes.The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderInCallServiceActivationModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName flashActivationDigits
     * @var string|null
     */
    private $flashActivationDigits = null;

    /**
     * @ElementName callTransferActivationDigits
     * @var string|null
     */
    private $callTransferActivationDigits = null;

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
     * Getter for flashActivationDigits
     *
     * @ElementName flashActivationDigits
     * @return string|null
     */
    public function getFlashActivationDigits()
    {
        return $this->flashActivationDigits;
    }

    /**
     * Setter for flashActivationDigits
     *
     * @ElementName flashActivationDigits
     * @param string|null $flashActivationDigits
     * @return $this
     */
    public function setFlashActivationDigits($flashActivationDigits)
    {
        $this->flashActivationDigits = $flashActivationDigits;
        return $this;
    }

    /**
     * Getter for callTransferActivationDigits
     *
     * @ElementName callTransferActivationDigits
     * @return string|null
     */
    public function getCallTransferActivationDigits()
    {
        return $this->callTransferActivationDigits;
    }

    /**
     * Setter for callTransferActivationDigits
     *
     * @ElementName callTransferActivationDigits
     * @param string|null $callTransferActivationDigits
     * @return $this
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits)
    {
        $this->callTransferActivationDigits = $callTransferActivationDigits;
        return $this;
    }


}

