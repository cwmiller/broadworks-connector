<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationRegistrationData22
 *
 * The common push notification registration elements which supports encryption, if required.
 *         Elements encryptionKeyIdentifier, encryptionAlgorithm and channel are provided only when registration supports encryption. 
 *         Their absence indicates that encryption is not supported.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50247","type":"sequence"}]
 */
class PushNotificationRegistrationData22
{
    /**
     * @ElementName registrationId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $registrationId = null;

    /**
     * @ElementName applicationId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $applicationId = null;

    /**
     * @ElementName applicationVersion
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $applicationVersion = null;

    /**
     * @ElementName deviceOsType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $deviceOsType = null;

    /**
     * @ElementName deviceVersion
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $deviceVersion = null;

    /**
     * @ElementName timestamp
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @var string|null
     */
    protected $timestamp = null;

    /**
     * @ElementName pushNotificationClientVersion
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $pushNotificationClientVersion = null;

    /**
     * @ElementName pushNotificationTokenData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationTokenData[]
     */
    protected $pushNotificationTokenData = [
        
    ];

    /**
     * @ElementName encryptionKeyIdentifier
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $encryptionKeyIdentifier = null;

    /**
     * @ElementName encryptionAlgorithm
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $encryptionAlgorithm = null;

    /**
     * @ElementName channel
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50247
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $channel = null;

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

    /**
     * Getter for encryptionKeyIdentifier
     *
     * @return string
     */
    public function getEncryptionKeyIdentifier()
    {
        return $this->encryptionKeyIdentifier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encryptionKeyIdentifier;
    }

    /**
     * Setter for encryptionKeyIdentifier
     *
     * @param string $encryptionKeyIdentifier
     * @return $this
     */
    public function setEncryptionKeyIdentifier($encryptionKeyIdentifier)
    {
        $this->encryptionKeyIdentifier = $encryptionKeyIdentifier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncryptionKeyIdentifier()
    {
        $this->encryptionKeyIdentifier = null;
        return $this;
    }

    /**
     * Getter for encryptionAlgorithm
     *
     * @return string
     */
    public function getEncryptionAlgorithm()
    {
        return $this->encryptionAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encryptionAlgorithm;
    }

    /**
     * Setter for encryptionAlgorithm
     *
     * @param string $encryptionAlgorithm
     * @return $this
     */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncryptionAlgorithm()
    {
        $this->encryptionAlgorithm = null;
        return $this;
    }

    /**
     * Getter for channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->channel;
    }

    /**
     * Setter for channel
     *
     * @param string $channel
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChannel()
    {
        $this->channel = null;
        return $this;
    }
}

