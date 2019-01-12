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
 * @Groups [{"id":"0639a23b2e14be05c11ead49c23bd0bd:122","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0639a23b2e14be05c11ead49c23bd0bd:122
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

