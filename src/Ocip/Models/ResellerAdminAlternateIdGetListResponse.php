<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminAlternateIdGetListResponse
 *
 * Response to ResellerAdminAlternateIdGetListRequest.
 *         Contains a table of the main admin user id and the alternate admin user ids, the column headings are: "User Id", "Description", "Alternate".
 *         The possible values for "Alternate" are "true" and "false".
 *         The "Description" is only present for alternate admin user Ids.
 *
 * @see ResellerAdminAlternateIdGetListRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:171","type":"sequence"}]
 */
class ResellerAdminAlternateIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName adminUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b009175f2a2a9d38115e319a6ad64d7f:171
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

