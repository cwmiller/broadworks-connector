<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFileRepositoryDeviceUserGetListResponse
 *
 * Response to GroupFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Delete","Allow Get","Allow Put" in a row for each file repository service provider user.
 *
 * @see GroupFileRepositoryDeviceUserGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5669","type":"sequence"}]
 */
class GroupFileRepositoryDeviceUserGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName fileRepositoryUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:5669
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $fileRepositoryUserTable = null;

    /**
     * Getter for fileRepositoryUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFileRepositoryUserTable()
    {
        return $this->fileRepositoryUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryUserTable;
    }

    /**
     * Setter for fileRepositoryUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryUserTable
     * @return $this
     */
    public function setFileRepositoryUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryUserTable)
    {
        $this->fileRepositoryUserTable = $fileRepositoryUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryUserTable()
    {
        $this->fileRepositoryUserTable = null;
        return $this;
    }
}

