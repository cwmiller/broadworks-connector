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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17519","type":"sequence"}]
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTypeLanguagesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:17519
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTypeLanguagesTable = null;

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

