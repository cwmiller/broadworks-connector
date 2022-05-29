<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLinePortGetListResponse
 *
 * Response to UserLinePortGetListRequest.
 *           Contains a table of line ports configured for a user
 *           The column headings are: "Line Port", "Line Port Type", "In Trunk Group",
 *           "Contact", "Contact2", "Contact3", "Contact4", "Contact5", " Authentication Mode ",
 *           and "Auto-Config Soft Client".
 *
 * @see UserLinePortGetListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2480","type":"sequence"}]
 */
class UserLinePortGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName linePortTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2480
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $linePortTable = null;

    /**
     * Getter for linePortTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLinePortTable()
    {
        return $this->linePortTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePortTable;
    }

    /**
     * Setter for linePortTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $linePortTable
     * @return $this
     */
    public function setLinePortTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $linePortTable)
    {
        $this->linePortTable = $linePortTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePortTable()
    {
        $this->linePortTable = null;
        return $this;
    }


}

