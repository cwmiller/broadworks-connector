<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:870","type":"sequence"}]
 */
class UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
{

    /**
     * @ElementName placedCallLogId
     * @Type string
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:870
     * @MinLength 1
     * @MaxLength 36
     * @var string[]
     */
    private $placedCallLogId = array(
        
    );

    /**
     * @ElementName receivedCallLogId
     * @Type string
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:870
     * @MinLength 1
     * @MaxLength 36
     * @var string[]
     */
    private $receivedCallLogId = array(
        
    );

    /**
     * @ElementName missedCallLogId
     * @Type string
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:870
     * @MinLength 1
     * @MaxLength 36
     * @var string[]
     */
    private $missedCallLogId = array(
        
    );

    /**
     * Getter for placedCallLogId
     *
     * @return string[]
     */
    public function getPlacedCallLogId()
    {
        return $this->placedCallLogId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->placedCallLogId;
    }

    /**
     * Setter for placedCallLogId
     *
     * @param string[] $placedCallLogId
     * @return $this
     */
    public function setPlacedCallLogId(array $placedCallLogId)
    {
        $this->placedCallLogId = $placedCallLogId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlacedCallLogId()
    {
        $this->placedCallLogId = null;
        return $this;
    }

    /**
     * Adder for placedCallLogId
     *
     * @param string $placedCallLogId
     * @return $this
     */
    public function addPlacedCallLogId(string $placedCallLogId)
    {
        $this->placedCallLogId[] = $placedCallLogId;
        return $this;
    }

    /**
     * Getter for receivedCallLogId
     *
     * @return string[]
     */
    public function getReceivedCallLogId()
    {
        return $this->receivedCallLogId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->receivedCallLogId;
    }

    /**
     * Setter for receivedCallLogId
     *
     * @param string[] $receivedCallLogId
     * @return $this
     */
    public function setReceivedCallLogId(array $receivedCallLogId)
    {
        $this->receivedCallLogId = $receivedCallLogId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceivedCallLogId()
    {
        $this->receivedCallLogId = null;
        return $this;
    }

    /**
     * Adder for receivedCallLogId
     *
     * @param string $receivedCallLogId
     * @return $this
     */
    public function addReceivedCallLogId(string $receivedCallLogId)
    {
        $this->receivedCallLogId[] = $receivedCallLogId;
        return $this;
    }

    /**
     * Getter for missedCallLogId
     *
     * @return string[]
     */
    public function getMissedCallLogId()
    {
        return $this->missedCallLogId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->missedCallLogId;
    }

    /**
     * Setter for missedCallLogId
     *
     * @param string[] $missedCallLogId
     * @return $this
     */
    public function setMissedCallLogId(array $missedCallLogId)
    {
        $this->missedCallLogId = $missedCallLogId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMissedCallLogId()
    {
        $this->missedCallLogId = null;
        return $this;
    }

    /**
     * Adder for missedCallLogId
     *
     * @param string $missedCallLogId
     * @return $this
     */
    public function addMissedCallLogId(string $missedCallLogId)
    {
        $this->missedCallLogId[] = $missedCallLogId;
        return $this;
    }


}

