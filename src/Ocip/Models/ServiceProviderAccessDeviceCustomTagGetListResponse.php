<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceCustomTagGetListResponse
 *
 * Response to ServiceProviderAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device profile basis.
 *         In AS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value" if request is invoked by an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value" if request is invoked by an admin with system privileges.
 *
 * @see ServiceProviderAccessDeviceCustomTagGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:387","type":"sequence"}]
 */
class ServiceProviderAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:387
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceCustomTagsTable = null;

    /**
     * Getter for deviceCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceCustomTagsTable()
    {
        return $this->deviceCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceCustomTagsTable;
    }

    /**
     * Setter for deviceCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceCustomTagsTable
     * @return $this
     */
    public function setDeviceCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceCustomTagsTable)
    {
        $this->deviceCustomTagsTable = $deviceCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceCustomTagsTable()
    {
        $this->deviceCustomTagsTable = null;
        return $this;
    }
}

