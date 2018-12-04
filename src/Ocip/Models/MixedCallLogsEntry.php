<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MixedCallLogsEntry
 *
 * Call Log entry describing a placed, received, or missed call.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2207","type":"sequence"}]
 */
class MixedCallLogsEntry
{

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallLogsType
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null
     */
    private $callLogType = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName callLogId
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var string|null
     */
    private $callLogId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName time
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2207
     * @var string|null
     */
    private $time = null;

    /**
     * Getter for callLogType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsType
     */
    public function getCallLogType()
    {
        return $this->callLogType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsType $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\CallLogsType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogType()
    {
        $this->callLogType = null;
        return $this;
    }

    /**
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }

    /**
     * Getter for callLogId
     *
     * @return string
     */
    public function getCallLogId()
    {
        return $this->callLogId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogId;
    }

    /**
     * Setter for callLogId
     *
     * @param string $callLogId
     * @return $this
     */
    public function setCallLogId($callLogId)
    {
        $this->callLogId = $callLogId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogId()
    {
        $this->callLogId = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->time;
    }

    /**
     * Setter for time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTime()
    {
        $this->time = null;
        return $this;
    }


}

