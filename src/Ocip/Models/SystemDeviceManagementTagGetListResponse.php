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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $tagsTable = null;

    /**
     * Getter for tagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTagsTable()
    {
        return $this->tagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagsTable;
    }

    /**
     * Setter for tagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagsTable
     * @return $this
     */
    public function setTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagsTable)
    {
        $this->tagsTable = $tagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagsTable()
    {
        $this->tagsTable = null;
        return $this;
    }


}

