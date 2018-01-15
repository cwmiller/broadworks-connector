<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationGetResponse17
 *
 * Response to SystemInCallServiceActivationGetRequest17.
 */
class SystemInCallServiceActivationGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFlashActivationDigits
     * @var string|null
     */
    private $defaultFlashActivationDigits = null;

    /**
     * @ElementName defaultCallTransferActivationDigits
     * @var string|null
     */
    private $defaultCallTransferActivationDigits = null;

    /**
     * Getter for defaultFlashActivationDigits
     *
     * @ElementName defaultFlashActivationDigits
     * @return string|null
     */
    public function getDefaultFlashActivationDigits()
    {
        return $this->defaultFlashActivationDigits;
    }

    /**
     * Setter for defaultFlashActivationDigits
     *
     * @ElementName defaultFlashActivationDigits
     * @param string|null $defaultFlashActivationDigits
     * @return $this
     */
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits)
    {
        $this->defaultFlashActivationDigits = $defaultFlashActivationDigits;
        return $this;
    }

    /**
     * Getter for defaultCallTransferActivationDigits
     *
     * @ElementName defaultCallTransferActivationDigits
     * @return string|null
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return $this->defaultCallTransferActivationDigits;
    }

    /**
     * Setter for defaultCallTransferActivationDigits
     *
     * @ElementName defaultCallTransferActivationDigits
     * @param string|null $defaultCallTransferActivationDigits
     * @return $this
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits)
    {
        $this->defaultCallTransferActivationDigits = $defaultCallTransferActivationDigits;
        return $this;
    }


}

