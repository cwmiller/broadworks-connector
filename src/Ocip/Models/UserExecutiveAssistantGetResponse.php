<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveAssistantGetResponse
 *
 * Response to the UserExecutiveAssistantGetRequest.
 *         Contains the executive assistant setting and a table of executives this
 * assistant has been assigned to.
 *         The criteria table's column headings are: "User Id", "Last Name", "First
 * Name", ", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email
 * Address", 
 *         "Assistant Opt-in Status" and "Executive Allow Opt-in".
 *         The possible values for "Assistant Opt-in Status" and "Executive Allow
 * Opt-in" columns are "true" and "false".
 *
 * @see UserExecutiveAssistantGetRequest
 */
class UserExecutiveAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDivert
     * @var bool|null
     */
    private $enableDivert = null;

    /**
     * @ElementName divertToPhoneNumber
     * @var string|null
     */
    private $divertToPhoneNumber = null;

    /**
     * @ElementName executiveTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $executiveTable = null;

    /**
     * Getter for enableDivert
     *
     * @ElementName enableDivert
     * @return bool|null
     */
    public function getEnableDivert()
    {
        return $this->enableDivert;
    }

    /**
     * Setter for enableDivert
     *
     * @ElementName enableDivert
     * @param bool|null $enableDivert
     * @return $this
     */
    public function setEnableDivert($enableDivert)
    {
        $this->enableDivert = $enableDivert;
        return $this;
    }

    /**
     * Getter for divertToPhoneNumber
     *
     * @ElementName divertToPhoneNumber
     * @return string|null
     */
    public function getDivertToPhoneNumber()
    {
        return $this->divertToPhoneNumber;
    }

    /**
     * Setter for divertToPhoneNumber
     *
     * @ElementName divertToPhoneNumber
     * @param string|null $divertToPhoneNumber
     * @return $this
     */
    public function setDivertToPhoneNumber($divertToPhoneNumber)
    {
        $this->divertToPhoneNumber = $divertToPhoneNumber;
        return $this;
    }

    /**
     * Getter for executiveTable
     *
     * @ElementName executiveTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getExecutiveTable()
    {
        return $this->executiveTable;
    }

    /**
     * Setter for executiveTable
     *
     * @ElementName executiveTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $executiveTable
     * @return $this
     */
    public function setExecutiveTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $executiveTable)
    {
        $this->executiveTable = $executiveTable;
        return $this;
    }


}

