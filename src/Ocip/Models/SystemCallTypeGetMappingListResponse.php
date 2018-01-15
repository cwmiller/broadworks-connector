<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetMappingListResponse
 *
 * Response to SystemCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 */
class SystemCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setCallTypeMapping($callTypeMapping)
    {
        $this->callTypeMapping = $callTypeMapping;
        return $this;
    }


}

