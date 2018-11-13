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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderDeviceTypeFilesTable = null;

    /**
     * @ElementName serviceProviderHasCustomizableDynamicFiles
     * @Type bool
     * @var bool|null
     */
    private $serviceProviderHasCustomizableDynamicFiles = null;

    /**
     * Getter for serviceProviderDeviceTypeFilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceProviderDeviceTypeFilesTable()
    {
        return $this->serviceProviderDeviceTypeFilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderDeviceTypeFilesTable;
    }

    /**
     * Setter for serviceProviderDeviceTypeFilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderDeviceTypeFilesTable
     * @return $this
     */
    public function setServiceProviderDeviceTypeFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderDeviceTypeFilesTable)
    {
        $this->serviceProviderDeviceTypeFilesTable = $serviceProviderDeviceTypeFilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderDeviceTypeFilesTable()
    {
        $this->serviceProviderDeviceTypeFilesTable = null;
        return $this;
    }

    /**
     * Getter for serviceProviderHasCustomizableDynamicFiles
     *
     * @return bool
     */
    public function getServiceProviderHasCustomizableDynamicFiles()
    {
        return $this->serviceProviderHasCustomizableDynamicFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderHasCustomizableDynamicFiles;
    }

    /**
     * Setter for serviceProviderHasCustomizableDynamicFiles
     *
     * @param bool $serviceProviderHasCustomizableDynamicFiles
     * @return $this
     */
    public function setServiceProviderHasCustomizableDynamicFiles($serviceProviderHasCustomizableDynamicFiles)
    {
        $this->serviceProviderHasCustomizableDynamicFiles = $serviceProviderHasCustomizableDynamicFiles;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderHasCustomizableDynamicFiles()
    {
        $this->serviceProviderHasCustomizableDynamicFiles = null;
        return $this;
    }


}

