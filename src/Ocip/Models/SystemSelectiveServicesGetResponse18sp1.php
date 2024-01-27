<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSelectiveServicesGetResponse18sp1
 *
 * Response to SystemSelectiveServicesGetRequest18sp1.
 *
 * @see SystemSelectiveServicesGetRequest18sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:29640","type":"sequence"}]
 */
class SystemSelectiveServicesGetResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleCombination
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType
     * @Group d8f04177e438f303b41c211e518706bf:29640
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleCombinationType|null
     */
    protected $scheduleCombination = null;

    /**
     * @ElementName screenPrivateNumber
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:29640
     * @var bool|null
     */
    protected $screenPrivateNumber = null;

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

    /**
     * Getter for screenPrivateNumber
     *
     * @return bool
     */
    public function getScreenPrivateNumber()
    {
        return $this->screenPrivateNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screenPrivateNumber;
    }

    /**
     * Setter for screenPrivateNumber
     *
     * @param bool $screenPrivateNumber
     * @return $this
     */
    public function setScreenPrivateNumber($screenPrivateNumber)
    {
        $this->screenPrivateNumber = $screenPrivateNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreenPrivateNumber()
    {
        $this->screenPrivateNumber = null;
        return $this;
    }
}

