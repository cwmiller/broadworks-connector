<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyGroupIdRequest
 *
 * Move the user from one group to another group within the same enterprise.
 *           If evaluateOnly is specified, no actual move will happen. The command only tests the move and reports the impacts or possible conditions preventing the move.
 *           The response is either UserModifyGroupIdResponse or ErrorResponse.
 *
 * @see UserModifyGroupIdResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2515","type":"sequence"}]
 */
class UserModifyGroupIdRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2515
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName newGroupId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2515
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $newGroupId = null;

    /**
     * @ElementName evaluateOnly
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2515
     * @var bool|null
     */
    private $evaluateOnly = null;

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
     * Getter for newGroupId
     *
     * @return string
     */
    public function getNewGroupId()
    {
        return $this->newGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newGroupId;
    }

    /**
     * Setter for newGroupId
     *
     * @param string $newGroupId
     * @return $this
     */
    public function setNewGroupId($newGroupId)
    {
        $this->newGroupId = $newGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewGroupId()
    {
        $this->newGroupId = null;
        return $this;
    }

    /**
     * Getter for evaluateOnly
     *
     * @return bool
     */
    public function getEvaluateOnly()
    {
        return $this->evaluateOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->evaluateOnly;
    }

    /**
     * Setter for evaluateOnly
     *
     * @param bool $evaluateOnly
     * @return $this
     */
    public function setEvaluateOnly($evaluateOnly)
    {
        $this->evaluateOnly = $evaluateOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEvaluateOnly()
    {
        $this->evaluateOnly = null;
        return $this;
    }


}

