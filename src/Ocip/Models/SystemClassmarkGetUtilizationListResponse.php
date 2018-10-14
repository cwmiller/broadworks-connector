<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkGetUtilizationListResponse
 *
 * Response to SystemClassmarkGetUtilizationListRequest. 
 *         Contains a table with the column headings: "User Id", "Group Id",
 * "Service Provider Id",
 *         "Last Name", "First Name", and "Phone Number", "Extension",
 * "Department", "Email Address".
 *
 * @see SystemClassmarkGetUtilizationListRequest
 */
class SystemClassmarkGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmarkUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $classmarkUserTable = null;

    /**
     * Getter for classmarkUserTable
     *
     * @ElementName classmarkUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getClassmarkUserTable()
    {
        return $this->classmarkUserTable;
    }

    /**
     * Setter for classmarkUserTable
     *
     * @ElementName classmarkUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $classmarkUserTable
     * @return $this
     */
    public function setClassmarkUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkUserTable)
    {
        $this->classmarkUserTable = $classmarkUserTable;
        return $this;
    }


}

