<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse18sp1
 *
 * Response to SystemSelectiveServicesGetRequest18sp1.
 */
class SystemSelectiveServicesGetResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleCombination
     * @var string|null
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

