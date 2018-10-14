<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceFileGetListResponse
 *
 * Response to UserAccessDeviceFileGetListRequest.
 *         Contains a table of user modifiable Device Management files.
 *         The column headings are: "File Format", "Template URL".
 *
 * @see UserAccessDeviceFileGetListRequest
 */
class UserAccessDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceFilesTable = null;

    /**
     * Getter for deviceFilesTable
     *
     * @ElementName deviceFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceFilesTable()
    {
        return $this->deviceFilesTable;
    }

    /**
     * Setter for deviceFilesTable
     *
     * @ElementName deviceFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceFilesTable
     * @return $this
     */
    public function setDeviceFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceFilesTable)
    {
        $this->deviceFilesTable = $deviceFilesTable;
        return $this;
    }


}

