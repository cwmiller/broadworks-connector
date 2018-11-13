<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallTransferInfo
 *
 * This is the configuration parameters for Call Transfer service
 */
class ProfileAndServiceCallTransferInfo
{

    /**
     * @ElementName isRecallActive
     * @Type bool
     * @var bool|null
     */
    private $isRecallActive = null;

    /**
     * @ElementName recallNumberOfRings
     * @Type int
     * @var int|null
     */
    private $recallNumberOfRings = null;

    /**
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @Type bool
     * @var bool|null
     */
    private $useDiversionInhibitorForBlindTransfer = null;

    /**
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @Type bool
     * @var bool|null
     */
    private $useDiversionInhibitorForConsultativeCalls = null;

    /**
     * @ElementName enableBusyCampOn
     * @Type bool
     * @var bool|null
     */
    private $enableBusyCampOn = null;

    /**
     * @ElementName busyCampOnSeconds
     * @Type int
     * @var int|null
     */
    private $busyCampOnSeconds = null;

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

