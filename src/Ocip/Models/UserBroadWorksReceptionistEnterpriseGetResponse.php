<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseGetResponse
 *
 * Response to UserBroadWorksReceptionistEnterpriseGetRequest.
 *         Returns a 12 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address",
 * "Department", "IMP Id", "Title",
 *           "Receptionist Note".
 *         The Receptionist Note column is only populated, if the user sending the
 * request is the owner
 *         of the Receptionist Note and a Note exists.
 *
 * @see UserBroadWorksReceptionistEnterpriseGetRequest
 */
class UserBroadWorksReceptionistEnterpriseGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitoredUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $monitoredUserTable = null;

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

