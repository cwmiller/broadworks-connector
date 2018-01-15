<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetListResponse
 *
 * Response to the SystemNumberPortabilityQueryStatusGetListRequest.
 *         Contains a table with column headings:
 *         "Status and Treatment File Name".
 */
class SystemNumberPortabilityQueryStatusGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $statusTable = null;

    /**
     * Getter for statusTable
     *
     * @ElementName statusTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getStatusTable()
    {
        return $this->statusTable;
    }

    /**
     * Setter for statusTable
     *
     * @ElementName statusTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $statusTable
     * @return $this
     */
    public function setStatusTable($statusTable)
    {
        $this->statusTable = $statusTable;
        return $this;
    }


}

