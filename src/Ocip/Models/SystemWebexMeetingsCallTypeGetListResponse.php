<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemWebexMeetingsCallTypeGetListResponse
 *
 * Response to a SystemWebexMeetingsCallTypeGetListRequest. Contains a table with one row per Webex Meetings call type entry.  The table column headings are: "Name", "NS Call Type", "Enforce NS Charge Field" and "Process As Internal For SAC-Subscriber".
 *
 * @see SystemWebexMeetingsCallTypeGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19595","type":"sequence"}]
 */
class SystemWebexMeetingsCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:19595
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callTypeTable = null;

    /**
     * Getter for callTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallTypeTable()
    {
        return $this->callTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTypeTable;
    }

    /**
     * Setter for callTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeTable
     * @return $this
     */
    public function setCallTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeTable)
    {
        $this->callTypeTable = $callTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTypeTable()
    {
        $this->callTypeTable = null;
        return $this;
    }
}

