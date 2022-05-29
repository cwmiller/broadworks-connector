<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetListResponse
 *
 * Response to SystemFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Get","Allow Delete","Allow Put" in a row for each file repository user.
 *
 * @see SystemFileRepositoryDeviceUserGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10434","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10434
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

