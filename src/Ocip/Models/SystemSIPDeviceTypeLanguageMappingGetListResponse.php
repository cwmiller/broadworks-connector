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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17295","type":"sequence"}]
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeLanguagesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17295
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

