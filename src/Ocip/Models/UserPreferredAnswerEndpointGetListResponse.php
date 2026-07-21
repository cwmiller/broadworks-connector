<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredAnswerEndpointGetListResponse
 *
 * Response to UserPreferredAnswerEndpointGetListRequest.
 *         Contains a table of devices associated to a user that can be configured  
 *         as Preferred Answer Endpoint.
 *         The column headings are: "Line Port", "Endpoint Type", "Is Preferred Answer Endpoint", "Device Name", "Device Level", "Device Type".
 *         The value of the "Endpoint Type" column is either Primary, Shared Call Appearance or Flexible Seating Guest.
 *
 * @see UserPreferredAnswerEndpointGetListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3478","type":"sequence"}]
 */
class UserPreferredAnswerEndpointGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3478
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

