<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetRegionTagGetListResponse
 *
 * Response to SystemDeviceManagementTagSetRegionTagGetListRequest.
 *         The column headings for the tagsTable are: "Tag Name", "Tag Value".
 *
 * @see SystemDeviceManagementTagSetRegionTagGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8589","type":"sequence"}]
 */
class SystemDeviceManagementTagSetRegionTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:8589
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $tagsTable = null;

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

