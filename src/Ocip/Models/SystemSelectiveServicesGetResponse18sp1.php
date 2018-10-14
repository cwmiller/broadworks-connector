<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse18sp1
 *
 * Response to SystemSelectiveServicesGetRequest18sp1.
 *
 * @see SystemSelectiveServicesGetRequest18sp1
 */
class SystemSelectiveServicesGetResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleCombination
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    private $scheduleCombination = null;

    /**
     * @ElementName screenPrivateNumber
     * @var bool|null
     */
    private $screenPrivateNumber = null;

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

    /**
     * Getter for screenPrivateNumber
     *
     * @ElementName screenPrivateNumber
     * @return bool|null
     */
    public function getScreenPrivateNumber()
    {
        return $this->screenPrivateNumber;
    }

    /**
     * Setter for screenPrivateNumber
     *
     * @ElementName screenPrivateNumber
     * @param bool|null $screenPrivateNumber
     * @return $this
     */
    public function setScreenPrivateNumber($screenPrivateNumber)
    {
        $this->screenPrivateNumber = $screenPrivateNumber;
        return $this;
    }


}

