<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetServiceInstanceListInSystemResponse
 *
 * Response to UserGetServiceInstanceListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Serive
 * Provider Id", "Service Type", "Name", "Phone Number", 
 *         "Extension" in a row for each Service Instance. Possible values for
 * Service Type column are ServiceType enums.
 */
class UserGetServiceInstanceListInSystemResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceInstanceTable = null;

    /**
     * Getter for serviceInstanceTable
     *
     * @ElementName serviceInstanceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceInstanceTable()
    {
        return $this->serviceInstanceTable;
    }

    /**
     * Setter for serviceInstanceTable
     *
     * @ElementName serviceInstanceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceInstanceTable
     * @return $this
     */
    public function setServiceInstanceTable($serviceInstanceTable)
    {
        $this->serviceInstanceTable = $serviceInstanceTable;
        return $this;
    }


}

