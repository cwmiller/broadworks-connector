<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetScreeningAlertingRequest
 *
 * Get the screening and alerting setting of an executive. Both executive and the
 * executive assistant can run this command.
 *         The response is either UserExecutiveGetScreeningAlertingResponse or
 * ErrorResponse.
 *
 * @see UserExecutiveGetScreeningAlertingResponse
 * @see ErrorResponse
 */
class UserExecutiveGetScreeningAlertingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

