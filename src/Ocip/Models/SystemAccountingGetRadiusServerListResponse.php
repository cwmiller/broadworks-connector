<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetRadiusServerListResponse
 *
 * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 *
 * @see SystemAccountingGetRadiusServerListRequest
 */
class SystemAccountingGetRadiusServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName radiusServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $radiusServerTable = null;

    /**
     * Getter for radiusServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRadiusServerTable()
    {
        return $this->radiusServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->radiusServerTable;
    }

    /**
     * Setter for radiusServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $radiusServerTable
     * @return $this
     */
    public function setRadiusServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $radiusServerTable)
    {
        $this->radiusServerTable = $radiusServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRadiusServerTable()
    {
        $this->radiusServerTable = null;
        return $this;
    }


}

