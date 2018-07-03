<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeFileGetListResponse
 *
 * Response to ServiceProviderDeviceTypeFileGetListRequest.
 *         Contains a table of device type files managed by the Device Management
 * System, on a per-service provider basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access
 * URL", "Repository URL", "Template URL".
 *
 * @see ServiceProviderDeviceTypeFileGetListRequest
 */
class ServiceProviderDeviceTypeFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderDeviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderDeviceTypeFilesTable = null;

    /**
     * @ElementName serviceProviderHasCustomizableDynamicFiles
     * @var bool|null
     */
    private $serviceProviderHasCustomizableDynamicFiles = null;

    /**
     * Getter for serviceProviderDeviceTypeFilesTable
     *
     * @ElementName serviceProviderDeviceTypeFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceProviderDeviceTypeFilesTable()
    {
        return $this->serviceProviderDeviceTypeFilesTable;
    }

    /**
     * Setter for serviceProviderDeviceTypeFilesTable
     *
     * @ElementName serviceProviderDeviceTypeFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceProviderDeviceTypeFilesTable
     * @return $this
     */
    public function setServiceProviderDeviceTypeFilesTable($serviceProviderDeviceTypeFilesTable)
    {
        $this->serviceProviderDeviceTypeFilesTable = $serviceProviderDeviceTypeFilesTable;
        return $this;
    }

    /**
     * Getter for serviceProviderHasCustomizableDynamicFiles
     *
     * @ElementName serviceProviderHasCustomizableDynamicFiles
     * @return bool|null
     */
    public function getServiceProviderHasCustomizableDynamicFiles()
    {
        return $this->serviceProviderHasCustomizableDynamicFiles;
    }

    /**
     * Setter for serviceProviderHasCustomizableDynamicFiles
     *
     * @ElementName serviceProviderHasCustomizableDynamicFiles
     * @param bool|null $serviceProviderHasCustomizableDynamicFiles
     * @return $this
     */
    public function setServiceProviderHasCustomizableDynamicFiles($serviceProviderHasCustomizableDynamicFiles)
    {
        $this->serviceProviderHasCustomizableDynamicFiles = $serviceProviderHasCustomizableDynamicFiles;
        return $this;
    }


}

