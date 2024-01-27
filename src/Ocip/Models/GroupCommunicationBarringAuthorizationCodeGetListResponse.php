<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringAuthorizationCodeGetListResponse
 *
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes
 *         assigned to the group.
 *         
 *         Replaced by: GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1 in AS data mode
 *
 * @see GroupCommunicationBarringAuthorizationCodeGetListRequest
 * @see GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:2651","type":"sequence"}]
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeEntry
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2651
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

