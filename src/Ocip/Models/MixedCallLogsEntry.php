<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MixedCallLogsEntry
 *
 * Call Log entry describing a placed, received, or missed call.
 */
class MixedCallLogsEntry
{

    /**
     * @ElementName callLogType
     * @var string|null
     */
    private $callLogType = null;

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName callLogId
     * @var string|null
     */
    private $callLogId = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName time
     * @var string|null
     */
    private $time = null;

    /**
     * Getter for callLogType
     *
     * @ElementName callLogType
     * @return string|null
     */
    public function getCallLogType()
    {
        return $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @ElementName callLogType
     * @param string|null $callLogType
     * @return $this
     */
    public function setCallLogType($callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Getter for callLogId
     *
     * @ElementName callLogId
     * @return string|null
     */
    public function getCallLogId()
    {
        return $this->callLogId;
    }

    /**
     * Setter for callLogId
     *
     * @ElementName callLogId
     * @param string|null $callLogId
     * @return $this
     */
    public function setCallLogId($callLogId)
    {
        $this->callLogId = $callLogId;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for time
     *
     * @ElementName time
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Setter for time
     *
     * @ElementName time
     * @param string|null $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }


}

