<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeDeleteRequest
 *
 * Delete a country code from the system.
 *         A country code cannot be deleted if it is the default country code or
 *         if any carriers or call type mappings are defined against it.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}

