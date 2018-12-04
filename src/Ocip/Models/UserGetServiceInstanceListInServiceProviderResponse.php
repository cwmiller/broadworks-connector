<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetServiceInstanceListInServiceProviderResponse
 *
 * Response to UserGetServiceInstanceListInServiceProviderRequest.
 *         Contains a table with column headings :  "User Id", "Group Id", "Service Type",
 *         "Name", "Phone Number", "Extension", "Department" in a row for each Service Instance.  Possible values for Service Type column are ServiceType enums.
 *
 * @see UserGetServiceInstanceListInServiceProviderRequest
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:1776","type":"sequence"}]
 */
class UserGetServiceInstanceListInServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 489b2153267470be8e945bf6b778e0d0:1776
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceInstanceTable = null;

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

