<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeLanguageMappingGetListResponse
 *
 * Response to SystemSIPDeviceTypeLanguageMappingGetListRequest.
 *         Contains a table of device type languages mapped to equivalent
 * BroadWorks languages.
 *         The column headings are: "BroadWorks Language", "Device Language".
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeLanguagesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeLanguagesTable = null;

    /**
     * Getter for deviceTypeLanguagesTable
     *
     * @ElementName deviceTypeLanguagesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceTypeLanguagesTable()
    {
        return $this->deviceTypeLanguagesTable;
    }

    /**
     * Setter for deviceTypeLanguagesTable
     *
     * @ElementName deviceTypeLanguagesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceTypeLanguagesTable
     * @return $this
     */
    public function setDeviceTypeLanguagesTable($deviceTypeLanguagesTable)
    {
        $this->deviceTypeLanguagesTable = $deviceTypeLanguagesTable;
        return $this;
    }


}

