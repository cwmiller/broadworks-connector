<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushToTalkGetResponse
 *
 * Response to UserPushToTalkGetRequest.  It returns the service settings and a
 *         9 column selected user table with the following column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserPushToTalkGetRequest
 */
class UserPushToTalkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowAutoAnswer
     * @var bool|null
     */
    private $allowAutoAnswer = null;

    /**
     * @ElementName outgoingConnectionSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection|null
     */
    private $outgoingConnectionSelection = null;

    /**
     * @ElementName accessListSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection|null
     */
    private $accessListSelection = null;

    /**
     * @ElementName selectedUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $selectedUserTable = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection|null
     */
    public function getOutgoingConnectionSelection()
    {
        return $this->outgoingConnectionSelection;
    }

    /**
     * Setter for outgoingConnectionSelection
     *
     * @ElementName outgoingConnectionSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection|null $outgoingConnectionSelection
     * @return $this
     */
    public function setOutgoingConnectionSelection(\CWM\BroadWorksConnector\Ocip\Models\PushToTalkOutgoingConnectionSelection $outgoingConnectionSelection)
    {
        $this->outgoingConnectionSelection = $outgoingConnectionSelection;
        return $this;
    }

    /**
     * Getter for accessListSelection
     *
     * @ElementName accessListSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection|null
     */
    public function getAccessListSelection()
    {
        return $this->accessListSelection;
    }

    /**
     * Setter for accessListSelection
     *
     * @ElementName accessListSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection|null $accessListSelection
     * @return $this
     */
    public function setAccessListSelection(\CWM\BroadWorksConnector\Ocip\Models\PushToTalkAccessListSelection $accessListSelection)
    {
        $this->accessListSelection = $accessListSelection;
        return $this;
    }

    /**
     * Getter for selectedUserTable
     *
     * @ElementName selectedUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSelectedUserTable()
    {
        return $this->selectedUserTable;
    }

    /**
     * Setter for selectedUserTable
     *
     * @ElementName selectedUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $selectedUserTable
     * @return $this
     */
    public function setSelectedUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $selectedUserTable)
    {
        $this->selectedUserTable = $selectedUserTable;
        return $this;
    }


}

