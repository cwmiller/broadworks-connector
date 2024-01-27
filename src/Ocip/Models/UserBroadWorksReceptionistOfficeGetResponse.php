<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistOfficeGetResponse
 *
 * Response to UserBroadWorksReceptionistOfficeGetRequest.
 *         Returns a 11 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address", "Department", "IMP Id", "Title".
 *
 * @see UserBroadWorksReceptionistOfficeGetRequest
 * @Groups [{"id":"5fa0a73a96d1fc1ab41b9a76a6c7fe9b:103","type":"sequence"}]
 */
class UserBroadWorksReceptionistOfficeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName monitoredUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 5fa0a73a96d1fc1ab41b9a76a6c7fe9b:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $monitoredUserTable = null;

    /**
     * Getter for monitoredUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitoredUserTable;
    }

    /**
     * Setter for monitoredUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $monitoredUserTable
     * @return $this
     */
    public function setMonitoredUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $monitoredUserTable)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitoredUserTable()
    {
        $this->monitoredUserTable = null;
        return $this;
    }
}

