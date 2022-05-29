<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationModifyRequest17
 *
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ece0b65e69189d3e8b8deee895f0a7ff:123","type":"sequence"}]
 */
class SystemInCallServiceActivationModifyRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFlashActivationDigits
     * @Type string
     * @Optional
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:123
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $defaultFlashActivationDigits = null;

    /**
     * @ElementName defaultCallTransferActivationDigits
     * @Type string
     * @Optional
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:123
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $defaultCallTransferActivationDigits = null;

    /**
     * Getter for defaultFlashActivationDigits
     *
     * @return string
     */
    public function getDefaultFlashActivationDigits()
    {
        return $this->defaultFlashActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFlashActivationDigits;
    }

    /**
     * Setter for defaultFlashActivationDigits
     *
     * @param string $defaultFlashActivationDigits
     * @return $this
     */
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits)
    {
        $this->defaultFlashActivationDigits = $defaultFlashActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFlashActivationDigits()
    {
        $this->defaultFlashActivationDigits = null;
        return $this;
    }

    /**
     * Getter for defaultCallTransferActivationDigits
     *
     * @return string
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return $this->defaultCallTransferActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCallTransferActivationDigits;
    }

    /**
     * Setter for defaultCallTransferActivationDigits
     *
     * @param string $defaultCallTransferActivationDigits
     * @return $this
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits)
    {
        $this->defaultCallTransferActivationDigits = $defaultCallTransferActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCallTransferActivationDigits()
    {
        $this->defaultCallTransferActivationDigits = null;
        return $this;
    }


}

