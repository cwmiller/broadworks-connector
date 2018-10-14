<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
 */
class UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
{

    /**
     * @ElementName placedCallLogId
     * @var string[]
     */
    private $placedCallLogId = array(
        
    );

    /**
     * @ElementName receivedCallLogId
     * @var string[]
     */
    private $receivedCallLogId = array(
        
    );

    /**
     * @ElementName missedCallLogId
     * @var string[]
     */
    private $missedCallLogId = array(
        
    );

    /**
     * Getter for placedCallLogId
     *
     * @ElementName placedCallLogId
     * @return string[]
     */
    public function getPlacedCallLogId()
    {
        return $this->placedCallLogId;
    }

    /**
     * Setter for placedCallLogId
     *
     * @ElementName placedCallLogId
     * @param string[] $placedCallLogId
     * @return $this
     */
    public function setPlacedCallLogId(array $placedCallLogId)
    {
        $this->placedCallLogId = $placedCallLogId;
        return $this;
    }

    /**
     * Adder for placedCallLogId
     *
     * @ElementName placedCallLogId
     * @param string $placedCallLogId
     * @return $this
     */
    public function addPlacedCallLogId(string $placedCallLogId)
    {
        $this->placedCallLogId []= $placedCallLogId;
        return $this;
    }

    /**
     * Getter for receivedCallLogId
     *
     * @ElementName receivedCallLogId
     * @return string[]
     */
    public function getReceivedCallLogId()
    {
        return $this->receivedCallLogId;
    }

    /**
     * Setter for receivedCallLogId
     *
     * @ElementName receivedCallLogId
     * @param string[] $receivedCallLogId
     * @return $this
     */
    public function setReceivedCallLogId(array $receivedCallLogId)
    {
        $this->receivedCallLogId = $receivedCallLogId;
        return $this;
    }

    /**
     * Adder for receivedCallLogId
     *
     * @ElementName receivedCallLogId
     * @param string $receivedCallLogId
     * @return $this
     */
    public function addReceivedCallLogId(string $receivedCallLogId)
    {
        $this->receivedCallLogId []= $receivedCallLogId;
        return $this;
    }

    /**
     * Getter for missedCallLogId
     *
     * @ElementName missedCallLogId
     * @return string[]
     */
    public function getMissedCallLogId()
    {
        return $this->missedCallLogId;
    }

    /**
     * Setter for missedCallLogId
     *
     * @ElementName missedCallLogId
     * @param string[] $missedCallLogId
     * @return $this
     */
    public function setMissedCallLogId(array $missedCallLogId)
    {
        $this->missedCallLogId = $missedCallLogId;
        return $this;
    }

    /**
     * Adder for missedCallLogId
     *
     * @ElementName missedCallLogId
     * @param string $missedCallLogId
     * @return $this
     */
    public function addMissedCallLogId(string $missedCallLogId)
    {
        $this->missedCallLogId []= $missedCallLogId;
        return $this;
    }


}

