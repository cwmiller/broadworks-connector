<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagGetListResponse
 *
 * Response to SystemDeviceManagementTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System.
 *         In AS data mode, the column headings are: "Tag Name", "Tag Value", "Is
 * Overridable".
 *         In XS data mode, the column headings are: "Tag Name", "Tag Value", "Is
 * Overridable", "Is Encrypted".
 *
 * @see SystemDeviceManagementTagGetListRequest
 */
class SystemDeviceManagementTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $tagsTable = null;

    /**
     * Getter for tagsTable
     *
     * @ElementName tagsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTagsTable()
    {
        return $this->tagsTable;
    }

    /**
     * Setter for tagsTable
     *
     * @ElementName tagsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $tagsTable
     * @return $this
     */
    public function setTagsTable($tagsTable)
    {
        $this->tagsTable = $tagsTable;
        return $this;
    }


}

