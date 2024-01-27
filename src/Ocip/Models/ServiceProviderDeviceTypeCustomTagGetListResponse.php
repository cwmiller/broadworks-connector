<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagGetListResponse
 *
 * Response to ServiceProviderDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device type basis for a service provider.
 *         In As data mode, the column headings are:
 *           "Tag Name", "Tag Value".
 *         In XS data mode, the column headings are:
 *           "Tag Name", "Tag Value" if request is invoked by an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted" if request is invoked by an admin with system privileges.
 *
 * @see ServiceProviderDeviceTypeCustomTagGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3258","type":"sequence"}]
 */
class ServiceProviderDeviceTypeCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderDeviceTypeCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:3258
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceProviderDeviceTypeCustomTagsTable = null;

    /**
     * Getter for serviceProviderDeviceTypeCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceProviderDeviceTypeCustomTagsTable()
    {
        return $this->serviceProviderDeviceTypeCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderDeviceTypeCustomTagsTable;
    }

    /**
     * Setter for serviceProviderDeviceTypeCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderDeviceTypeCustomTagsTable
     * @return $this
     */
    public function setServiceProviderDeviceTypeCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderDeviceTypeCustomTagsTable)
    {
        $this->serviceProviderDeviceTypeCustomTagsTable = $serviceProviderDeviceTypeCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderDeviceTypeCustomTagsTable()
    {
        $this->serviceProviderDeviceTypeCustomTagsTable = null;
        return $this;
    }
}

