<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupPagingGetListResponse
 *
 * Response to the UserGroupPagingGetListRequest.
 *         The groupPagingTable contains columns: "Name", "Phone Number", "Extension" and "Is Active"
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see UserGroupPagingGetListRequest
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:596","type":"sequence"}]
 */
class UserGroupPagingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pagingGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0d36df8c109e3ea7324f79031368c661:596
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $pagingGroupTable = null;

    /**
     * Getter for pagingGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPagingGroupTable()
    {
        return $this->pagingGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pagingGroupTable;
    }

    /**
     * Setter for pagingGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pagingGroupTable
     * @return $this
     */
    public function setPagingGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pagingGroupTable)
    {
        $this->pagingGroupTable = $pagingGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPagingGroupTable()
    {
        $this->pagingGroupTable = null;
        return $this;
    }


}

