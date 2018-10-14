<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1
 *
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1.
 *          Contains a list of Communication Barring Authorization Codes assigned
 * to the group.
 *
 * @see GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName code
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    private $code = array(
        
    );

    /**
     * Getter for code
     *
     * @ElementName code
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter for code
     *
     * @ElementName code
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[] $code
     * @return $this
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adder for code
     *
     * @ElementName code
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code []= $code;
        return $this;
    }


}

