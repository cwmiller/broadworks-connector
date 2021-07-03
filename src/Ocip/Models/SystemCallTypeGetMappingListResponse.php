<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetMappingListResponse
 *
 * Response to SystemCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 *
 * @see SystemCallTypeGetMappingListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5280","type":"sequence"}]
 */
class SystemCallTypeGetMappingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callTypeMapping
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5280
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

