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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:15133","type":"sequence"}]
 */
class SystemInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultActivationDigits
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15133
     * @var string|null
     */
    private $defaultActivationDigits = null;

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

