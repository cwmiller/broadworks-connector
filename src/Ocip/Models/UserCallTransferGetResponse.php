<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallTransferGetResponse
 *
 * Response to UserCallTransferGetRequest.
 */
class UserCallTransferGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRecallActive
     * @var bool|null
     */
    private $isRecallActive = null;

    /**
     * @ElementName recallNumberOfRings
     * @var int|null
     */
    private $recallNumberOfRings = null;

    /**
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @var bool|null
     */
    private $useDiversionInhibitorForBlindTransfer = null;

    /**
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @var bool|null
     */
    private $useDiversionInhibitorForConsultativeCalls = null;

    /**
     * Getter for isRecallActive
     *
     * @ElementName isRecallActive
     * @return bool|null
     */
    public function getIsRecallActive()
    {
        return $this->isRecallActive;
    }

    /**
     * Setter for isRecallActive
     *
     * @ElementName isRecallActive
     * @param bool|null $isRecallActive
     * @return $this
     */
    public function setIsRecallActive($isRecallActive)
    {
        $this->isRecallActive = $isRecallActive;
        return $this;
    }

    /**
     * Getter for recallNumberOfRings
     *
     * @ElementName recallNumberOfRings
     * @return int|null
     */
    public function getRecallNumberOfRings()
    {
        return $this->recallNumberOfRings;
    }

    /**
     * Setter for recallNumberOfRings
     *
     * @ElementName recallNumberOfRings
     * @param int|null $recallNumberOfRings
     * @return $this
     */
    public function setRecallNumberOfRings($recallNumberOfRings)
    {
        $this->recallNumberOfRings = $recallNumberOfRings;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitorForBlindTransfer
     *
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @return bool|null
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return $this->useDiversionInhibitorForBlindTransfer;
    }

    /**
     * Setter for useDiversionInhibitorForBlindTransfer
     *
     * @ElementName useDiversionInhibitorForBlindTransfer
     * @param bool|null $useDiversionInhibitorForBlindTransfer
     * @return $this
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer)
    {
        $this->useDiversionInhibitorForBlindTransfer = $useDiversionInhibitorForBlindTransfer;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitorForConsultativeCalls
     *
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @return bool|null
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return $this->useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * Setter for useDiversionInhibitorForConsultativeCalls
     *
     * @ElementName useDiversionInhibitorForConsultativeCalls
     * @param bool|null $useDiversionInhibitorForConsultativeCalls
     * @return $this
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls)
    {
        $this->useDiversionInhibitorForConsultativeCalls = $useDiversionInhibitorForConsultativeCalls;
        return $this;
    }


}

