<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyGetListResponse
 *
 * Response to SystemDeviceFamilyGetListRequest.
 *         The response includes a table of device family defined in the system.
 *         Column headings are: "Device Family Name", "Reseller Id".
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDeviceFamilyGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7474","type":"sequence"}]
 */
class SystemDeviceFamilyGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceFamilyTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7474
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceFamilyTable = null;

    /**
     * Getter for deviceFamilyTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceFamilyTable()
    {
        return $this->deviceFamilyTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyTable;
    }

    /**
     * Setter for deviceFamilyTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceFamilyTable
     * @return $this
     */
    public function setDeviceFamilyTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceFamilyTable)
    {
        $this->deviceFamilyTable = $deviceFamilyTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyTable()
    {
        $this->deviceFamilyTable = null;
        return $this;
    }


}

