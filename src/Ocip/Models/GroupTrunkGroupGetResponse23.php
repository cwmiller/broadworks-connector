<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetResponse23
 *
 * Response to the GroupTrunkGroupGetRequest23.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 *
 * @see GroupTrunkGroupGetRequest23
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1320","type":"sequence"}]
 */
class GroupTrunkGroupGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @Type int
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var int|null
     */
    private $maxActiveCalls = null;

    /**
     * @ElementName maxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxAvailableActiveCalls = null;

    /**
     * @ElementName burstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $burstingMaxActiveCalls = null;

    /**
     * @ElementName burstingMaxAvailableActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $burstingMaxAvailableActiveCalls = null;

    /**
     * @ElementName maxAvailableNumberOfBurstingBTLUs
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxAvailableNumberOfBurstingBTLUs  = null;

    /**
     * @ElementName numberOfBurstingBTLUs
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1320
     * @var int|null
     */
    private $numberOfBurstingBTLUs = null;

    /**
     * Getter for maxActiveCalls
     *
     * @return int
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param int $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls($maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxAvailableActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getMaxAvailableActiveCalls()
    {
        return $this->maxAvailableActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAvailableActiveCalls;
    }

    /**
     * Setter for maxAvailableActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableActiveCalls
     * @return $this
     */
    public function setMaxAvailableActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableActiveCalls)
    {
        $this->maxAvailableActiveCalls = $maxAvailableActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAvailableActiveCalls()
    {
        $this->maxAvailableActiveCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxActiveCalls;
    }

    /**
     * Setter for burstingMaxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxActiveCalls
     * @return $this
     */
    public function setBurstingMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxActiveCalls)
    {
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxActiveCalls()
    {
        $this->burstingMaxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for burstingMaxAvailableActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getBurstingMaxAvailableActiveCalls()
    {
        return $this->burstingMaxAvailableActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->burstingMaxAvailableActiveCalls;
    }

    /**
     * Setter for burstingMaxAvailableActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls
     * @return $this
     */
    public function setBurstingMaxAvailableActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls)
    {
        $this->burstingMaxAvailableActiveCalls = $burstingMaxAvailableActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBurstingMaxAvailableActiveCalls()
    {
        $this->burstingMaxAvailableActiveCalls = null;
        return $this;
    }

    /**
     * Getter for maxAvailableNumberOfBurstingBTLUs 
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getMaxAvailableNumberOfBurstingBTLUs ()
    {
        return $this->maxAvailableNumberOfBurstingBTLUs  instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAvailableNumberOfBurstingBTLUs ;
    }

    /**
     * Setter for maxAvailableNumberOfBurstingBTLUs 
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableNumberOfBurstingBTLUs 
     * @return $this
     */
    public function setMaxAvailableNumberOfBurstingBTLUs (\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxAvailableNumberOfBurstingBTLUs )
    {
        $this->maxAvailableNumberOfBurstingBTLUs  = $maxAvailableNumberOfBurstingBTLUs ;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAvailableNumberOfBurstingBTLUs ()
    {
        $this->maxAvailableNumberOfBurstingBTLUs  = null;
        return $this;
    }

    /**
     * Getter for numberOfBurstingBTLUs
     *
     * @return int
     */
    public function getNumberOfBurstingBTLUs()
    {
        return $this->numberOfBurstingBTLUs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfBurstingBTLUs;
    }

    /**
     * Setter for numberOfBurstingBTLUs
     *
     * @param int $numberOfBurstingBTLUs
     * @return $this
     */
    public function setNumberOfBurstingBTLUs($numberOfBurstingBTLUs)
    {
        $this->numberOfBurstingBTLUs = $numberOfBurstingBTLUs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfBurstingBTLUs()
    {
        $this->numberOfBurstingBTLUs = null;
        return $this;
    }


}

