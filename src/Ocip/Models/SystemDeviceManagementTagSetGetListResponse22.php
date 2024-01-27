<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListResponse22
 *
 * Response to SystemDeviceManagementTagSetGetListRequest22.
 *         The response includes a table of tag set names defined in the system.
 *         Column headings are: "Tag Set Name", "Reseller Id".
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *         The system default tag set name is not part of this response.
 *
 * @see SystemDeviceManagementTagSetGetListRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8353","type":"sequence"}]
 */
class SystemDeviceManagementTagSetGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:8353
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $tagSetTable = null;

    /**
     * Getter for tagSetTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTagSetTable()
    {
        return $this->tagSetTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetTable;
    }

    /**
     * Setter for tagSetTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagSetTable
     * @return $this
     */
    public function setTagSetTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $tagSetTable)
    {
        $this->tagSetTable = $tagSetTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetTable()
    {
        $this->tagSetTable = null;
        return $this;
    }
}

