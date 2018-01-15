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
 */
class UserExecutiveGetAssistantResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowOptInOut
     * @var bool|null
     */
    private $allowOptInOut = null;

    /**
     * @ElementName assistantUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assistantUserTable = null;

    /**
     * Getter for allowOptInOut
     *
     * @ElementName allowOptInOut
     * @return bool|null
     */
    public function getAllowOptInOut()
    {
        return $this->allowOptInOut;
    }

    /**
     * Setter for allowOptInOut
     *
     * @ElementName allowOptInOut
     * @param bool|null $allowOptInOut
     * @return $this
     */
    public function setAllowOptInOut($allowOptInOut)
    {
        $this->allowOptInOut = $allowOptInOut;
        return $this;
    }

    /**
     * Getter for assistantUserTable
     *
     * @ElementName assistantUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAssistantUserTable()
    {
        return $this->assistantUserTable;
    }

    /**
     * Setter for assistantUserTable
     *
     * @ElementName assistantUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $assistantUserTable
     * @return $this
     */
    public function setAssistantUserTable($assistantUserTable)
    {
        $this->assistantUserTable = $assistantUserTable;
        return $this;
    }


}

