<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetRadiusServerListResponse
 *
 * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 */
class SystemAccountingGetRadiusServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName radiusServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $radiusServerTable = null;

    /**
     * Getter for radiusServerTable
     *
     * @ElementName radiusServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRadiusServerTable()
    {
        return $this->radiusServerTable;
    }

    /**
     * Setter for radiusServerTable
     *
     * @ElementName radiusServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $radiusServerTable
     * @return $this
     */
    public function setRadiusServerTable($radiusServerTable)
    {
        $this->radiusServerTable = $radiusServerTable;
        return $this;
    }


}

