<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationListResponse
 *
 * Response to ServiceProviderServiceGetAuthorizationListRequest.
 *         Contains two tables, one for the group services and one for the user services.
 *         The Group Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation"
 *         The User Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation", "User Assignable", "Service Pack Assignable".
 *
 * @see ServiceProviderServiceGetAuthorizationListRequest
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:4913","type":"sequence"}]
 */
class ServiceProviderServiceGetAuthorizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:4913
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupServicesAuthorizationTable = null;

    /**
     * @ElementName userServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:4913
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServicesAuthorizationTable = null;

    /**
     * Getter for groupServicesAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupServicesAuthorizationTable()
    {
        return $this->groupServicesAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServicesAuthorizationTable;
    }

    /**
     * Setter for groupServicesAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServicesAuthorizationTable
     * @return $this
     */
    public function setGroupServicesAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServicesAuthorizationTable)
    {
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServicesAuthorizationTable()
    {
        $this->groupServicesAuthorizationTable = null;
        return $this;
    }

    /**
     * Getter for userServicesAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserServicesAuthorizationTable()
    {
        return $this->userServicesAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServicesAuthorizationTable;
    }

    /**
     * Setter for userServicesAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAuthorizationTable
     * @return $this
     */
    public function setUserServicesAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAuthorizationTable)
    {
        $this->userServicesAuthorizationTable = $userServicesAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServicesAuthorizationTable()
    {
        $this->userServicesAuthorizationTable = null;
        return $this;
    }


}

