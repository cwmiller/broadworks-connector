<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetMappingListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetMappingListRequest. The table
 * columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 *
 * @see SystemOutgoingCallingPlanCallTypeGetMappingListRequest
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callTypeMapping
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callTypeMapping = null;

    /**
     * Getter for callTypeMapping
     *
     * @ElementName callTypeMapping
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallTypeMapping()
    {
        return $this->callTypeMapping;
    }

    /**
     * Setter for callTypeMapping
     *
     * @ElementName callTypeMapping
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callTypeMapping
     * @return $this
     */
    public function setCallTypeMapping(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeMapping)
    {
        $this->callTypeMapping = $callTypeMapping;
        return $this;
    }


}

