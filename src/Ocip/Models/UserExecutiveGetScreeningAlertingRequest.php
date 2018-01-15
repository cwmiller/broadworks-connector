<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetScreeningAlertingRequest
 *
 * Get the screening and alerting setting of an executive. Both executive and the
 * executive assistant can run this command.
 *         The response is either UserExecutiveGetScreeningAlertingResponse or
 * ErrorResponse.
 */
class UserExecutiveGetScreeningAlertingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

