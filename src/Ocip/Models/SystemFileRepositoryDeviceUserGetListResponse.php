<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetListResponse
 *
 * Response to SystemFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Get","Allow
 * Delete","Allow Put" in a row for each file repository user.
 *
 * @see SystemFileRepositoryDeviceUserGetListRequest
 */
class SystemFileRepositoryDeviceUserGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileRepositoryUserTable = null;

    /**
     * Getter for fileRepositoryUserTable
     *
     * @ElementName fileRepositoryUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getFileRepositoryUserTable()
    {
        return $this->fileRepositoryUserTable;
    }

    /**
     * Setter for fileRepositoryUserTable
     *
     * @ElementName fileRepositoryUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $fileRepositoryUserTable
     * @return $this
     */
    public function setFileRepositoryUserTable($fileRepositoryUserTable)
    {
        $this->fileRepositoryUserTable = $fileRepositoryUserTable;
        return $this;
    }


}

