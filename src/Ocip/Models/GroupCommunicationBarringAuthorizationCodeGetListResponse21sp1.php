<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1
 *
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1.
 *          Contains a list of Communication Barring Authorization Codes assigned to the group.
 *
 * @see GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2675","type":"sequence"}]
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2675
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

