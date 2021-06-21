<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1
 *
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1.
 *          Contains a list of Communication Barring Authorization Codes assigned to the group.
 *
 * @see GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2948","type":"sequence"}]
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2948
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    private $code = array(
        
    );

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

