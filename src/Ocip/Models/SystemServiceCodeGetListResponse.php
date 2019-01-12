<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListResponse
 *
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 *
 * @see SystemServiceCodeGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14431","type":"sequence"}]
 */
class SystemServiceCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14431
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceCodeTable = null;

    /**
     * Getter for serviceCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCodeTable;
    }

    /**
     * Setter for serviceCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable
     * @return $this
     */
    public function setServiceCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCodeTable()
    {
        $this->serviceCodeTable = null;
        return $this;
    }


}

