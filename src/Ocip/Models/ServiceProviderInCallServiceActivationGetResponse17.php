<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetResponse17
 *
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 *
 * @see ServiceProviderInCallServiceActivationGetRequest17
 * @Groups [{"id":"2f2cc47dc637fa680d158d93a58af0fd:61","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName flashActivationDigits
     * @Type string
     * @Group 2f2cc47dc637fa680d158d93a58af0fd:61
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $flashActivationDigits = null;

    /**
     * @ElementName callTransferActivationDigits
     * @Type string
     * @Group 2f2cc47dc637fa680d158d93a58af0fd:61
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

