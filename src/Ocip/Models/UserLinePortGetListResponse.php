<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLinePortGetListResponse
 *
 * Response to UserLinePortGetListRequest.
 *           Contains a table of line ports configured for a user
 *           The column headings are: "Line Port", "Line Port Type", "In Trunk
 * Group",
 *           "Contact", "Contact2", "Contact3", "Contact4", "Contact5", "
 * Authentication Mode ",
 *           and "Auto-Config Soft Client".
 *
 * @see UserLinePortGetListRequest
 */
class UserLinePortGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName linePortTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $linePortTable = null;

    /**
     * Getter for linePortTable
     *
     * @ElementName linePortTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLinePortTable()
    {
        return $this->linePortTable;
    }

    /**
     * Setter for linePortTable
     *
     * @ElementName linePortTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $linePortTable
     * @return $this
     */
    public function setLinePortTable($linePortTable)
    {
        $this->linePortTable = $linePortTable;
        return $this;
    }


}

