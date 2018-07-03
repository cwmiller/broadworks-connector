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
     * @var string|null
     */
    private $scheduleCombination = null;

    /**
     * Getter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @return string|null
     */
    public function getScheduleCombination()
    {
        return $this->scheduleCombination;
    }

    /**
     * Setter for scheduleCombination
     *
     * @ElementName scheduleCombination
     * @param string|null $scheduleCombination
     * @return $this
     */
    public function setScheduleCombination($scheduleCombination)
    {
        $this->scheduleCombination = $scheduleCombination;
        return $this;
    }


}

