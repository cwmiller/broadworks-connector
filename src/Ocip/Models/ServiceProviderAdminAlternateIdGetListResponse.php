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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1352","type":"sequence"}]
 */
class ServiceProviderAdminAlternateIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName adminUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:1352
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $adminUserIdTable = null;

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

