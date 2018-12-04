<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizationListResponse
 *
 * Response to GroupServiceGetAuthorizationListRequest.
 *         Contains three tables, one for the service packs, one for the group services, and one for
 *         the user services.
 *         The user table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "User Assignable", "Group Service Assignable".
 *         The group service table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "Instance Count".
 *         The service pack table's column headings are:
 *           "Service Pack Name", "Authorized", "Assigned", "Limited", "Allocated", "Allowed", "Usage", "Description".
 *
 * @see GroupServiceGetAuthorizationListRequest
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:6450","type":"sequence"}]
 */
class GroupServiceGetAuthorizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePacksAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:6450
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $servicePacksAuthorizationTable = null;

    /**
     * @ElementName groupServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:6450
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupServicesAuthorizationTable = null;

    /**
     * @ElementName userServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:6450
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServicesAuthorizationTable = null;

    /**
     * Getter for servicePacksAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServicePacksAuthorizationTable()
    {
        return $this->servicePacksAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePacksAuthorizationTable;
    }

    /**
     * Setter for servicePacksAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAuthorizationTable
     * @return $this
     */
    public function setServicePacksAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAuthorizationTable)
    {
        $this->servicePacksAuthorizationTable = $servicePacksAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePacksAuthorizationTable()
    {
        $this->servicePacksAuthorizationTable = null;
        return $this;
    }

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

