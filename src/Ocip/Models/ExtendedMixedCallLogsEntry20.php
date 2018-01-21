<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedMixedCallLogsEntry20
 *
 * Extended Call Log entry describing a placed, received, or missed call.
 *         "countryCode" is the user's country code
 *         The following time elements are represented as timestamp, i.e., the
 * number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT.
 *         "startTime" represents the time when the system sends out a call
 * invitation message (e.g. for
 *         placed calls) or receives a call invitation message (e.g. for
 * missed/received calls).
 *         "answerTime" represents the time when the call is answered by the
 * terminating party.
 *         "detachedTime" represents the time when the call is successfully
 * redirected by the system.
 *         "releaseTime" represents the time when the call is released. This time
 * corresponds to the
 *         moment the call is released by the system, and not necessarily when one
 * party hangs up, since this
 *         does not always mean the call is released (e.g. Emergency/911 calls).
 *         The elements "userGroupId", "userId","userPrimaryDn" and
 * "userPrimaryExtension"
 *         are only returned when the enterprise or group level requests are used.
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode:
 *           callAuthorizationCode
 *           callSecurityClassification
 */
class ExtendedMixedCallLogsEntry20
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
     * @ElementName callId
     * @var string|null
     */
    private $callId = null;

    /**
     * @ElementName subscriberType
     * @var string|null
     */
    private $subscriberType = null;

    /**
     * @ElementName dialedNumber
     * @var string|null
     */
    private $dialedNumber = null;

    /**
     * @ElementName calledNumber
     * @var string|null
     */
    private $calledNumber = null;

    /**
     * @ElementName networkTranslatedAddress
     * @var string|null
     */
    private $networkTranslatedAddress = null;

    /**
     * @ElementName callingAssertedNumber
     * @var string|null
     */
    private $callingAssertedNumber = null;

    /**
     * @ElementName callingPresentationNumber
     * @var string|null
     */
    private $callingPresentationNumber = null;

    /**
     * @ElementName callingPresentationNumberSource
     * @var string|null
     */
    private $callingPresentationNumberSource = null;

    /**
     * @ElementName callingPresentationName
     * @var string|null
     */
    private $callingPresentationName = null;

    /**
     * @ElementName callingPresentationIndicator
     * @var string|null
     */
    private $callingPresentationIndicator = null;

    /**
     * @ElementName callingGroupId
     * @var string|null
     */
    private $callingGroupId = null;

    /**
     * @ElementName calledDirectoryName
     * @var string|null
     */
    private $calledDirectoryName = null;

    /**
     * @ElementName calledGroupId
     * @var string|null
     */
    private $calledGroupId = null;

    /**
     * @ElementName connectedNumber
     * @var string|null
     */
    private $connectedNumber = null;

    /**
     * @ElementName connectedNumberSource
     * @var string|null
     */
    private $connectedNumberSource = null;

    /**
     * @ElementName connectedName
     * @var string|null
     */
    private $connectedName = null;

    /**
     * @ElementName connectedPresentationIndicator
     * @var string|null
     */
    private $connectedPresentationIndicator = null;

    /**
     * @ElementName typeOfNetwork
     * @var string|null
     */
    private $typeOfNetwork = null;

    /**
     * @ElementName callCategory
     * @var string|null
     */
    private $callCategory = null;

    /**
     * @ElementName basicCallType
     * @var string|null
     */
    private $basicCallType = null;

    /**
     * @ElementName configurableCallType
     * @var string|null
     */
    private $configurableCallType = null;

    /**
     * @ElementName alternateCallIndicator
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName virtualOnNetCallType
     * @var string|null
     */
    private $virtualOnNetCallType = null;

    /**
     * @ElementName time
     * @var string|null
     */
    private $time = null;

    /**
     * @ElementName startTime
     * @var string|null
     */
    private $startTime = null;

    /**
     * @ElementName answerTime
     * @var string|null
     */
    private $answerTime = null;

    /**
     * @ElementName releaseTime
     * @var string|null
     */
    private $releaseTime = null;

    /**
     * @ElementName detachedTime
     * @var string|null
     */
    private $detachedTime = null;

    /**
     * @ElementName detachedAnswerTime
     * @var string|null
     */
    private $detachedAnswerTime = null;

    /**
     * @ElementName outgoingDnis
     * @var string|null
     */
    private $outgoingDnis = null;

    /**
     * @ElementName serviceInvocationDisposition
     * @var string|null
     */
    private $serviceInvocationDisposition = null;

    /**
     * @ElementName serviceInvocationDialedNumber
     * @var string|null
     */
    private $serviceInvocationDialedNumber = null;

    /**
     * @ElementName serviceInvocationCalledNumber
     * @var string|null
     */
    private $serviceInvocationCalledNumber = null;

    /**
     * @ElementName serviceInvocationNetworkTranslatedAddress
     * @var string|null
     */
    private $serviceInvocationNetworkTranslatedAddress = null;

    /**
     * @ElementName serviceInvocationTypeOfNetwork
     * @var string|null
     */
    private $serviceInvocationTypeOfNetwork = null;

    /**
     * @ElementName serviceInvocationCallCategory
     * @var string|null
     */
    private $serviceInvocationCallCategory = null;

    /**
     * @ElementName serviceInvocationBasicCallType
     * @var string|null
     */
    private $serviceInvocationBasicCallType = null;

    /**
     * @ElementName serviceInvocationConfigurableCallType
     * @var string|null
     */
    private $serviceInvocationConfigurableCallType = null;

    /**
     * @ElementName serviceInvocationAlternateCallIndicator
     * @var string|null
     */
    private $serviceInvocationAlternateCallIndicator = null;

    /**
     * @ElementName serviceInvocationVirtualOnNetCallType
     * @var string|null
     */
    private $serviceInvocationVirtualOnNetCallType = null;

    /**
     * @ElementName serviceInvocationCalledDirectoryName
     * @var string|null
     */
    private $serviceInvocationCalledDirectoryName = null;

    /**
     * @ElementName serviceInvocationCalledGroupId
     * @var string|null
     */
    private $serviceInvocationCalledGroupId = null;

    /**
     * @ElementName redirectingNumber
     * @var string|null
     */
    private $redirectingNumber = null;

    /**
     * @ElementName redirectingName
     * @var string|null
     */
    private $redirectingName = null;

    /**
     * @ElementName redirectingPresentationIndicator
     * @var string|null
     */
    private $redirectingPresentationIndicator = null;

    /**
     * @ElementName RedirectingReason
     * @var string|null
     */
    private $RedirectingReason = null;

    /**
     * @ElementName accountAuthorizationCode
     * @var string|null
     */
    private $accountAuthorizationCode = null;

    /**
     * @ElementName callAuthorizationCode
     * @var string|null
     */
    private $callAuthorizationCode = null;

    /**
     * @ElementName userGroupId
     * @var string|null
     */
    private $userGroupId = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userPrimaryDn
     * @var string|null
     */
    private $userPrimaryDn = null;

    /**
     * @ElementName userPrimaryExtension
     * @var string|null
     */
    private $userPrimaryExtension = null;

    /**
     * @ElementName securityClassification
     * @var string|null
     */
    private $securityClassification = null;

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
     * Getter for callId
     *
     * @ElementName callId
     * @return string|null
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Setter for callId
     *
     * @ElementName callId
     * @param string|null $callId
     * @return $this
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;
        return $this;
    }

    /**
     * Getter for subscriberType
     *
     * @ElementName subscriberType
     * @return string|null
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @ElementName subscriberType
     * @param string|null $subscriberType
     * @return $this
     */
    public function setSubscriberType($subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Getter for dialedNumber
     *
     * @ElementName dialedNumber
     * @return string|null
     */
    public function getDialedNumber()
    {
        return $this->dialedNumber;
    }

    /**
     * Setter for dialedNumber
     *
     * @ElementName dialedNumber
     * @param string|null $dialedNumber
     * @return $this
     */
    public function setDialedNumber($dialedNumber)
    {
        $this->dialedNumber = $dialedNumber;
        return $this;
    }

    /**
     * Getter for calledNumber
     *
     * @ElementName calledNumber
     * @return string|null
     */
    public function getCalledNumber()
    {
        return $this->calledNumber;
    }

    /**
     * Setter for calledNumber
     *
     * @ElementName calledNumber
     * @param string|null $calledNumber
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        $this->calledNumber = $calledNumber;
        return $this;
    }

    /**
     * Getter for networkTranslatedAddress
     *
     * @ElementName networkTranslatedAddress
     * @return string|null
     */
    public function getNetworkTranslatedAddress()
    {
        return $this->networkTranslatedAddress;
    }

    /**
     * Setter for networkTranslatedAddress
     *
     * @ElementName networkTranslatedAddress
     * @param string|null $networkTranslatedAddress
     * @return $this
     */
    public function setNetworkTranslatedAddress($networkTranslatedAddress)
    {
        $this->networkTranslatedAddress = $networkTranslatedAddress;
        return $this;
    }

    /**
     * Getter for callingAssertedNumber
     *
     * @ElementName callingAssertedNumber
     * @return string|null
     */
    public function getCallingAssertedNumber()
    {
        return $this->callingAssertedNumber;
    }

    /**
     * Setter for callingAssertedNumber
     *
     * @ElementName callingAssertedNumber
     * @param string|null $callingAssertedNumber
     * @return $this
     */
    public function setCallingAssertedNumber($callingAssertedNumber)
    {
        $this->callingAssertedNumber = $callingAssertedNumber;
        return $this;
    }

    /**
     * Getter for callingPresentationNumber
     *
     * @ElementName callingPresentationNumber
     * @return string|null
     */
    public function getCallingPresentationNumber()
    {
        return $this->callingPresentationNumber;
    }

    /**
     * Setter for callingPresentationNumber
     *
     * @ElementName callingPresentationNumber
     * @param string|null $callingPresentationNumber
     * @return $this
     */
    public function setCallingPresentationNumber($callingPresentationNumber)
    {
        $this->callingPresentationNumber = $callingPresentationNumber;
        return $this;
    }

    /**
     * Getter for callingPresentationNumberSource
     *
     * @ElementName callingPresentationNumberSource
     * @return string|null
     */
    public function getCallingPresentationNumberSource()
    {
        return $this->callingPresentationNumberSource;
    }

    /**
     * Setter for callingPresentationNumberSource
     *
     * @ElementName callingPresentationNumberSource
     * @param string|null $callingPresentationNumberSource
     * @return $this
     */
    public function setCallingPresentationNumberSource($callingPresentationNumberSource)
    {
        $this->callingPresentationNumberSource = $callingPresentationNumberSource;
        return $this;
    }

    /**
     * Getter for callingPresentationName
     *
     * @ElementName callingPresentationName
     * @return string|null
     */
    public function getCallingPresentationName()
    {
        return $this->callingPresentationName;
    }

    /**
     * Setter for callingPresentationName
     *
     * @ElementName callingPresentationName
     * @param string|null $callingPresentationName
     * @return $this
     */
    public function setCallingPresentationName($callingPresentationName)
    {
        $this->callingPresentationName = $callingPresentationName;
        return $this;
    }

    /**
     * Getter for callingPresentationIndicator
     *
     * @ElementName callingPresentationIndicator
     * @return string|null
     */
    public function getCallingPresentationIndicator()
    {
        return $this->callingPresentationIndicator;
    }

    /**
     * Setter for callingPresentationIndicator
     *
     * @ElementName callingPresentationIndicator
     * @param string|null $callingPresentationIndicator
     * @return $this
     */
    public function setCallingPresentationIndicator($callingPresentationIndicator)
    {
        $this->callingPresentationIndicator = $callingPresentationIndicator;
        return $this;
    }

    /**
     * Getter for callingGroupId
     *
     * @ElementName callingGroupId
     * @return string|null
     */
    public function getCallingGroupId()
    {
        return $this->callingGroupId;
    }

    /**
     * Setter for callingGroupId
     *
     * @ElementName callingGroupId
     * @param string|null $callingGroupId
     * @return $this
     */
    public function setCallingGroupId($callingGroupId)
    {
        $this->callingGroupId = $callingGroupId;
        return $this;
    }

    /**
     * Getter for calledDirectoryName
     *
     * @ElementName calledDirectoryName
     * @return string|null
     */
    public function getCalledDirectoryName()
    {
        return $this->calledDirectoryName;
    }

    /**
     * Setter for calledDirectoryName
     *
     * @ElementName calledDirectoryName
     * @param string|null $calledDirectoryName
     * @return $this
     */
    public function setCalledDirectoryName($calledDirectoryName)
    {
        $this->calledDirectoryName = $calledDirectoryName;
        return $this;
    }

    /**
     * Getter for calledGroupId
     *
     * @ElementName calledGroupId
     * @return string|null
     */
    public function getCalledGroupId()
    {
        return $this->calledGroupId;
    }

    /**
     * Setter for calledGroupId
     *
     * @ElementName calledGroupId
     * @param string|null $calledGroupId
     * @return $this
     */
    public function setCalledGroupId($calledGroupId)
    {
        $this->calledGroupId = $calledGroupId;
        return $this;
    }

    /**
     * Getter for connectedNumber
     *
     * @ElementName connectedNumber
     * @return string|null
     */
    public function getConnectedNumber()
    {
        return $this->connectedNumber;
    }

    /**
     * Setter for connectedNumber
     *
     * @ElementName connectedNumber
     * @param string|null $connectedNumber
     * @return $this
     */
    public function setConnectedNumber($connectedNumber)
    {
        $this->connectedNumber = $connectedNumber;
        return $this;
    }

    /**
     * Getter for connectedNumberSource
     *
     * @ElementName connectedNumberSource
     * @return string|null
     */
    public function getConnectedNumberSource()
    {
        return $this->connectedNumberSource;
    }

    /**
     * Setter for connectedNumberSource
     *
     * @ElementName connectedNumberSource
     * @param string|null $connectedNumberSource
     * @return $this
     */
    public function setConnectedNumberSource($connectedNumberSource)
    {
        $this->connectedNumberSource = $connectedNumberSource;
        return $this;
    }

    /**
     * Getter for connectedName
     *
     * @ElementName connectedName
     * @return string|null
     */
    public function getConnectedName()
    {
        return $this->connectedName;
    }

    /**
     * Setter for connectedName
     *
     * @ElementName connectedName
     * @param string|null $connectedName
     * @return $this
     */
    public function setConnectedName($connectedName)
    {
        $this->connectedName = $connectedName;
        return $this;
    }

    /**
     * Getter for connectedPresentationIndicator
     *
     * @ElementName connectedPresentationIndicator
     * @return string|null
     */
    public function getConnectedPresentationIndicator()
    {
        return $this->connectedPresentationIndicator;
    }

    /**
     * Setter for connectedPresentationIndicator
     *
     * @ElementName connectedPresentationIndicator
     * @param string|null $connectedPresentationIndicator
     * @return $this
     */
    public function setConnectedPresentationIndicator($connectedPresentationIndicator)
    {
        $this->connectedPresentationIndicator = $connectedPresentationIndicator;
        return $this;
    }

    /**
     * Getter for typeOfNetwork
     *
     * @ElementName typeOfNetwork
     * @return string|null
     */
    public function getTypeOfNetwork()
    {
        return $this->typeOfNetwork;
    }

    /**
     * Setter for typeOfNetwork
     *
     * @ElementName typeOfNetwork
     * @param string|null $typeOfNetwork
     * @return $this
     */
    public function setTypeOfNetwork($typeOfNetwork)
    {
        $this->typeOfNetwork = $typeOfNetwork;
        return $this;
    }

    /**
     * Getter for callCategory
     *
     * @ElementName callCategory
     * @return string|null
     */
    public function getCallCategory()
    {
        return $this->callCategory;
    }

    /**
     * Setter for callCategory
     *
     * @ElementName callCategory
     * @param string|null $callCategory
     * @return $this
     */
    public function setCallCategory($callCategory)
    {
        $this->callCategory = $callCategory;
        return $this;
    }

    /**
     * Getter for basicCallType
     *
     * @ElementName basicCallType
     * @return string|null
     */
    public function getBasicCallType()
    {
        return $this->basicCallType;
    }

    /**
     * Setter for basicCallType
     *
     * @ElementName basicCallType
     * @param string|null $basicCallType
     * @return $this
     */
    public function setBasicCallType($basicCallType)
    {
        $this->basicCallType = $basicCallType;
        return $this;
    }

    /**
     * Getter for configurableCallType
     *
     * @ElementName configurableCallType
     * @return string|null
     */
    public function getConfigurableCallType()
    {
        return $this->configurableCallType;
    }

    /**
     * Setter for configurableCallType
     *
     * @ElementName configurableCallType
     * @param string|null $configurableCallType
     * @return $this
     */
    public function setConfigurableCallType($configurableCallType)
    {
        $this->configurableCallType = $configurableCallType;
        return $this;
    }

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string|null
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string|null $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * Getter for virtualOnNetCallType
     *
     * @ElementName virtualOnNetCallType
     * @return string|null
     */
    public function getVirtualOnNetCallType()
    {
        return $this->virtualOnNetCallType;
    }

    /**
     * Setter for virtualOnNetCallType
     *
     * @ElementName virtualOnNetCallType
     * @param string|null $virtualOnNetCallType
     * @return $this
     */
    public function setVirtualOnNetCallType($virtualOnNetCallType)
    {
        $this->virtualOnNetCallType = $virtualOnNetCallType;
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

    /**
     * Getter for startTime
     *
     * @ElementName startTime
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @ElementName startTime
     * @param string|null $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Getter for answerTime
     *
     * @ElementName answerTime
     * @return string|null
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * Setter for answerTime
     *
     * @ElementName answerTime
     * @param string|null $answerTime
     * @return $this
     */
    public function setAnswerTime($answerTime)
    {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * Getter for releaseTime
     *
     * @ElementName releaseTime
     * @return string|null
     */
    public function getReleaseTime()
    {
        return $this->releaseTime;
    }

    /**
     * Setter for releaseTime
     *
     * @ElementName releaseTime
     * @param string|null $releaseTime
     * @return $this
     */
    public function setReleaseTime($releaseTime)
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * Getter for detachedTime
     *
     * @ElementName detachedTime
     * @return string|null
     */
    public function getDetachedTime()
    {
        return $this->detachedTime;
    }

    /**
     * Setter for detachedTime
     *
     * @ElementName detachedTime
     * @param string|null $detachedTime
     * @return $this
     */
    public function setDetachedTime($detachedTime)
    {
        $this->detachedTime = $detachedTime;
        return $this;
    }

    /**
     * Getter for detachedAnswerTime
     *
     * @ElementName detachedAnswerTime
     * @return string|null
     */
    public function getDetachedAnswerTime()
    {
        return $this->detachedAnswerTime;
    }

    /**
     * Setter for detachedAnswerTime
     *
     * @ElementName detachedAnswerTime
     * @param string|null $detachedAnswerTime
     * @return $this
     */
    public function setDetachedAnswerTime($detachedAnswerTime)
    {
        $this->detachedAnswerTime = $detachedAnswerTime;
        return $this;
    }

    /**
     * Getter for outgoingDnis
     *
     * @ElementName outgoingDnis
     * @return string|null
     */
    public function getOutgoingDnis()
    {
        return $this->outgoingDnis;
    }

    /**
     * Setter for outgoingDnis
     *
     * @ElementName outgoingDnis
     * @param string|null $outgoingDnis
     * @return $this
     */
    public function setOutgoingDnis($outgoingDnis)
    {
        $this->outgoingDnis = $outgoingDnis;
        return $this;
    }

    /**
     * Getter for serviceInvocationDisposition
     *
     * @ElementName serviceInvocationDisposition
     * @return string|null
     */
    public function getServiceInvocationDisposition()
    {
        return $this->serviceInvocationDisposition;
    }

    /**
     * Setter for serviceInvocationDisposition
     *
     * @ElementName serviceInvocationDisposition
     * @param string|null $serviceInvocationDisposition
     * @return $this
     */
    public function setServiceInvocationDisposition($serviceInvocationDisposition)
    {
        $this->serviceInvocationDisposition = $serviceInvocationDisposition;
        return $this;
    }

    /**
     * Getter for serviceInvocationDialedNumber
     *
     * @ElementName serviceInvocationDialedNumber
     * @return string|null
     */
    public function getServiceInvocationDialedNumber()
    {
        return $this->serviceInvocationDialedNumber;
    }

    /**
     * Setter for serviceInvocationDialedNumber
     *
     * @ElementName serviceInvocationDialedNumber
     * @param string|null $serviceInvocationDialedNumber
     * @return $this
     */
    public function setServiceInvocationDialedNumber($serviceInvocationDialedNumber)
    {
        $this->serviceInvocationDialedNumber = $serviceInvocationDialedNumber;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledNumber
     *
     * @ElementName serviceInvocationCalledNumber
     * @return string|null
     */
    public function getServiceInvocationCalledNumber()
    {
        return $this->serviceInvocationCalledNumber;
    }

    /**
     * Setter for serviceInvocationCalledNumber
     *
     * @ElementName serviceInvocationCalledNumber
     * @param string|null $serviceInvocationCalledNumber
     * @return $this
     */
    public function setServiceInvocationCalledNumber($serviceInvocationCalledNumber)
    {
        $this->serviceInvocationCalledNumber = $serviceInvocationCalledNumber;
        return $this;
    }

    /**
     * Getter for serviceInvocationNetworkTranslatedAddress
     *
     * @ElementName serviceInvocationNetworkTranslatedAddress
     * @return string|null
     */
    public function getServiceInvocationNetworkTranslatedAddress()
    {
        return $this->serviceInvocationNetworkTranslatedAddress;
    }

    /**
     * Setter for serviceInvocationNetworkTranslatedAddress
     *
     * @ElementName serviceInvocationNetworkTranslatedAddress
     * @param string|null $serviceInvocationNetworkTranslatedAddress
     * @return $this
     */
    public function setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress)
    {
        $this->serviceInvocationNetworkTranslatedAddress = $serviceInvocationNetworkTranslatedAddress;
        return $this;
    }

    /**
     * Getter for serviceInvocationTypeOfNetwork
     *
     * @ElementName serviceInvocationTypeOfNetwork
     * @return string|null
     */
    public function getServiceInvocationTypeOfNetwork()
    {
        return $this->serviceInvocationTypeOfNetwork;
    }

    /**
     * Setter for serviceInvocationTypeOfNetwork
     *
     * @ElementName serviceInvocationTypeOfNetwork
     * @param string|null $serviceInvocationTypeOfNetwork
     * @return $this
     */
    public function setServiceInvocationTypeOfNetwork($serviceInvocationTypeOfNetwork)
    {
        $this->serviceInvocationTypeOfNetwork = $serviceInvocationTypeOfNetwork;
        return $this;
    }

    /**
     * Getter for serviceInvocationCallCategory
     *
     * @ElementName serviceInvocationCallCategory
     * @return string|null
     */
    public function getServiceInvocationCallCategory()
    {
        return $this->serviceInvocationCallCategory;
    }

    /**
     * Setter for serviceInvocationCallCategory
     *
     * @ElementName serviceInvocationCallCategory
     * @param string|null $serviceInvocationCallCategory
     * @return $this
     */
    public function setServiceInvocationCallCategory($serviceInvocationCallCategory)
    {
        $this->serviceInvocationCallCategory = $serviceInvocationCallCategory;
        return $this;
    }

    /**
     * Getter for serviceInvocationBasicCallType
     *
     * @ElementName serviceInvocationBasicCallType
     * @return string|null
     */
    public function getServiceInvocationBasicCallType()
    {
        return $this->serviceInvocationBasicCallType;
    }

    /**
     * Setter for serviceInvocationBasicCallType
     *
     * @ElementName serviceInvocationBasicCallType
     * @param string|null $serviceInvocationBasicCallType
     * @return $this
     */
    public function setServiceInvocationBasicCallType($serviceInvocationBasicCallType)
    {
        $this->serviceInvocationBasicCallType = $serviceInvocationBasicCallType;
        return $this;
    }

    /**
     * Getter for serviceInvocationConfigurableCallType
     *
     * @ElementName serviceInvocationConfigurableCallType
     * @return string|null
     */
    public function getServiceInvocationConfigurableCallType()
    {
        return $this->serviceInvocationConfigurableCallType;
    }

    /**
     * Setter for serviceInvocationConfigurableCallType
     *
     * @ElementName serviceInvocationConfigurableCallType
     * @param string|null $serviceInvocationConfigurableCallType
     * @return $this
     */
    public function setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType)
    {
        $this->serviceInvocationConfigurableCallType = $serviceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * Getter for serviceInvocationAlternateCallIndicator
     *
     * @ElementName serviceInvocationAlternateCallIndicator
     * @return string|null
     */
    public function getServiceInvocationAlternateCallIndicator()
    {
        return $this->serviceInvocationAlternateCallIndicator;
    }

    /**
     * Setter for serviceInvocationAlternateCallIndicator
     *
     * @ElementName serviceInvocationAlternateCallIndicator
     * @param string|null $serviceInvocationAlternateCallIndicator
     * @return $this
     */
    public function setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator)
    {
        $this->serviceInvocationAlternateCallIndicator = $serviceInvocationAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for serviceInvocationVirtualOnNetCallType
     *
     * @ElementName serviceInvocationVirtualOnNetCallType
     * @return string|null
     */
    public function getServiceInvocationVirtualOnNetCallType()
    {
        return $this->serviceInvocationVirtualOnNetCallType;
    }

    /**
     * Setter for serviceInvocationVirtualOnNetCallType
     *
     * @ElementName serviceInvocationVirtualOnNetCallType
     * @param string|null $serviceInvocationVirtualOnNetCallType
     * @return $this
     */
    public function setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType)
    {
        $this->serviceInvocationVirtualOnNetCallType = $serviceInvocationVirtualOnNetCallType;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledDirectoryName
     *
     * @ElementName serviceInvocationCalledDirectoryName
     * @return string|null
     */
    public function getServiceInvocationCalledDirectoryName()
    {
        return $this->serviceInvocationCalledDirectoryName;
    }

    /**
     * Setter for serviceInvocationCalledDirectoryName
     *
     * @ElementName serviceInvocationCalledDirectoryName
     * @param string|null $serviceInvocationCalledDirectoryName
     * @return $this
     */
    public function setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName)
    {
        $this->serviceInvocationCalledDirectoryName = $serviceInvocationCalledDirectoryName;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledGroupId
     *
     * @ElementName serviceInvocationCalledGroupId
     * @return string|null
     */
    public function getServiceInvocationCalledGroupId()
    {
        return $this->serviceInvocationCalledGroupId;
    }

    /**
     * Setter for serviceInvocationCalledGroupId
     *
     * @ElementName serviceInvocationCalledGroupId
     * @param string|null $serviceInvocationCalledGroupId
     * @return $this
     */
    public function setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId)
    {
        $this->serviceInvocationCalledGroupId = $serviceInvocationCalledGroupId;
        return $this;
    }

    /**
     * Getter for redirectingNumber
     *
     * @ElementName redirectingNumber
     * @return string|null
     */
    public function getRedirectingNumber()
    {
        return $this->redirectingNumber;
    }

    /**
     * Setter for redirectingNumber
     *
     * @ElementName redirectingNumber
     * @param string|null $redirectingNumber
     * @return $this
     */
    public function setRedirectingNumber($redirectingNumber)
    {
        $this->redirectingNumber = $redirectingNumber;
        return $this;
    }

    /**
     * Getter for redirectingName
     *
     * @ElementName redirectingName
     * @return string|null
     */
    public function getRedirectingName()
    {
        return $this->redirectingName;
    }

    /**
     * Setter for redirectingName
     *
     * @ElementName redirectingName
     * @param string|null $redirectingName
     * @return $this
     */
    public function setRedirectingName($redirectingName)
    {
        $this->redirectingName = $redirectingName;
        return $this;
    }

    /**
     * Getter for redirectingPresentationIndicator
     *
     * @ElementName redirectingPresentationIndicator
     * @return string|null
     */
    public function getRedirectingPresentationIndicator()
    {
        return $this->redirectingPresentationIndicator;
    }

    /**
     * Setter for redirectingPresentationIndicator
     *
     * @ElementName redirectingPresentationIndicator
     * @param string|null $redirectingPresentationIndicator
     * @return $this
     */
    public function setRedirectingPresentationIndicator($redirectingPresentationIndicator)
    {
        $this->redirectingPresentationIndicator = $redirectingPresentationIndicator;
        return $this;
    }

    /**
     * Getter for RedirectingReason
     *
     * @ElementName RedirectingReason
     * @return string|null
     */
    public function getRedirectingReason()
    {
        return $this->RedirectingReason;
    }

    /**
     * Setter for RedirectingReason
     *
     * @ElementName RedirectingReason
     * @param string|null $RedirectingReason
     * @return $this
     */
    public function setRedirectingReason($RedirectingReason)
    {
        $this->RedirectingReason = $RedirectingReason;
        return $this;
    }

    /**
     * Getter for accountAuthorizationCode
     *
     * @ElementName accountAuthorizationCode
     * @return string|null
     */
    public function getAccountAuthorizationCode()
    {
        return $this->accountAuthorizationCode;
    }

    /**
     * Setter for accountAuthorizationCode
     *
     * @ElementName accountAuthorizationCode
     * @param string|null $accountAuthorizationCode
     * @return $this
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode)
    {
        $this->accountAuthorizationCode = $accountAuthorizationCode;
        return $this;
    }

    /**
     * Getter for callAuthorizationCode
     *
     * @ElementName callAuthorizationCode
     * @return string|null
     */
    public function getCallAuthorizationCode()
    {
        return $this->callAuthorizationCode;
    }

    /**
     * Setter for callAuthorizationCode
     *
     * @ElementName callAuthorizationCode
     * @param string|null $callAuthorizationCode
     * @return $this
     */
    public function setCallAuthorizationCode($callAuthorizationCode)
    {
        $this->callAuthorizationCode = $callAuthorizationCode;
        return $this;
    }

    /**
     * Getter for userGroupId
     *
     * @ElementName userGroupId
     * @return string|null
     */
    public function getUserGroupId()
    {
        return $this->userGroupId;
    }

    /**
     * Setter for userGroupId
     *
     * @ElementName userGroupId
     * @param string|null $userGroupId
     * @return $this
     */
    public function setUserGroupId($userGroupId)
    {
        $this->userGroupId = $userGroupId;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for userPrimaryDn
     *
     * @ElementName userPrimaryDn
     * @return string|null
     */
    public function getUserPrimaryDn()
    {
        return $this->userPrimaryDn;
    }

    /**
     * Setter for userPrimaryDn
     *
     * @ElementName userPrimaryDn
     * @param string|null $userPrimaryDn
     * @return $this
     */
    public function setUserPrimaryDn($userPrimaryDn)
    {
        $this->userPrimaryDn = $userPrimaryDn;
        return $this;
    }

    /**
     * Getter for userPrimaryExtension
     *
     * @ElementName userPrimaryExtension
     * @return string|null
     */
    public function getUserPrimaryExtension()
    {
        return $this->userPrimaryExtension;
    }

    /**
     * Setter for userPrimaryExtension
     *
     * @ElementName userPrimaryExtension
     * @param string|null $userPrimaryExtension
     * @return $this
     */
    public function setUserPrimaryExtension($userPrimaryExtension)
    {
        $this->userPrimaryExtension = $userPrimaryExtension;
        return $this;
    }

    /**
     * Getter for securityClassification
     *
     * @ElementName securityClassification
     * @return string|null
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @ElementName securityClassification
     * @param string|null $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }


}

