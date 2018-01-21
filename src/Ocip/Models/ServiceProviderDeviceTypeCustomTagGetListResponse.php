<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagGetListResponse
 *
 * Response to ServiceProviderDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System on a per-device type basis for a service provider.
 *         In As data mode, the column headings are:
 *           "Tag Name", "Tag Value".
 *         In XS data mode, the column headings are:
 *           "Tag Name", "Tag Value" if request is invoked by an admin without
 * system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted" if request is invoked by an
 * admin with system privileges.
 */
class ServiceProviderDeviceTypeCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderDeviceTypeCustomTagsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderDeviceTypeCustomTagsTable = null;

    /**
     * Getter for serviceProviderDeviceTypeCustomTagsTable
     *
     * @ElementName serviceProviderDeviceTypeCustomTagsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceProviderDeviceTypeCustomTagsTable()
    {
        return $this->serviceProviderDeviceTypeCustomTagsTable;
    }

    /**
     * Setter for serviceProviderDeviceTypeCustomTagsTable
     *
     * @ElementName serviceProviderDeviceTypeCustomTagsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceProviderDeviceTypeCustomTagsTable
     * @return $this
     */
    public function setServiceProviderDeviceTypeCustomTagsTable($serviceProviderDeviceTypeCustomTagsTable)
    {
        $this->serviceProviderDeviceTypeCustomTagsTable = $serviceProviderDeviceTypeCustomTagsTable;
        return $this;
    }


}

