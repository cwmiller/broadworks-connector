<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetScreeningAlertingRequest
 *
 * Get the screening and alerting setting of an executive. Both executive and the executive assistant can run this command.
 *         The response is either UserExecutiveGetScreeningAlertingResponse or ErrorResponse.
 *
 * @see UserExecutiveGetScreeningAlertingResponse
 * @see ErrorResponse
 * @Groups [{"id":"bcf25f15fde8fb6d519675293110ce09:306","type":"sequence"}]
 */
class UserExecutiveGetScreeningAlertingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bcf25f15fde8fb6d519675293110ce09:306
     * @var string|null
     */
    private $userId = null;

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


}

