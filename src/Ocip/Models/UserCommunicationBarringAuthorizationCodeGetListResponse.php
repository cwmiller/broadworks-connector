<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringAuthorizationCodeGetListResponse
 *
 * Response to UserCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes
 *         assigned to the user.
 *
 * @see UserCommunicationBarringAuthorizationCodeGetListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1199","type":"sequence"}]
 */
class UserCommunicationBarringAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1199
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry[]
     */
    protected $code = [
        
    ];

    /**
     * Getter for code
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry[]
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry[] $code
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }
}

