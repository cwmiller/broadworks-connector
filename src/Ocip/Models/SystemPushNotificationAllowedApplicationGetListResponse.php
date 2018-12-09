<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationAllowedApplicationGetListResponse
 *
 * Response to SystemPushNotificationAllowedApplicationGetListRequest.
 *         Contains a table with a row for each allowed push notification application with columns:
 *         "Application Id", "Description"
 *
 * @see SystemPushNotificationAllowedApplicationGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:12956","type":"sequence"}]
 */
class SystemPushNotificationAllowedApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:12956
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $applicationTable = null;

    /**
     * Getter for applicationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getApplicationTable()
    {
        return $this->applicationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationTable;
    }

    /**
     * Setter for applicationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $applicationTable
     * @return $this
     */
    public function setApplicationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $applicationTable)
    {
        $this->applicationTable = $applicationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationTable()
    {
        $this->applicationTable = null;
        return $this;
    }


}

