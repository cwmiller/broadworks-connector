<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse
 *
 * Response to SystemSelectiveServicesGetRequest.
 *
 * @see SystemSelectiveServicesGetRequest
 */
class SystemSelectiveServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleCombination
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    private $scheduleCombination = null;

    /**
     * Getter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination(\CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType $scheduleCombination)
    {
        $this->scheduleCombination = $scheduleCombination;
        return $this;
    }


}

