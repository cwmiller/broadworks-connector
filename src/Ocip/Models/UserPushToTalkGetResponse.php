<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushToTalkGetResponse
 *
 * Response to UserPushToTalkGetRequest.  It returns the service settings and a
 *         9 column selected user table with the following column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserPushToTalkGetRequest
 * @Groups [{"id":"22c82692327758edb5adf1f1db18fc71:104","type":"sequence"}]
 */
class UserPushToTalkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allowAutoAnswer
     * @Type bool
     * @Group 22c82692327758edb5adf1f1db18fc71:104
     * @var bool|null
     */
    protected $allowAutoAnswer = null;

    /**
     * @ElementName outgoingConnectionSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection
     * @Group 22c82692327758edb5adf1f1db18fc71:104
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection|null
     */
    protected $outgoingConnectionSelection = null;

    /**
     * @ElementName accessListSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection
     * @Group 22c82692327758edb5adf1f1db18fc71:104
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection|null
     */
    protected $accessListSelection = null;

    /**
     * @ElementName selectedUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 22c82692327758edb5adf1f1db18fc71:104
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $selectedUserTable = null;

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
     * Getter for selectedUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSelectedUserTable()
    {
        return $this->selectedUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectedUserTable;
    }

    /**
     * Setter for selectedUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $selectedUserTable
     * @return $this
     */
    public function setSelectedUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $selectedUserTable)
    {
        $this->selectedUserTable = $selectedUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSelectedUserTable()
    {
        $this->selectedUserTable = null;
        return $this;
    }
}

