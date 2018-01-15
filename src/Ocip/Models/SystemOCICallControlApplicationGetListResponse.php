<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetListResponse
 *
 * Response to SystemOCICallControlApplicationGetListRequest. The table columns
 * are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification
 * Timeout Seconds" and "Max Event Channels Per Set".
 */
class SystemOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName appTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $appTable = null;

    /**
     * Getter for appTable
     *
     * @ElementName appTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAppTable()
    {
        return $this->appTable;
    }

    /**
     * Setter for appTable
     *
     * @ElementName appTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $appTable
     * @return $this
     */
    public function setAppTable($appTable)
    {
        $this->appTable = $appTable;
        return $this;
    }


}

