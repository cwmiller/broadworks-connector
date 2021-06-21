<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationRegistrationData
 *
 * ?
 *         The common push notification registration elements.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3552","type":"sequence"}]
 */
class PushNotificationRegistrationData
{

    /**
     * @ElementName registrationId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    private $registrationId = null;

    /**
     * @ElementName applicationId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName applicationVersion
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $applicationVersion = null;

    /**
     * @ElementName deviceOsType
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    private $deviceOsType = null;

    /**
     * @ElementName deviceVersion
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $deviceVersion = null;

    /**
     * @ElementName timestamp
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @var string|null
     */
    private $timestamp = null;

    /**
     * @ElementName pushNotificationClientVersion
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $pushNotificationClientVersion = null;

    /**
     * @ElementName pushNotificationTokenData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData
     * @Array
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3552
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData[]
     */
    private $pushNotificationTokenData = array(
        
    );

    /**
     * Getter for registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationId;
    }

    /**
     * Setter for registrationId
     *
     * @param string $registrationId
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationId()
    {
        $this->registrationId = null;
        return $this;
    }

    /**
     * Getter for applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Getter for applicationVersion
     *
     * @return string
     */
    public function getApplicationVersion()
    {
        return $this->applicationVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationVersion;
    }

    /**
     * Setter for applicationVersion
     *
     * @param string $applicationVersion
     * @return $this
     */
    public function setApplicationVersion($applicationVersion)
    {
        $this->applicationVersion = $applicationVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationVersion()
    {
        $this->applicationVersion = null;
        return $this;
    }

    /**
     * Getter for deviceOsType
     *
     * @return string
     */
    public function getDeviceOsType()
    {
        return $this->deviceOsType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceOsType;
    }

    /**
     * Setter for deviceOsType
     *
     * @param string $deviceOsType
     * @return $this
     */
    public function setDeviceOsType($deviceOsType)
    {
        $this->deviceOsType = $deviceOsType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceOsType()
    {
        $this->deviceOsType = null;
        return $this;
    }

    /**
     * Getter for deviceVersion
     *
     * @return string
     */
    public function getDeviceVersion()
    {
        return $this->deviceVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceVersion;
    }

    /**
     * Setter for deviceVersion
     *
     * @param string $deviceVersion
     * @return $this
     */
    public function setDeviceVersion($deviceVersion)
    {
        $this->deviceVersion = $deviceVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceVersion()
    {
        $this->deviceVersion = null;
        return $this;
    }

    /**
     * Getter for timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timestamp;
    }

    /**
     * Setter for timestamp
     *
     * @param string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimestamp()
    {
        $this->timestamp = null;
        return $this;
    }

    /**
     * Getter for pushNotificationClientVersion
     *
     * @return string
     */
    public function getPushNotificationClientVersion()
    {
        return $this->pushNotificationClientVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationClientVersion;
    }

    /**
     * Setter for pushNotificationClientVersion
     *
     * @param string $pushNotificationClientVersion
     * @return $this
     */
    public function setPushNotificationClientVersion($pushNotificationClientVersion)
    {
        $this->pushNotificationClientVersion = $pushNotificationClientVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationClientVersion()
    {
        $this->pushNotificationClientVersion = null;
        return $this;
    }

    /**
     * Getter for pushNotificationTokenData
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData[]
     */
    public function getPushNotificationTokenData()
    {
        return $this->pushNotificationTokenData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationTokenData;
    }

    /**
     * Setter for pushNotificationTokenData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData[] $pushNotificationTokenData
     * @return $this
     */
    public function setPushNotificationTokenData(array $pushNotificationTokenData)
    {
        $this->pushNotificationTokenData = $pushNotificationTokenData;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationTokenData()
    {
        $this->pushNotificationTokenData = null;
        return $this;
    }

    /**
     * Adder for pushNotificationTokenData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData $pushNotificationTokenData
     * @return $this
     */
    public function addPushNotificationTokenData($pushNotificationTokenData)
    {
        $this->pushNotificationTokenData[] = $pushNotificationTokenData;
        return $this;
    }


}

