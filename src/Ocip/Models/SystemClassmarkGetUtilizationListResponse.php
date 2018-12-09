<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkGetUtilizationListResponse
 *
 * Response to SystemClassmarkGetUtilizationListRequest. 
 *         Contains a table with the column headings: "User Id", "Group Id", "Service Provider Id",
 *         "Last Name", "First Name", and "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see SystemClassmarkGetUtilizationListRequest
 * @Groups [{"id":"cab89edc38c11aa1d780290f00d72d0c:138","type":"sequence"}]
 */
class SystemClassmarkGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmarkUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group cab89edc38c11aa1d780290f00d72d0c:138
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $classmarkUserTable = null;

    /**
     * Getter for classmarkUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getClassmarkUserTable()
    {
        return $this->classmarkUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->classmarkUserTable;
    }

    /**
     * Setter for classmarkUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkUserTable
     * @return $this
     */
    public function setClassmarkUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkUserTable)
    {
        $this->classmarkUserTable = $classmarkUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClassmarkUserTable()
    {
        $this->classmarkUserTable = null;
        return $this;
    }


}

