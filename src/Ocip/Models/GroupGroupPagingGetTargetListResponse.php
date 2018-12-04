<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetTargetListResponse
 *
 * Response to the GroupGroupPagingGetTargetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupGroupPagingGetTargetListRequest
 * @Groups [{"id":"76de8409eddf3e150e3b79f9c41e6cc0:381","type":"sequence"}]
 */
class GroupGroupPagingGetTargetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName targetTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 76de8409eddf3e150e3b79f9c41e6cc0:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $targetTable = null;

    /**
     * Getter for targetTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTargetTable()
    {
        return $this->targetTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->targetTable;
    }

    /**
     * Setter for targetTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $targetTable
     * @return $this
     */
    public function setTargetTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $targetTable)
    {
        $this->targetTable = $targetTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTargetTable()
    {
        $this->targetTable = null;
        return $this;
    }


}

