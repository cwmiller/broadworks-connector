<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetMappingListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 *
 * @see SystemOutgoingCallingPlanCallTypeGetMappingListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:955","type":"sequence"}]
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callTypeMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group a63afa661ee5c74f4700e562e88c66d0:955
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callTypeMapping = null;

    /**
     * Getter for callTypeMapping
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallTypeMapping()
    {
        return $this->callTypeMapping instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTypeMapping;
    }

    /**
     * Setter for callTypeMapping
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeMapping
     * @return $this
     */
    public function setCallTypeMapping(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeMapping)
    {
        $this->callTypeMapping = $callTypeMapping;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTypeMapping()
    {
        $this->callTypeMapping = null;
        return $this;
    }
}

