<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetServiceInstanceListInServiceProviderResponse
 *
 * Response to UserGetServiceInstanceListInServiceProviderRequest.
 *         Contains a table with column headings :  "User Id", "Group Id", "Service
 * Type",
 *         "Name", "Phone Number", "Extension", "Department" in a row for each
 * Service Instance.  Possible values for Service Type column are ServiceType
 * enums.
 *
 * @see UserGetServiceInstanceListInServiceProviderRequest
 */
class UserGetServiceInstanceListInServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setServiceInstanceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceInstanceTable)
    {
        $this->serviceInstanceTable = $serviceInstanceTable;
        return $this;
    }


}

