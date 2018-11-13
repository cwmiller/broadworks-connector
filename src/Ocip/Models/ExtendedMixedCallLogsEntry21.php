<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedMixedCallLogsEntry21
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
 *           securityClassification
 */
class ExtendedMixedCallLogsEntry21
{

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallLogsType
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null
     */
    private $callLogType = null;

    /**
     * @ElementName countryCode
     * @Type string
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName callLogId
     * @Type string
     * @var string|null
     */
    private $callLogId = null;

    /**
     * @ElementName callId
     * @Type string
     * @var string|null
     */
    private $callId = null;

    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20|null
     */
    private $subscriberType = null;

    /**
     * @ElementName dialedNumber
     * @Type string
     * @var string|null
     */
    private $dialedNumber = null;

    /**
     * @ElementName calledNumber
     * @Type string
     * @var string|null
     */
    private $calledNumber = null;

    /**
     * @ElementName networkTranslatedAddress
     * @Type string
     * @var string|null
     */
    private $networkTranslatedAddress = null;

    /**
     * @ElementName callingAssertedNumber
     * @Type string
     * @var string|null
     */
    private $callingAssertedNumber = null;

    /**
     * @ElementName callingPresentationNumber
     * @Type string
     * @var string|null
     */
    private $callingPresentationNumber = null;

    /**
     * @ElementName callingPresentationNumberSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingPresentationNumberSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingPresentationNumberSource|null
     */
    private $callingPresentationNumberSource = null;

    /**
     * @ElementName callingPresentationName
     * @Type string
     * @var string|null
     */
    private $callingPresentationName = null;

    /**
     * @ElementName callingPresentationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator
     * @var \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator|null
     */
    private $callingPresentationIndicator = null;

    /**
     * @ElementName callingGroupId
     * @Type string
     * @var string|null
     */
    private $callingGroupId = null;

    /**
     * @ElementName calledDirectoryName
     * @Type string
     * @var string|null
     */
    private $calledDirectoryName = null;

    /**
     * @ElementName calledGroupId
     * @Type string
     * @var string|null
     */
    private $calledGroupId = null;

    /**
     * @ElementName connectedNumber
     * @Type string
     * @var string|null
     */
    private $connectedNumber = null;

    /**
     * @ElementName connectedNumberSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConnectedNumberSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConnectedNumberSource|null
     */
    private $connectedNumberSource = null;

    /**
     * @ElementName connectedName
     * @Type string
     * @var string|null
     */
    private $connectedName = null;

    /**
     * @ElementName connectedPresentationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator
     * @var \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator|null
     */
    private $connectedPresentationIndicator = null;

    /**
     * @ElementName typeOfNetwork
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkType
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkType|null
     */
    private $typeOfNetwork = null;

    /**
     * @ElementName callCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCategory|null
     */
    private $callCategory = null;

    /**
     * @ElementName basicCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallType|null
     */
    private $basicCallType = null;

    /**
     * @ElementName configurableCallType
     * @Type string
     * @var string|null
     */
    private $configurableCallType = null;

    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName virtualOnNetCallType
     * @Type string
     * @var string|null
     */
    private $virtualOnNetCallType = null;

    /**
     * @ElementName time
     * @Type string
     * @var string|null
     */
    private $time = null;

    /**
     * @ElementName startTime
     * @Type string
     * @var string|null
     */
    private $startTime = null;

    /**
     * @ElementName answerTime
     * @Type string
     * @var string|null
     */
    private $answerTime = null;

    /**
     * @ElementName releaseTime
     * @Type string
     * @var string|null
     */
    private $releaseTime = null;

    /**
     * @ElementName detachedTime
     * @Type string
     * @var string|null
     */
    private $detachedTime = null;

    /**
     * @ElementName detachedAnswerTime
     * @Type string
     * @var string|null
     */
    private $detachedAnswerTime = null;

    /**
     * @ElementName outgoingDnis
     * @Type string
     * @var string|null
     */
    private $outgoingDnis = null;

    /**
     * @ElementName serviceInvocationDisposition
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21|null
     */
    private $serviceInvocationDisposition = null;

    /**
     * @ElementName serviceInvocationDialedNumber
     * @Type string
     * @var string|null
     */
    private $serviceInvocationDialedNumber = null;

    /**
     * @ElementName serviceInvocationCalledNumber
     * @Type string
     * @var string|null
     */
    private $serviceInvocationCalledNumber = null;

    /**
     * @ElementName serviceInvocationNetworkTranslatedAddress
     * @Type string
     * @var string|null
     */
    private $serviceInvocationNetworkTranslatedAddress = null;

    /**
     * @ElementName serviceInvocationTypeOfNetwork
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkType
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkType|null
     */
    private $serviceInvocationTypeOfNetwork = null;

    /**
     * @ElementName serviceInvocationCallCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCategory|null
     */
    private $serviceInvocationCallCategory = null;

    /**
     * @ElementName serviceInvocationBasicCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallType|null
     */
    private $serviceInvocationBasicCallType = null;

    /**
     * @ElementName serviceInvocationConfigurableCallType
     * @Type string
     * @var string|null
     */
    private $serviceInvocationConfigurableCallType = null;

    /**
     * @ElementName serviceInvocationAlternateCallIndicator
     * @Type string
     * @var string|null
     */
    private $serviceInvocationAlternateCallIndicator = null;

    /**
     * @ElementName serviceInvocationVirtualOnNetCallType
     * @Type string
     * @var string|null
     */
    private $serviceInvocationVirtualOnNetCallType = null;

    /**
     * @ElementName serviceInvocationCalledDirectoryName
     * @Type string
     * @var string|null
     */
    private $serviceInvocationCalledDirectoryName = null;

    /**
     * @ElementName serviceInvocationCalledGroupId
     * @Type string
     * @var string|null
     */
    private $serviceInvocationCalledGroupId = null;

    /**
     * @ElementName redirectingNumber
     * @Type string
     * @var string|null
     */
    private $redirectingNumber = null;

    /**
     * @ElementName redirectingName
     * @Type string
     * @var string|null
     */
    private $redirectingName = null;

    /**
     * @ElementName redirectingPresentationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RedirectingPresentationIndicator
     * @var \CWM\BroadWorksConnector\Ocip\Models\RedirectingPresentationIndicator|null
     */
    private $redirectingPresentationIndicator = null;

    /**
     * @ElementName RedirectingReason
     * @Type string
     * @var string|null
     */
    private $RedirectingReason = null;

    /**
     * @ElementName accountAuthorizationCode
     * @Type string
     * @var string|null
     */
    private $accountAuthorizationCode = null;

    /**
     * @ElementName callAuthorizationCode
     * @Type string
     * @var string|null
     */
    private $callAuthorizationCode = null;

    /**
     * @ElementName userGroupId
     * @Type string
     * @var string|null
     */
    private $userGroupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userPrimaryDn
     * @Type string
     * @var string|null
     */
    private $userPrimaryDn = null;

    /**
     * @ElementName userPrimaryExtension
     * @Type string
     * @var string|null
     */
    private $userPrimaryExtension = null;

    /**
     * @ElementName securityClassification
     * @Type string
     * @var string|null
     */
    private $securityClassification = null;

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
     * Getter for callId
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->callId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callId;
    }

    /**
     * Setter for callId
     *
     * @param string $callId
     * @return $this
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallId()
    {
        $this->callId = null;
        return $this;
    }

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20 $subscriberType
     * @return $this
     */
    public function setSubscriberType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsSubscriberType20 $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberType()
    {
        $this->subscriberType = null;
        return $this;
    }

    /**
     * Getter for dialedNumber
     *
     * @return string
     */
    public function getDialedNumber()
    {
        return $this->dialedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dialedNumber;
    }

    /**
     * Setter for dialedNumber
     *
     * @param string $dialedNumber
     * @return $this
     */
    public function setDialedNumber($dialedNumber)
    {
        $this->dialedNumber = $dialedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDialedNumber()
    {
        $this->dialedNumber = null;
        return $this;
    }

    /**
     * Getter for calledNumber
     *
     * @return string
     */
    public function getCalledNumber()
    {
        return $this->calledNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->calledNumber;
    }

    /**
     * Setter for calledNumber
     *
     * @param string $calledNumber
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        $this->calledNumber = $calledNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCalledNumber()
    {
        $this->calledNumber = null;
        return $this;
    }

    /**
     * Getter for networkTranslatedAddress
     *
     * @return string
     */
    public function getNetworkTranslatedAddress()
    {
        return $this->networkTranslatedAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslatedAddress;
    }

    /**
     * Setter for networkTranslatedAddress
     *
     * @param string $networkTranslatedAddress
     * @return $this
     */
    public function setNetworkTranslatedAddress($networkTranslatedAddress)
    {
        $this->networkTranslatedAddress = $networkTranslatedAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTranslatedAddress()
    {
        $this->networkTranslatedAddress = null;
        return $this;
    }

    /**
     * Getter for callingAssertedNumber
     *
     * @return string
     */
    public function getCallingAssertedNumber()
    {
        return $this->callingAssertedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingAssertedNumber;
    }

    /**
     * Setter for callingAssertedNumber
     *
     * @param string $callingAssertedNumber
     * @return $this
     */
    public function setCallingAssertedNumber($callingAssertedNumber)
    {
        $this->callingAssertedNumber = $callingAssertedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingAssertedNumber()
    {
        $this->callingAssertedNumber = null;
        return $this;
    }

    /**
     * Getter for callingPresentationNumber
     *
     * @return string
     */
    public function getCallingPresentationNumber()
    {
        return $this->callingPresentationNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPresentationNumber;
    }

    /**
     * Setter for callingPresentationNumber
     *
     * @param string $callingPresentationNumber
     * @return $this
     */
    public function setCallingPresentationNumber($callingPresentationNumber)
    {
        $this->callingPresentationNumber = $callingPresentationNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPresentationNumber()
    {
        $this->callingPresentationNumber = null;
        return $this;
    }

    /**
     * Getter for callingPresentationNumberSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingPresentationNumberSource
     */
    public function getCallingPresentationNumberSource()
    {
        return $this->callingPresentationNumberSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPresentationNumberSource;
    }

    /**
     * Setter for callingPresentationNumberSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingPresentationNumberSource $callingPresentationNumberSource
     * @return $this
     */
    public function setCallingPresentationNumberSource(\CWM\BroadWorksConnector\Ocip\Models\CallingPresentationNumberSource $callingPresentationNumberSource)
    {
        $this->callingPresentationNumberSource = $callingPresentationNumberSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPresentationNumberSource()
    {
        $this->callingPresentationNumberSource = null;
        return $this;
    }

    /**
     * Getter for callingPresentationName
     *
     * @return string
     */
    public function getCallingPresentationName()
    {
        return $this->callingPresentationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPresentationName;
    }

    /**
     * Setter for callingPresentationName
     *
     * @param string $callingPresentationName
     * @return $this
     */
    public function setCallingPresentationName($callingPresentationName)
    {
        $this->callingPresentationName = $callingPresentationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPresentationName()
    {
        $this->callingPresentationName = null;
        return $this;
    }

    /**
     * Getter for callingPresentationIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator
     */
    public function getCallingPresentationIndicator()
    {
        return $this->callingPresentationIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPresentationIndicator;
    }

    /**
     * Setter for callingPresentationIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator $callingPresentationIndicator
     * @return $this
     */
    public function setCallingPresentationIndicator(\CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator $callingPresentationIndicator)
    {
        $this->callingPresentationIndicator = $callingPresentationIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPresentationIndicator()
    {
        $this->callingPresentationIndicator = null;
        return $this;
    }

    /**
     * Getter for callingGroupId
     *
     * @return string
     */
    public function getCallingGroupId()
    {
        return $this->callingGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingGroupId;
    }

    /**
     * Setter for callingGroupId
     *
     * @param string $callingGroupId
     * @return $this
     */
    public function setCallingGroupId($callingGroupId)
    {
        $this->callingGroupId = $callingGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingGroupId()
    {
        $this->callingGroupId = null;
        return $this;
    }

    /**
     * Getter for calledDirectoryName
     *
     * @return string
     */
    public function getCalledDirectoryName()
    {
        return $this->calledDirectoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->calledDirectoryName;
    }

    /**
     * Setter for calledDirectoryName
     *
     * @param string $calledDirectoryName
     * @return $this
     */
    public function setCalledDirectoryName($calledDirectoryName)
    {
        $this->calledDirectoryName = $calledDirectoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCalledDirectoryName()
    {
        $this->calledDirectoryName = null;
        return $this;
    }

    /**
     * Getter for calledGroupId
     *
     * @return string
     */
    public function getCalledGroupId()
    {
        return $this->calledGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->calledGroupId;
    }

    /**
     * Setter for calledGroupId
     *
     * @param string $calledGroupId
     * @return $this
     */
    public function setCalledGroupId($calledGroupId)
    {
        $this->calledGroupId = $calledGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCalledGroupId()
    {
        $this->calledGroupId = null;
        return $this;
    }

    /**
     * Getter for connectedNumber
     *
     * @return string
     */
    public function getConnectedNumber()
    {
        return $this->connectedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectedNumber;
    }

    /**
     * Setter for connectedNumber
     *
     * @param string $connectedNumber
     * @return $this
     */
    public function setConnectedNumber($connectedNumber)
    {
        $this->connectedNumber = $connectedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectedNumber()
    {
        $this->connectedNumber = null;
        return $this;
    }

    /**
     * Getter for connectedNumberSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConnectedNumberSource
     */
    public function getConnectedNumberSource()
    {
        return $this->connectedNumberSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectedNumberSource;
    }

    /**
     * Setter for connectedNumberSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConnectedNumberSource $connectedNumberSource
     * @return $this
     */
    public function setConnectedNumberSource(\CWM\BroadWorksConnector\Ocip\Models\ConnectedNumberSource $connectedNumberSource)
    {
        $this->connectedNumberSource = $connectedNumberSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectedNumberSource()
    {
        $this->connectedNumberSource = null;
        return $this;
    }

    /**
     * Getter for connectedName
     *
     * @return string
     */
    public function getConnectedName()
    {
        return $this->connectedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectedName;
    }

    /**
     * Setter for connectedName
     *
     * @param string $connectedName
     * @return $this
     */
    public function setConnectedName($connectedName)
    {
        $this->connectedName = $connectedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectedName()
    {
        $this->connectedName = null;
        return $this;
    }

    /**
     * Getter for connectedPresentationIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator
     */
    public function getConnectedPresentationIndicator()
    {
        return $this->connectedPresentationIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectedPresentationIndicator;
    }

    /**
     * Setter for connectedPresentationIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator $connectedPresentationIndicator
     * @return $this
     */
    public function setConnectedPresentationIndicator(\CWM\BroadWorksConnector\Ocip\Models\PresentationIndicator $connectedPresentationIndicator)
    {
        $this->connectedPresentationIndicator = $connectedPresentationIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectedPresentationIndicator()
    {
        $this->connectedPresentationIndicator = null;
        return $this;
    }

    /**
     * Getter for typeOfNetwork
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkType
     */
    public function getTypeOfNetwork()
    {
        return $this->typeOfNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->typeOfNetwork;
    }

    /**
     * Setter for typeOfNetwork
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkType $typeOfNetwork
     * @return $this
     */
    public function setTypeOfNetwork(\CWM\BroadWorksConnector\Ocip\Models\NetworkType $typeOfNetwork)
    {
        $this->typeOfNetwork = $typeOfNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTypeOfNetwork()
    {
        $this->typeOfNetwork = null;
        return $this;
    }

    /**
     * Getter for callCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     */
    public function getCallCategory()
    {
        return $this->callCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCategory;
    }

    /**
     * Setter for callCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory $callCategory
     * @return $this
     */
    public function setCallCategory(\CWM\BroadWorksConnector\Ocip\Models\CallCategory $callCategory)
    {
        $this->callCategory = $callCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCategory()
    {
        $this->callCategory = null;
        return $this;
    }

    /**
     * Getter for basicCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     */
    public function getBasicCallType()
    {
        return $this->basicCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->basicCallType;
    }

    /**
     * Setter for basicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType $basicCallType
     * @return $this
     */
    public function setBasicCallType(\CWM\BroadWorksConnector\Ocip\Models\BasicCallType $basicCallType)
    {
        $this->basicCallType = $basicCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBasicCallType()
    {
        $this->basicCallType = null;
        return $this;
    }

    /**
     * Getter for configurableCallType
     *
     * @return string
     */
    public function getConfigurableCallType()
    {
        return $this->configurableCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurableCallType;
    }

    /**
     * Setter for configurableCallType
     *
     * @param string $configurableCallType
     * @return $this
     */
    public function setConfigurableCallType($configurableCallType)
    {
        $this->configurableCallType = $configurableCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurableCallType()
    {
        $this->configurableCallType = null;
        return $this;
    }

    /**
     * Getter for alternateCallIndicator
     *
     * @return string
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }

    /**
     * Getter for virtualOnNetCallType
     *
     * @return string
     */
    public function getVirtualOnNetCallType()
    {
        return $this->virtualOnNetCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallType;
    }

    /**
     * Setter for virtualOnNetCallType
     *
     * @param string $virtualOnNetCallType
     * @return $this
     */
    public function setVirtualOnNetCallType($virtualOnNetCallType)
    {
        $this->virtualOnNetCallType = $virtualOnNetCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallType()
    {
        $this->virtualOnNetCallType = null;
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

    /**
     * Getter for startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTime()
    {
        $this->startTime = null;
        return $this;
    }

    /**
     * Getter for answerTime
     *
     * @return string
     */
    public function getAnswerTime()
    {
        return $this->answerTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerTime;
    }

    /**
     * Setter for answerTime
     *
     * @param string $answerTime
     * @return $this
     */
    public function setAnswerTime($answerTime)
    {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerTime()
    {
        $this->answerTime = null;
        return $this;
    }

    /**
     * Getter for releaseTime
     *
     * @return string
     */
    public function getReleaseTime()
    {
        return $this->releaseTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->releaseTime;
    }

    /**
     * Setter for releaseTime
     *
     * @param string $releaseTime
     * @return $this
     */
    public function setReleaseTime($releaseTime)
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReleaseTime()
    {
        $this->releaseTime = null;
        return $this;
    }

    /**
     * Getter for detachedTime
     *
     * @return string
     */
    public function getDetachedTime()
    {
        return $this->detachedTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->detachedTime;
    }

    /**
     * Setter for detachedTime
     *
     * @param string $detachedTime
     * @return $this
     */
    public function setDetachedTime($detachedTime)
    {
        $this->detachedTime = $detachedTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDetachedTime()
    {
        $this->detachedTime = null;
        return $this;
    }

    /**
     * Getter for detachedAnswerTime
     *
     * @return string
     */
    public function getDetachedAnswerTime()
    {
        return $this->detachedAnswerTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->detachedAnswerTime;
    }

    /**
     * Setter for detachedAnswerTime
     *
     * @param string $detachedAnswerTime
     * @return $this
     */
    public function setDetachedAnswerTime($detachedAnswerTime)
    {
        $this->detachedAnswerTime = $detachedAnswerTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDetachedAnswerTime()
    {
        $this->detachedAnswerTime = null;
        return $this;
    }

    /**
     * Getter for outgoingDnis
     *
     * @return string
     */
    public function getOutgoingDnis()
    {
        return $this->outgoingDnis instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingDnis;
    }

    /**
     * Setter for outgoingDnis
     *
     * @param string $outgoingDnis
     * @return $this
     */
    public function setOutgoingDnis($outgoingDnis)
    {
        $this->outgoingDnis = $outgoingDnis;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingDnis()
    {
        $this->outgoingDnis = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationDisposition
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21
     */
    public function getServiceInvocationDisposition()
    {
        return $this->serviceInvocationDisposition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationDisposition;
    }

    /**
     * Setter for serviceInvocationDisposition
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21 $serviceInvocationDisposition
     * @return $this
     */
    public function setServiceInvocationDisposition(\CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21 $serviceInvocationDisposition)
    {
        $this->serviceInvocationDisposition = $serviceInvocationDisposition;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationDisposition()
    {
        $this->serviceInvocationDisposition = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationDialedNumber
     *
     * @return string
     */
    public function getServiceInvocationDialedNumber()
    {
        return $this->serviceInvocationDialedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationDialedNumber;
    }

    /**
     * Setter for serviceInvocationDialedNumber
     *
     * @param string $serviceInvocationDialedNumber
     * @return $this
     */
    public function setServiceInvocationDialedNumber($serviceInvocationDialedNumber)
    {
        $this->serviceInvocationDialedNumber = $serviceInvocationDialedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationDialedNumber()
    {
        $this->serviceInvocationDialedNumber = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledNumber
     *
     * @return string
     */
    public function getServiceInvocationCalledNumber()
    {
        return $this->serviceInvocationCalledNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationCalledNumber;
    }

    /**
     * Setter for serviceInvocationCalledNumber
     *
     * @param string $serviceInvocationCalledNumber
     * @return $this
     */
    public function setServiceInvocationCalledNumber($serviceInvocationCalledNumber)
    {
        $this->serviceInvocationCalledNumber = $serviceInvocationCalledNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationCalledNumber()
    {
        $this->serviceInvocationCalledNumber = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationNetworkTranslatedAddress
     *
     * @return string
     */
    public function getServiceInvocationNetworkTranslatedAddress()
    {
        return $this->serviceInvocationNetworkTranslatedAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationNetworkTranslatedAddress;
    }

    /**
     * Setter for serviceInvocationNetworkTranslatedAddress
     *
     * @param string $serviceInvocationNetworkTranslatedAddress
     * @return $this
     */
    public function setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress)
    {
        $this->serviceInvocationNetworkTranslatedAddress = $serviceInvocationNetworkTranslatedAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationNetworkTranslatedAddress()
    {
        $this->serviceInvocationNetworkTranslatedAddress = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationTypeOfNetwork
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkType
     */
    public function getServiceInvocationTypeOfNetwork()
    {
        return $this->serviceInvocationTypeOfNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationTypeOfNetwork;
    }

    /**
     * Setter for serviceInvocationTypeOfNetwork
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkType $serviceInvocationTypeOfNetwork
     * @return $this
     */
    public function setServiceInvocationTypeOfNetwork(\CWM\BroadWorksConnector\Ocip\Models\NetworkType $serviceInvocationTypeOfNetwork)
    {
        $this->serviceInvocationTypeOfNetwork = $serviceInvocationTypeOfNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationTypeOfNetwork()
    {
        $this->serviceInvocationTypeOfNetwork = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationCallCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     */
    public function getServiceInvocationCallCategory()
    {
        return $this->serviceInvocationCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationCallCategory;
    }

    /**
     * Setter for serviceInvocationCallCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory $serviceInvocationCallCategory
     * @return $this
     */
    public function setServiceInvocationCallCategory(\CWM\BroadWorksConnector\Ocip\Models\CallCategory $serviceInvocationCallCategory)
    {
        $this->serviceInvocationCallCategory = $serviceInvocationCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationCallCategory()
    {
        $this->serviceInvocationCallCategory = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationBasicCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     */
    public function getServiceInvocationBasicCallType()
    {
        return $this->serviceInvocationBasicCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationBasicCallType;
    }

    /**
     * Setter for serviceInvocationBasicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType $serviceInvocationBasicCallType
     * @return $this
     */
    public function setServiceInvocationBasicCallType(\CWM\BroadWorksConnector\Ocip\Models\BasicCallType $serviceInvocationBasicCallType)
    {
        $this->serviceInvocationBasicCallType = $serviceInvocationBasicCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationBasicCallType()
    {
        $this->serviceInvocationBasicCallType = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationConfigurableCallType
     *
     * @return string
     */
    public function getServiceInvocationConfigurableCallType()
    {
        return $this->serviceInvocationConfigurableCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationConfigurableCallType;
    }

    /**
     * Setter for serviceInvocationConfigurableCallType
     *
     * @param string $serviceInvocationConfigurableCallType
     * @return $this
     */
    public function setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType)
    {
        $this->serviceInvocationConfigurableCallType = $serviceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationConfigurableCallType()
    {
        $this->serviceInvocationConfigurableCallType = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationAlternateCallIndicator
     *
     * @return string
     */
    public function getServiceInvocationAlternateCallIndicator()
    {
        return $this->serviceInvocationAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationAlternateCallIndicator;
    }

    /**
     * Setter for serviceInvocationAlternateCallIndicator
     *
     * @param string $serviceInvocationAlternateCallIndicator
     * @return $this
     */
    public function setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator)
    {
        $this->serviceInvocationAlternateCallIndicator = $serviceInvocationAlternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationAlternateCallIndicator()
    {
        $this->serviceInvocationAlternateCallIndicator = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationVirtualOnNetCallType
     *
     * @return string
     */
    public function getServiceInvocationVirtualOnNetCallType()
    {
        return $this->serviceInvocationVirtualOnNetCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationVirtualOnNetCallType;
    }

    /**
     * Setter for serviceInvocationVirtualOnNetCallType
     *
     * @param string $serviceInvocationVirtualOnNetCallType
     * @return $this
     */
    public function setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType)
    {
        $this->serviceInvocationVirtualOnNetCallType = $serviceInvocationVirtualOnNetCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationVirtualOnNetCallType()
    {
        $this->serviceInvocationVirtualOnNetCallType = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledDirectoryName
     *
     * @return string
     */
    public function getServiceInvocationCalledDirectoryName()
    {
        return $this->serviceInvocationCalledDirectoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationCalledDirectoryName;
    }

    /**
     * Setter for serviceInvocationCalledDirectoryName
     *
     * @param string $serviceInvocationCalledDirectoryName
     * @return $this
     */
    public function setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName)
    {
        $this->serviceInvocationCalledDirectoryName = $serviceInvocationCalledDirectoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationCalledDirectoryName()
    {
        $this->serviceInvocationCalledDirectoryName = null;
        return $this;
    }

    /**
     * Getter for serviceInvocationCalledGroupId
     *
     * @return string
     */
    public function getServiceInvocationCalledGroupId()
    {
        return $this->serviceInvocationCalledGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInvocationCalledGroupId;
    }

    /**
     * Setter for serviceInvocationCalledGroupId
     *
     * @param string $serviceInvocationCalledGroupId
     * @return $this
     */
    public function setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId)
    {
        $this->serviceInvocationCalledGroupId = $serviceInvocationCalledGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInvocationCalledGroupId()
    {
        $this->serviceInvocationCalledGroupId = null;
        return $this;
    }

    /**
     * Getter for redirectingNumber
     *
     * @return string
     */
    public function getRedirectingNumber()
    {
        return $this->redirectingNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingNumber;
    }

    /**
     * Setter for redirectingNumber
     *
     * @param string $redirectingNumber
     * @return $this
     */
    public function setRedirectingNumber($redirectingNumber)
    {
        $this->redirectingNumber = $redirectingNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingNumber()
    {
        $this->redirectingNumber = null;
        return $this;
    }

    /**
     * Getter for redirectingName
     *
     * @return string
     */
    public function getRedirectingName()
    {
        return $this->redirectingName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingName;
    }

    /**
     * Setter for redirectingName
     *
     * @param string $redirectingName
     * @return $this
     */
    public function setRedirectingName($redirectingName)
    {
        $this->redirectingName = $redirectingName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingName()
    {
        $this->redirectingName = null;
        return $this;
    }

    /**
     * Getter for redirectingPresentationIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RedirectingPresentationIndicator
     */
    public function getRedirectingPresentationIndicator()
    {
        return $this->redirectingPresentationIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingPresentationIndicator;
    }

    /**
     * Setter for redirectingPresentationIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RedirectingPresentationIndicator $redirectingPresentationIndicator
     * @return $this
     */
    public function setRedirectingPresentationIndicator(\CWM\BroadWorksConnector\Ocip\Models\RedirectingPresentationIndicator $redirectingPresentationIndicator)
    {
        $this->redirectingPresentationIndicator = $redirectingPresentationIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingPresentationIndicator()
    {
        $this->redirectingPresentationIndicator = null;
        return $this;
    }

    /**
     * Getter for RedirectingReason
     *
     * @return string
     */
    public function getRedirectingReason()
    {
        return $this->RedirectingReason instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->RedirectingReason;
    }

    /**
     * Setter for RedirectingReason
     *
     * @param string $RedirectingReason
     * @return $this
     */
    public function setRedirectingReason($RedirectingReason)
    {
        $this->RedirectingReason = $RedirectingReason;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingReason()
    {
        $this->RedirectingReason = null;
        return $this;
    }

    /**
     * Getter for accountAuthorizationCode
     *
     * @return string
     */
    public function getAccountAuthorizationCode()
    {
        return $this->accountAuthorizationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountAuthorizationCode;
    }

    /**
     * Setter for accountAuthorizationCode
     *
     * @param string $accountAuthorizationCode
     * @return $this
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode)
    {
        $this->accountAuthorizationCode = $accountAuthorizationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountAuthorizationCode()
    {
        $this->accountAuthorizationCode = null;
        return $this;
    }

    /**
     * Getter for callAuthorizationCode
     *
     * @return string
     */
    public function getCallAuthorizationCode()
    {
        return $this->callAuthorizationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callAuthorizationCode;
    }

    /**
     * Setter for callAuthorizationCode
     *
     * @param string $callAuthorizationCode
     * @return $this
     */
    public function setCallAuthorizationCode($callAuthorizationCode)
    {
        $this->callAuthorizationCode = $callAuthorizationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallAuthorizationCode()
    {
        $this->callAuthorizationCode = null;
        return $this;
    }

    /**
     * Getter for userGroupId
     *
     * @return string
     */
    public function getUserGroupId()
    {
        return $this->userGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userGroupId;
    }

    /**
     * Setter for userGroupId
     *
     * @param string $userGroupId
     * @return $this
     */
    public function setUserGroupId($userGroupId)
    {
        $this->userGroupId = $userGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserGroupId()
    {
        $this->userGroupId = null;
        return $this;
    }

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
     * Getter for userPrimaryDn
     *
     * @return string
     */
    public function getUserPrimaryDn()
    {
        return $this->userPrimaryDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPrimaryDn;
    }

    /**
     * Setter for userPrimaryDn
     *
     * @param string $userPrimaryDn
     * @return $this
     */
    public function setUserPrimaryDn($userPrimaryDn)
    {
        $this->userPrimaryDn = $userPrimaryDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPrimaryDn()
    {
        $this->userPrimaryDn = null;
        return $this;
    }

    /**
     * Getter for userPrimaryExtension
     *
     * @return string
     */
    public function getUserPrimaryExtension()
    {
        return $this->userPrimaryExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPrimaryExtension;
    }

    /**
     * Setter for userPrimaryExtension
     *
     * @param string $userPrimaryExtension
     * @return $this
     */
    public function setUserPrimaryExtension($userPrimaryExtension)
    {
        $this->userPrimaryExtension = $userPrimaryExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPrimaryExtension()
    {
        $this->userPrimaryExtension = null;
        return $this;
    }

    /**
     * Getter for securityClassification
     *
     * @return string
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @param string $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassification()
    {
        $this->securityClassification = null;
        return $this;
    }


}

