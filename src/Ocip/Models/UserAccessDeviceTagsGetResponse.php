<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceTagsGetResponse
 *
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 */
class UserAccessDeviceTagsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTagsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTagsTable = null;

    /**
     * Getter for deviceTagsTable
     *
     * @ElementName deviceTagsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceTagsTable()
    {
        return $this->deviceTagsTable;
    }

    /**
     * Setter for deviceTagsTable
     *
     * @ElementName deviceTagsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceTagsTable
     * @return $this
     */
    public function setDeviceTagsTable($deviceTagsTable)
    {
        $this->deviceTagsTable = $deviceTagsTable;
        return $this;
    }


}

