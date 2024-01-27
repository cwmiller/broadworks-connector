<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationGetResponse17
 *
 * Response to SystemInCallServiceActivationGetRequest17.
 *
 * @see SystemInCallServiceActivationGetRequest17
 * @Groups [{"id":"2f2cc47dc637fa680d158d93a58af0fd:107","type":"sequence"}]
 */
class SystemInCallServiceActivationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFlashActivationDigits
     * @Type string
     * @Group 2f2cc47dc637fa680d158d93a58af0fd:107
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $defaultFlashActivationDigits = null;

    /**
     * @ElementName defaultCallTransferActivationDigits
     * @Type string
     * @Group 2f2cc47dc637fa680d158d93a58af0fd:107
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

