<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntelligentNetworkServiceControlModifyRequest
 *
 * Modify the user level data associated with Intelligent Network Service Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserIntelligentNetworkServiceControlModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName preAnswerActionsEnabled
     * @var bool|null
     */
    private $preAnswerActionsEnabled = null;

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

    /**
     * Getter for preAnswerActionsEnabled
     *
     * @ElementName preAnswerActionsEnabled
     * @return bool|null
     */
    public function getPreAnswerActionsEnabled()
    {
        return $this->preAnswerActionsEnabled;
    }

    /**
     * Setter for preAnswerActionsEnabled
     *
     * @ElementName preAnswerActionsEnabled
     * @param bool|null $preAnswerActionsEnabled
     * @return $this
     */
    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled)
    {
        $this->preAnswerActionsEnabled = $preAnswerActionsEnabled;
        return $this;
    }


}

