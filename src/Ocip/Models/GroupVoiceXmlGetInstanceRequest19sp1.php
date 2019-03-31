<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceRequest19sp1
 *
 * Request to get all the information of a VoiceXML instance.
 *         The response is either GroupVoiceXmlGetInstanceResponse19sp1 or ErrorResponse.
 *         
 *         Replaced by: GroupVoiceXmlGetInstanceRequest22 in AS mode
 *
 * @see GroupVoiceXmlGetInstanceResponse19sp1
 * @see ErrorResponse
 * @see GroupVoiceXmlGetInstanceRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5311","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5311
     * @MinLength 1
     * @MaxLength 161
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

