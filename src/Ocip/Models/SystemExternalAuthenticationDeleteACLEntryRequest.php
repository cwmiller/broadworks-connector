<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalAuthenticationDeleteACLEntryRequest
 *
 * Delete an entry from the external authentication access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExternalAuthenticationDeleteACLEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }


}

