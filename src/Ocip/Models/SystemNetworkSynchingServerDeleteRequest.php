<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerDeleteRequest
 *
 * Request to delete a Network Server from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:11159","type":"sequence"}]
 */
class SystemNetworkSynchingServerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11159
     * @var string|null
     */
    private $netAddress = null;

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }


}

