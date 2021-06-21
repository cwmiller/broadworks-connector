<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminAlternateIdGetListResponse
 *
 * Response to ServiceProviderAdminAlternateIdGetListRequest.
 *         Contains a table of the main admin user id and the alternate admin user ids, the column headings are: "User Id", "Description", "Alternate".
 *         The possible values for "Alternate" are "true" and "false".
 *         The "Description" is only present for alternate admin user Ids.
 *
 * @see ServiceProviderAdminAlternateIdGetListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1322","type":"sequence"}]
 */
class ServiceProviderAdminAlternateIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName adminUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1322
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $adminUserIdTable = null;

    /**
     * Getter for adminUserIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAdminUserIdTable()
    {
        return $this->adminUserIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminUserIdTable;
    }

    /**
     * Setter for adminUserIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $adminUserIdTable
     * @return $this
     */
    public function setAdminUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $adminUserIdTable)
    {
        $this->adminUserIdTable = $adminUserIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdminUserIdTable()
    {
        $this->adminUserIdTable = null;
        return $this;
    }


}

