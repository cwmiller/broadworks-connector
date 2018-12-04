<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetMappingListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 *
 * @see SystemOutgoingCallingPlanCallTypeGetMappingListRequest
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:956","type":"sequence"}]
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callTypeMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:956
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callTypeMapping = null;

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

