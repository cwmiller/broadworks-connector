<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemApplicationControllerGetListResponse
 *
 * Response to the SystemApplicationControllerGetListRequest.
 *       Contains a table with column headings: "Name", "Subscriber Id", "Channel
 * Set Id", "Status".
 *       The column values for "Status" can either be "ready" or "notReady".
 *
 * @see SystemApplicationControllerGetListRequest
 */
class SystemApplicationControllerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationControllerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $applicationControllerTable = null;

    /**
     * Getter for applicationControllerTable
     *
     * @ElementName applicationControllerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getApplicationControllerTable()
    {
        return $this->applicationControllerTable;
    }

    /**
     * Setter for applicationControllerTable
     *
     * @ElementName applicationControllerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $applicationControllerTable
     * @return $this
     */
    public function setApplicationControllerTable($applicationControllerTable)
    {
        $this->applicationControllerTable = $applicationControllerTable;
        return $this;
    }


}

