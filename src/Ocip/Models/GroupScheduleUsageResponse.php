<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleUsageResponse
 *
 * Response to GroupScheduleUsageRequest.
 *         The response contains a list of service names.
 *         The response contains the usage for the requested schedule.
 *         The usage table has columns "Service Name", and "Instance Name".
 *         The Service Name values correspond to string values of the GroupService and UserService data types.
 *
 * @see GroupScheduleUsageRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7672","type":"sequence"}]
 */
class GroupScheduleUsageResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7672
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usageTable = null;

    /**
     * Getter for usageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUsageTable()
    {
        return $this->usageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usageTable;
    }

    /**
     * Setter for usageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable
     * @return $this
     */
    public function setUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsageTable()
    {
        $this->usageTable = null;
        return $this;
    }


}

