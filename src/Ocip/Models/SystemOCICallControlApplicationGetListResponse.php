<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetListResponse
 *
 * Response to SystemOCICallControlApplicationGetListRequest. The table columns are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification Timeout Seconds", "Max Event Channels Per Set"
 *         and "Channel Set Grace Period Seconds".
 *
 * @see SystemOCICallControlApplicationGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11716","type":"sequence"}]
 */
class SystemOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName appTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:11716
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $appTable = null;

    /**
     * Getter for appTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAppTable()
    {
        return $this->appTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->appTable;
    }

    /**
     * Setter for appTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $appTable
     * @return $this
     */
    public function setAppTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $appTable)
    {
        $this->appTable = $appTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAppTable()
    {
        $this->appTable = null;
        return $this;
    }


}

