<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceRequest22
 *
 * Request to get all the information of a VoiceXML instance.
 *         The response is either GroupVoiceXmlGetInstanceResponse22 or ErrorResponse.
 *
 * @see GroupVoiceXmlGetInstanceResponse22
 * @see ErrorResponse
 * @Groups [{"id":"f3e2fc6b9722da3741a8ba4a2c4a2d05:122","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:122
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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

