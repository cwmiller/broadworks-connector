<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetAvailableAssistantListResponse
 *
 * Response to the UserExecutiveGetAvailableAssistantListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address",
 *         "User External Id" and "User Place Type".  
 *         The possible values for "User Place Type" are: User, Place.
 *
 * @see UserExecutiveGetAvailableAssistantListResponse
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:206","type":"sequence"}]
 */
class UserExecutiveGetAvailableAssistantListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:206
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }
}

