<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredAnswerEndpointModifyRequest
 *
 * Request to configure a user's Preferred Answer Endpoint for Auto-Answer and Forced Answer.
 *         Setting preferredAnswerEndpoint to nil will clear the user's configured Preferred Answer Endpoint. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3495","type":"sequence"}]
 */
class UserPreferredAnswerEndpointModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3495
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName preferredAnswerEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3495
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $preferredAnswerEndpoint = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for preferredAnswerEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey|null
     */
    public function getPreferredAnswerEndpoint()
    {
        return $this->preferredAnswerEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredAnswerEndpoint;
    }

    /**
     * Setter for preferredAnswerEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey|null $preferredAnswerEndpoint
     * @return $this
     */
    public function setPreferredAnswerEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey $preferredAnswerEndpoint = null)
    {
        if ($preferredAnswerEndpoint === null) {
            $this->preferredAnswerEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->preferredAnswerEndpoint = $preferredAnswerEndpoint;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredAnswerEndpoint()
    {
        $this->preferredAnswerEndpoint = null;
        return $this;
    }
}

