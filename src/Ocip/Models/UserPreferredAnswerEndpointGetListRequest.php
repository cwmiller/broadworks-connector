<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredAnswerEndpointGetListRequest
 *
 * Requests the list of device endpoints of a user that can be configured  
 *         as Preferred Answer Endpoint for Auto-Answer and Forced Answer.
 *         If onlyDisplayPreferredAnswerEndpoint is specified, only the 
 *         Preferred Answer Endpoint of user is returned in the response.
 *          
 *         The response is either UserPreferredAnswerEndpointGetListResponse or ErrorResponse.
 *
 * @see UserPreferredAnswerEndpointGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3458","type":"sequence"}]
 */
class UserPreferredAnswerEndpointGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3458
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName onlyDisplayPreferredAnswerEndpoint
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3458
     * @var bool|null
     */
    protected $onlyDisplayPreferredAnswerEndpoint = null;

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
     * Getter for onlyDisplayPreferredAnswerEndpoint
     *
     * @return bool
     */
    public function getOnlyDisplayPreferredAnswerEndpoint()
    {
        return $this->onlyDisplayPreferredAnswerEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyDisplayPreferredAnswerEndpoint;
    }

    /**
     * Setter for onlyDisplayPreferredAnswerEndpoint
     *
     * @param bool $onlyDisplayPreferredAnswerEndpoint
     * @return $this
     */
    public function setOnlyDisplayPreferredAnswerEndpoint($onlyDisplayPreferredAnswerEndpoint)
    {
        $this->onlyDisplayPreferredAnswerEndpoint = $onlyDisplayPreferredAnswerEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyDisplayPreferredAnswerEndpoint()
    {
        $this->onlyDisplayPreferredAnswerEndpoint = null;
        return $this;
    }
}

