<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetServiceInstanceListInSystemResponse
 *
 * Response to UserGetServiceInstanceListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Service Provider Id", "Service Type", "Name", "Phone Number", 
 *         "Extension", "Reseller Id" in a row for each Service Instance. Possible values for Service Type column are ServiceType enums. 
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see UserGetServiceInstanceListInSystemRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2303","type":"sequence"}]
 */
class UserGetServiceInstanceListInSystemResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2303
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceInstanceTable = null;

    /**
     * Getter for serviceInstanceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceInstanceTable()
    {
        return $this->serviceInstanceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceTable;
    }

    /**
     * Setter for serviceInstanceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceInstanceTable
     * @return $this
     */
    public function setServiceInstanceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceInstanceTable)
    {
        $this->serviceInstanceTable = $serviceInstanceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceTable()
    {
        $this->serviceInstanceTable = null;
        return $this;
    }


}

