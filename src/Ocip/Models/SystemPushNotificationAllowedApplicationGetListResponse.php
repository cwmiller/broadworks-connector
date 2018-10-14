<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationAllowedApplicationGetListResponse
 *
 * Response to SystemPushNotificationAllowedApplicationGetListRequest.
 *         Contains a table with a row for each allowed push notification
 * application with columns:
 *         "Application Id", "Description"
 *
 * @see SystemPushNotificationAllowedApplicationGetListRequest
 */
class SystemPushNotificationAllowedApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $applicationTable = null;

    /**
     * Getter for applicationTable
     *
     * @ElementName applicationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getApplicationTable()
    {
        return $this->applicationTable;
    }

    /**
     * Setter for applicationTable
     *
     * @ElementName applicationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $applicationTable
     * @return $this
     */
    public function setApplicationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $applicationTable)
    {
        $this->applicationTable = $applicationTable;
        return $this;
    }


}

