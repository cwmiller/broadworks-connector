<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommunicationBarringAuthorizationCodeGetListResponse
 *
 * Response to the EnterpriseCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes assigned to a group.
 *
 * @see EnterpriseCommunicationBarringAuthorizationCodeGetListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:225","type":"sequence"}]
 */
class EnterpriseCommunicationBarringAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:225
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    protected $code = [
        
    ];

    /**
     * Getter for code
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[] $code
     * @return $this
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Adder for code
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }
}

