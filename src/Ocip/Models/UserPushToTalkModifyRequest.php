<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushToTalkModifyRequest
 *
 * Change the push to talk service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPushToTalkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName allowAutoAnswer
     * @var bool|null
     */
    private $allowAutoAnswer = null;

    /**
     * @ElementName outgoingConnectionSelection
     * @var string|null
     */
    private $outgoingConnectionSelection = null;

    /**
     * @ElementName accessListSelection
     * @var string|null
     */
    private $accessListSelection = null;

    /**
     * @ElementName selectedUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $selectedUserIdList = null;

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
     * Getter for allowAutoAnswer
     *
     * @ElementName allowAutoAnswer
     * @return bool|null
     */
    public function getAllowAutoAnswer()
    {
        return $this->allowAutoAnswer;
    }

    /**
     * Setter for allowAutoAnswer
     *
     * @ElementName allowAutoAnswer
     * @param bool|null $allowAutoAnswer
     * @return $this
     */
    public function setAllowAutoAnswer($allowAutoAnswer)
    {
        $this->allowAutoAnswer = $allowAutoAnswer;
        return $this;
    }

    /**
     * Getter for outgoingConnectionSelection
     *
     * @ElementName outgoingConnectionSelection
     * @return string|null
     */
    public function getOutgoingConnectionSelection()
    {
        return $this->outgoingConnectionSelection;
    }

    /**
     * Setter for outgoingConnectionSelection
     *
     * @ElementName outgoingConnectionSelection
     * @param string|null $outgoingConnectionSelection
     * @return $this
     */
    public function setOutgoingConnectionSelection($outgoingConnectionSelection)
    {
        $this->outgoingConnectionSelection = $outgoingConnectionSelection;
        return $this;
    }

    /**
     * Getter for accessListSelection
     *
     * @ElementName accessListSelection
     * @return string|null
     */
    public function getAccessListSelection()
    {
        return $this->accessListSelection;
    }

    /**
     * Setter for accessListSelection
     *
     * @ElementName accessListSelection
     * @param string|null $accessListSelection
     * @return $this
     */
    public function setAccessListSelection($accessListSelection)
    {
        $this->accessListSelection = $accessListSelection;
        return $this;
    }

    /**
     * Getter for selectedUserIdList
     *
     * @ElementName selectedUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSelectedUserIdList()
    {
        return $this->selectedUserIdList;
    }

    /**
     * Setter for selectedUserIdList
     *
     * @ElementName selectedUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $selectedUserIdList
     * @return $this
     */
    public function setSelectedUserIdList($selectedUserIdList)
    {
        $this->selectedUserIdList = $selectedUserIdList;
        return $this;
    }


}

