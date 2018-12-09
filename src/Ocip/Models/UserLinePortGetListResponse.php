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
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:1999","type":"sequence"}]
 */
class UserLinePortGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName linePortTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:1999
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $linePortTable = null;

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

