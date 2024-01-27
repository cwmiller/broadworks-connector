<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferModifyRequest
 *
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a0da3cd21ff9c39efcb7d6d9f013f8b:78","type":"sequence"}]
 */
class UserCallTransferModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isRecallActive
     * @Type bool
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @var bool|null
     */
    protected $isRecallActive = null;

    /**
     * @ElementName recallNumberOfRings
     * @Type int
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $recallNumberOfRings = null;

    /**
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @Type bool
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @var bool|null
     */
    protected $useDiversionInhibitorForBlindTransfer = null;

    /**
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @Type bool
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @var bool|null
     */
    protected $useDiversionInhibitorForConsultativeCalls = null;

    /**
     * @ElementName enableBusyCampOn
     * @Type bool
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @var bool|null
     */
    protected $enableBusyCampOn = null;

    /**
     * @ElementName busyCampOnSeconds
     * @Type int
     * @Optional
     * @Group 7a0da3cd21ff9c39efcb7d6d9f013f8b:78
     * @MinInclusive 30
     * @MaxInclusive 600
     * @var int|null
     */
    protected $busyCampOnSeconds = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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

