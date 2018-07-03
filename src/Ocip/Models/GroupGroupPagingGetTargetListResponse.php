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
 */
class GroupGroupPagingGetTargetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName targetTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $targetTable = null;

    /**
     * Getter for targetTable
     *
     * @ElementName targetTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTargetTable()
    {
        return $this->targetTable;
    }

    /**
     * Setter for targetTable
     *
     * @ElementName targetTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $targetTable
     * @return $this
     */
    public function setTargetTable($targetTable)
    {
        $this->targetTable = $targetTable;
        return $this;
    }


}

