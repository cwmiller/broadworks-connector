<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationGetResponse
 *
 * Response to SystemInCallServiceActivationGetRequest.
 *           Replaced by: SystemInCallServiceActivationGetResponse17
 *
 * @see SystemInCallServiceActivationGetRequest
 * @see SystemInCallServiceActivationGetResponse17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27796","type":"sequence"}]
 */
class SystemInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultActivationDigits
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:27796
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $defaultActivationDigits = null;

    /**
     * Getter for defaultActivationDigits
     *
     * @return string
     */
    public function getDefaultActivationDigits()
    {
        return $this->defaultActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultActivationDigits;
    }

    /**
     * Setter for defaultActivationDigits
     *
     * @param string $defaultActivationDigits
     * @return $this
     */
    public function setDefaultActivationDigits($defaultActivationDigits)
    {
        $this->defaultActivationDigits = $defaultActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultActivationDigits()
    {
        $this->defaultActivationDigits = null;
        return $this;
    }
}

