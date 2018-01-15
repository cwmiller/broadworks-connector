<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetResponse17
 *
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

