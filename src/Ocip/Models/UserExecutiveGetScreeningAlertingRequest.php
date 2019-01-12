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
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:305","type":"sequence"}]
 */
class UserExecutiveGetScreeningAlertingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:305
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

