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
 * @Groups [{"id":"22c82692327758edb5adf1f1db18fc71:123","type":"sequence"}]
 */
class UserPushToTalkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 22c82692327758edb5adf1f1db18fc71:123
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName allowAutoAnswer
     * @Type bool
     * @Optional
     * @Group 22c82692327758edb5adf1f1db18fc71:123
     * @var bool|null
     */
    protected $allowAutoAnswer = null;

    /**
     * @ElementName outgoingConnectionSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection
     * @Optional
     * @Group 22c82692327758edb5adf1f1db18fc71:123
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection|null
     */
    protected $outgoingConnectionSelection = null;

    /**
     * @ElementName accessListSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection
     * @Optional
     * @Group 22c82692327758edb5adf1f1db18fc71:123
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection|null
     */
    protected $accessListSelection = null;

    /**
     * @ElementName selectedUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 22c82692327758edb5adf1f1db18fc71:123
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $selectedUserIdList = null;

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
     * Getter for allowAutoAnswer
     *
     * @return bool
     */
    public function getAllowAutoAnswer()
    {
        return $this->allowAutoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAutoAnswer;
    }

    /**
     * Setter for allowAutoAnswer
     *
     * @param bool $allowAutoAnswer
     * @return $this
     */
    public function setAllowAutoAnswer($allowAutoAnswer)
    {
        $this->allowAutoAnswer = $allowAutoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAutoAnswer()
    {
        $this->allowAutoAnswer = null;
        return $this;
    }

    /**
     * Getter for outgoingConnectionSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection
     */
    public function getOutgoingConnectionSelection()
    {
        return $this->outgoingConnectionSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingConnectionSelection;
    }

    /**
     * Setter for outgoingConnectionSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection $outgoingConnectionSelection
     * @return $this
     */
    public function setOutgoingConnectionSelection(\CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection $outgoingConnectionSelection)
    {
        $this->outgoingConnectionSelection = $outgoingConnectionSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingConnectionSelection()
    {
        $this->outgoingConnectionSelection = null;
        return $this;
    }

    /**
     * Getter for accessListSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection
     */
    public function getAccessListSelection()
    {
        return $this->accessListSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessListSelection;
    }

    /**
     * Setter for accessListSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection $accessListSelection
     * @return $this
     */
    public function setAccessListSelection(\CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection $accessListSelection)
    {
        $this->accessListSelection = $accessListSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessListSelection()
    {
        $this->accessListSelection = null;
        return $this;
    }

    /**
     * Getter for selectedUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSelectedUserIdList()
    {
        return $this->selectedUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectedUserIdList;
    }

    /**
     * Setter for selectedUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $selectedUserIdList
     * @return $this
     */
    public function setSelectedUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $selectedUserIdList = null)
    {
        if ($selectedUserIdList === null) {
            $this->selectedUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->selectedUserIdList = $selectedUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSelectedUserIdList()
    {
        $this->selectedUserIdList = null;
        return $this;
    }
}

