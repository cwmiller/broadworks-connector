<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeLanguageMappingGetListResponse
 *
 * Response to SystemSIPDeviceTypeLanguageMappingGetListRequest.
 *         Contains a table of device type languages mapped to equivalent BroadWorks languages.
 *         The column headings are: "BroadWorks Language", "Device Language".
 *
 * @see SystemSIPDeviceTypeLanguageMappingGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:15259","type":"sequence"}]
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeLanguagesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:15259
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeLanguagesTable = null;

    /**
     * Getter for deviceTypeLanguagesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTypeLanguagesTable()
    {
        return $this->deviceTypeLanguagesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeLanguagesTable;
    }

    /**
     * Setter for deviceTypeLanguagesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeLanguagesTable
     * @return $this
     */
    public function setDeviceTypeLanguagesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeLanguagesTable)
    {
        $this->deviceTypeLanguagesTable = $deviceTypeLanguagesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeLanguagesTable()
    {
        $this->deviceTypeLanguagesTable = null;
        return $this;
    }


}

