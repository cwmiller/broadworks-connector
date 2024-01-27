<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse
 *
 * Response to SystemSelectiveServicesGetRequest.
 *
 * @see SystemSelectiveServicesGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:29625","type":"sequence"}]
 */
class SystemSelectiveServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleCombination
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     * @Group d8f04177e438f303b41c211e518706bf:29625
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    protected $scheduleCombination = null;

    /**
     * Getter for scheduleCombination
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination(\CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination)
    {
        $this->scheduleCombination = $scheduleCombination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleCombination()
    {
        $this->scheduleCombination = null;
        return $this;
    }
}

