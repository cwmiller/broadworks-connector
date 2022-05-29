<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferGetResponse14sp4
 *
 * Response to UserCallTransferGetRequest14sp4.
 *
 * @see UserCallTransferGetRequest14sp4
 * @Groups [{"id":"6604ba4b5f755b1ba8d7de48e87c6e63:57","type":"sequence"}]
 */
class UserCallTransferGetResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRecallActive
     * @Type bool
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @var bool|null
     */
    protected $isRecallActive = null;

    /**
     * @ElementName recallNumberOfRings
     * @Type int
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $recallNumberOfRings = null;

    /**
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @Type bool
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @var bool|null
     */
    protected $useDiversionInhibitorForBlindTransfer = null;

    /**
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @Type bool
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @var bool|null
     */
    protected $useDiversionInhibitorForConsultativeCalls = null;

    /**
     * @ElementName enableBusyCampOn
     * @Type bool
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @var bool|null
     */
    protected $enableBusyCampOn = null;

    /**
     * @ElementName busyCampOnSeconds
     * @Type int
     * @Group 6604ba4b5f755b1ba8d7de48e87c6e63:57
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    protected $busyCampOnSeconds = null;

    /**
     * Getter for isRecallActive
     *
     * @return bool
     */
    public function getIsRecallActive()
    {
        return $this->isRecallActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRecallActive;
    }

    /**
     * Setter for isRecallActive
     *
     * @param bool $isRecallActive
     * @return $this
     */
    public function setIsRecallActive($isRecallActive)
    {
        $this->isRecallActive = $isRecallActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRecallActive()
    {
        $this->isRecallActive = null;
        return $this;
    }

    /**
     * Getter for recallNumberOfRings
     *
     * @return int
     */
    public function getRecallNumberOfRings()
    {
        return $this->recallNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recallNumberOfRings;
    }

    /**
     * Setter for recallNumberOfRings
     *
     * @param int $recallNumberOfRings
     * @return $this
     */
    public function setRecallNumberOfRings($recallNumberOfRings)
    {
        $this->recallNumberOfRings = $recallNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecallNumberOfRings()
    {
        $this->recallNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitorForBlindTransfer
     *
     * @return bool
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return $this->useDiversionInhibitorForBlindTransfer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDiversionInhibitorForBlindTransfer;
    }

    /**
     * Setter for useDiversionInhibitorForBlindTransfer
     *
     * @param bool $useDiversionInhibitorForBlindTransfer
     * @return $this
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer)
    {
        $this->useDiversionInhibitorForBlindTransfer = $useDiversionInhibitorForBlindTransfer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDiversionInhibitorForBlindTransfer()
    {
        $this->useDiversionInhibitorForBlindTransfer = null;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitorForConsultativeCalls
     *
     * @return bool
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return $this->useDiversionInhibitorForConsultativeCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * Setter for useDiversionInhibitorForConsultativeCalls
     *
     * @param bool $useDiversionInhibitorForConsultativeCalls
     * @return $this
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls)
    {
        $this->useDiversionInhibitorForConsultativeCalls = $useDiversionInhibitorForConsultativeCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDiversionInhibitorForConsultativeCalls()
    {
        $this->useDiversionInhibitorForConsultativeCalls = null;
        return $this;
    }

    /**
     * Getter for enableBusyCampOn
     *
     * @return bool
     */
    public function getEnableBusyCampOn()
    {
        return $this->enableBusyCampOn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableBusyCampOn;
    }

    /**
     * Setter for enableBusyCampOn
     *
     * @param bool $enableBusyCampOn
     * @return $this
     */
    public function setEnableBusyCampOn($enableBusyCampOn)
    {
        $this->enableBusyCampOn = $enableBusyCampOn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableBusyCampOn()
    {
        $this->enableBusyCampOn = null;
        return $this;
    }

    /**
     * Getter for busyCampOnSeconds
     *
     * @return int
     */
    public function getBusyCampOnSeconds()
    {
        return $this->busyCampOnSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyCampOnSeconds;
    }

    /**
     * Setter for busyCampOnSeconds
     *
     * @param int $busyCampOnSeconds
     * @return $this
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds)
    {
        $this->busyCampOnSeconds = $busyCampOnSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyCampOnSeconds()
    {
        $this->busyCampOnSeconds = null;
        return $this;
    }


}

