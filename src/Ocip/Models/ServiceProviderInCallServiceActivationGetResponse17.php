<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetResponse17
 *
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 *
 * @see ServiceProviderInCallServiceActivationGetRequest17
 * @Groups [{"id":"ece0b65e69189d3e8b8deee895f0a7ff:61","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName flashActivationDigits
     * @Type string
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:61
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $flashActivationDigits = null;

    /**
     * @ElementName callTransferActivationDigits
     * @Type string
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:61
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $callTransferActivationDigits = null;

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

