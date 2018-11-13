<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetAssistantResponse
 *
 * Response to the UserExecutiveGetAssistantsRequest.
 *         Contains the assistant setting and a table of assigned assistants.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 * "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email
 * Address" and "Opt-in".
 *         The possible values for "Opt-in" column are "true" and "false".
 *
 * @see UserExecutiveGetAssistantsRequest
 */
class UserExecutiveGetAssistantResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowOptInOut
     * @Type bool
     * @var bool|null
     */
    private $allowOptInOut = null;

    /**
     * @ElementName assistantUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assistantUserTable = null;

    /**
     * Getter for allowOptInOut
     *
     * @return bool
     */
    public function getAllowOptInOut()
    {
        return $this->allowOptInOut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOptInOut;
    }

    /**
     * Setter for allowOptInOut
     *
     * @param bool $allowOptInOut
     * @return $this
     */
    public function setAllowOptInOut($allowOptInOut)
    {
        $this->allowOptInOut = $allowOptInOut;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOptInOut()
    {
        $this->allowOptInOut = null;
        return $this;
    }

    /**
     * Getter for assistantUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAssistantUserTable()
    {
        return $this->assistantUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assistantUserTable;
    }

    /**
     * Setter for assistantUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assistantUserTable
     * @return $this
     */
    public function setAssistantUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assistantUserTable)
    {
        $this->assistantUserTable = $assistantUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssistantUserTable()
    {
        $this->assistantUserTable = null;
        return $this;
    }


}

