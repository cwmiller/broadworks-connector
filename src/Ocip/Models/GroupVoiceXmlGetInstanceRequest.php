<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceRequest
 *
 * Request to get all the information of a VoiceXML instance.
 *         The response is either GroupVoiceXmlGetInstanceResponse or
 * ErrorResponse.
 *         
 *         Replaced by: GroupVoiceXmlGetInstanceRequest19sp1 in AS data mode
 *
 * @see GroupVoiceXmlGetInstanceResponse
 * @see ErrorResponse
 * @see GroupVoiceXmlGetInstanceRequest19sp1
 */
class GroupVoiceXmlGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

