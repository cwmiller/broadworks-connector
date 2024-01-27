<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetMappingListResponse
 *
 * Response to SystemCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map", "Call Type" and "Ignore AS Emergency Route".
 *         The following column is returned only in AS Mode:
 *         "Ignore AS Emergency Route"
 *
 * @see SystemCallTypeGetMappingListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5342","type":"sequence"}]
 */
class SystemCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callTypeMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:5342
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

