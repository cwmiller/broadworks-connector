<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetAllResponse
 *
 * Response to SystemAccessDeviceGetAllRequest.
 *         Contains a table of devices configured in the entire system.
 *         The column headings are: "Service Provider Id", "Is Enterprise", "Group Id",
 *         "Device Name", "Device Type", "Net Address", "MAC Address", "Status", "Reseller Id", 
 *         "Access Device External Id".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"        
 *           "Access Device External Id"
 *
 * @see SystemAccessDeviceGetAllRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1101","type":"sequence"}]
 */
class SystemAccessDeviceGetAllResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1101
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $accessDeviceTable = null;

    /**
     * Getter for accessDeviceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceTable;
    }

    /**
     * Setter for accessDeviceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable
     * @return $this
     */
    public function setAccessDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceTable()
    {
        $this->accessDeviceTable = null;
        return $this;
    }
}

