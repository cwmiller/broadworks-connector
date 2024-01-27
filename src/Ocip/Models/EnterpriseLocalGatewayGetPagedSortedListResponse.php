<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseLocalGatewayGetPagedSortedListResponse
 *
 * Response to EnterpriseLocalGatewayGetPagedSortedListRequest.
 *         Contains a table with column headings "Name", "Device Name", "Device Level", "Group Id", "Group Name"  and "Group External Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         The following columns are only populated in AS data mode
 *         "Group External Id"
 *
 * @see EnterpriseLocalGatewayGetPagedSortedListRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:507","type":"sequence"}]
 */
class EnterpriseLocalGatewayGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName localGatewayTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:507
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $localGatewayTable = null;

    /**
     * Getter for localGatewayTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLocalGatewayTable()
    {
        return $this->localGatewayTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->localGatewayTable;
    }

    /**
     * Setter for localGatewayTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $localGatewayTable
     * @return $this
     */
    public function setLocalGatewayTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $localGatewayTable)
    {
        $this->localGatewayTable = $localGatewayTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocalGatewayTable()
    {
        $this->localGatewayTable = null;
        return $this;
    }
}

