<?php

namespace CWM\BroadWorksConnector;

use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\ITransport;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\OCICommand;
use CWM\BroadWorksConnector\Ocip\Models\C\OCIMessage;
use CWM\BroadWorksConnector\Ocip\Models\C\OCIResponse;
use CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\BadResponseException;
use CWM\BroadWorksConnector\Ocip\LoginException;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse22V2;
use CWM\BroadWorksConnector\Ocip\Options;
use CWM\BroadWorksConnector\Ocip\SoapTransport;
use CWM\BroadWorksConnector\Ocip\TcpTransport;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaASDeprecatedSpecialExceptions;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaDeprecated;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaDeprecatedAS;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaEnterprise;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaGroup;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaHidden;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaLogin;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaReseller;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAccountAuthorizationCodes;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAdviceOfCharge;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAlternateNumbers;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAnonymousCallRejection;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAuthentication;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAutoAttendant;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAutomaticCallback;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAutomaticCollectCall;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceAutomaticHoldRetrieve;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceBargeInExempt;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceBasicCallLogs;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceBroadWorksAnywhere;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceBroadWorksMobility;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceBusyLampField;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallCapacityManagement;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallCenter;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallCenterMonitoring;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingAlways;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingAlwaysSecondary;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingBusy;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingNoAnswer;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingNotReachable;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallForwardingSelective;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingLineIDBlockingOverride;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingLineIDDeliveryBlocking;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingNameDelivery;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingNameRetrieval;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingNumberDelivery;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingPartyCategory;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallingPlan;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallMeNow;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallNotify;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallPark;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallPickup;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallRecording;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallReturn;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallTransfer;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCallWaiting;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceChargeNumber;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceClassMark;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCollaborate;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCommPilotExpress;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCommunicationBarringUserControl;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCommunicator;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceConnectedLineIdentificationPresentation;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceConnectedLineIdentificationRestriction;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCustomerOriginatedTrace;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceCustomRingback;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceDirectedCallPickupWithBargeIn;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceDirectoryNumberHunting;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceDirectRoute;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceDoNotDisturb;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceEmergencyZones;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceEnhancedCallLogs;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceExecutiveAssistant;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceExecutive;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceExternalCallingLineIDDelivery;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceExternalCustomRingback;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceFaxMessaging;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceFindMeFollowMe;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceFlexibleSeatingGuest;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceGroupNightForwarding;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceGroupPaging;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceHotelingGuest;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceHotelingHost;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceHuntGroup;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceInCallServiceActivation;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceIncomingCallingPlan;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceINIntegration;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceInstantGroupCall;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceIntegratedIMP;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceIntercept;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceInternalCallingLineIDDelivery;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceInventoryReport;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceLegacyAutomaticCallback;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceLocationBasedCallingRestrictions;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceMaliciousCallTrace;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceMeetMeConferencing;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceMusicOnHold;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceMWIDeliveryToMobileEndpoint;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceNumberPortabilityAnnouncement;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceOutgoingCallingPlan;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePersonalAssistant;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePhysicalLocation;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePolycomPhoneServices;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePreAlertingAnnouncement;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePreferredCarrier;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePrepaid;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePriorityAlert;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePrivacy;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceProvider;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServicePushToTalk;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceReceptionistEnterprise;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceReceptionistOffice;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceReceptionistSmallBusiness;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceRemoteOffice;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceResourcePriority;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceRouteList;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceRoutePoint;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSecurityClassification;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSelectiveCallAcceptance;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSelectiveCallRejection;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSequentialRing;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSeriesCompletion;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSharedCallAppearance;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSilentAlerting;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSimultaneousRingFamily;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSimultaneousRingPersonal;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSMDIMessageDesk;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSpeedDial100;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceSpeedDial8;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceThirdPartyIMP;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceThirdPartyVoiceMailSupport;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceTrunkGroup;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceTwoStageDialing;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceVideoAddOn;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceVirtualOnNetEnterpriseExtensions;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceVoiceMessaging;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceVoicePortalCalling;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceVoiceXml;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaServiceZoneCallingRestrictions;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaSystem;
use CWM\BroadWorksConnector\Ocip\Traits\OCISchemaUser;
use CWM\BroadWorksConnector\Ocip\Traits\XSOCI;
use CWM\BroadWorksConnector\Ocip\UserDetails;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Validation\Validator;
use DOMDocument;
use DOMElement;

/**
 * Client for BroadWorks OCI-P API
 *
 * @package CWM\BroadWorksConnector
 */
class OcipClient
{
    use OCISchemaASDeprecatedSpecialExceptions;
    use OCISchemaDeprecatedAS;
    use OCISchemaDeprecated;
    use OCISchemaEnterprise;
    use OCISchemaGroup;
    use OCISchemaHidden;
    use OCISchemaLogin;
    use OCISchemaReseller;
    use OCISchemaServiceAccountAuthorizationCodes;
    use OCISchemaServiceAdviceOfCharge;
    use OCISchemaServiceAlternateNumbers;
    use OCISchemaServiceAnonymousCallRejection;
    use OCISchemaServiceAuthentication;
    use OCISchemaServiceAutoAttendant;
    use OCISchemaServiceAutomaticCallback;
    use OCISchemaServiceAutomaticCollectCall;
    use OCISchemaServiceAutomaticHoldRetrieve;
    use OCISchemaServiceBargeInExempt;
    use OCISchemaServiceBasicCallLogs;
    use OCISchemaServiceBroadWorksAnywhere;
    use OCISchemaServiceBroadWorksMobility;
    use OCISchemaServiceBusyLampField;
    use OCISchemaServiceCallCapacityManagement;
    use OCISchemaServiceCallCenterMonitoring;
    use OCISchemaServiceCallCenter;
    use OCISchemaServiceCallForwardingAlways;
    use OCISchemaServiceCallForwardingAlwaysSecondary;
    use OCISchemaServiceCallForwardingBusy;
    use OCISchemaServiceCallForwardingNoAnswer;
    use OCISchemaServiceCallForwardingNotReachable;
    use OCISchemaServiceCallForwardingSelective;
    use OCISchemaServiceCallingLineIDBlockingOverride;
    use OCISchemaServiceCallingLineIDDeliveryBlocking;
    use OCISchemaServiceCallingNameDelivery;
    use OCISchemaServiceCallingNameRetrieval;
    use OCISchemaServiceCallingNumberDelivery;
    use OCISchemaServiceCallingPartyCategory;
    use OCISchemaServiceCallingPlan;
    use OCISchemaServiceCallMeNow;
    use OCISchemaServiceCallNotify;
    use OCISchemaServiceCallPark;
    use OCISchemaServiceCallPickup;
    use OCISchemaServiceCallRecording;
    use OCISchemaServiceCallReturn;
    use OCISchemaServiceCallTransfer;
    use OCISchemaServiceCallWaiting;
    use OCISchemaServiceChargeNumber;
    use OCISchemaServiceClassMark;
    use OCISchemaServiceCollaborate;
    use OCISchemaServiceCommPilotExpress;
    use OCISchemaServiceCommunicationBarringUserControl;
    use OCISchemaServiceCommunicator;
    use OCISchemaServiceConnectedLineIdentificationPresentation;
    use OCISchemaServiceConnectedLineIdentificationRestriction;
    use OCISchemaServiceCustomerOriginatedTrace;
    use OCISchemaServiceCustomRingback;
    use OCISchemaServiceDirectedCallPickupWithBargeIn;
    use OCISchemaServiceDirectoryNumberHunting;
    use OCISchemaServiceDirectRoute;
    use OCISchemaServiceDoNotDisturb;
    use OCISchemaServiceEmergencyZones;
    use OCISchemaServiceEnhancedCallLogs;
    use OCISchemaServiceExecutiveAssistant;
    use OCISchemaServiceExecutive;
    use OCISchemaServiceExternalCallingLineIDDelivery;
    use OCISchemaServiceExternalCustomRingback;
    use OCISchemaServiceFaxMessaging;
    use OCISchemaServiceFindMeFollowMe;
    use OCISchemaServiceFlexibleSeatingGuest;
    use OCISchemaServiceGroupNightForwarding;
    use OCISchemaServiceGroupPaging;
    use OCISchemaServiceHotelingGuest;
    use OCISchemaServiceHotelingHost;
    use OCISchemaServiceHuntGroup;
    use OCISchemaServiceInCallServiceActivation;
    use OCISchemaServiceIncomingCallingPlan;
    use OCISchemaServiceINIntegration;
    use OCISchemaServiceInstantGroupCall;
    use OCISchemaServiceIntegratedIMP;
    use OCISchemaServiceIntercept;
    use OCISchemaServiceInternalCallingLineIDDelivery;
    use OCISchemaServiceInventoryReport;
    use OCISchemaServiceLegacyAutomaticCallback;
    use OCISchemaServiceLocationBasedCallingRestrictions;
    use OCISchemaServiceMaliciousCallTrace;
    use OCISchemaServiceMeetMeConferencing;
    use OCISchemaServiceMusicOnHold;
    use OCISchemaServiceMWIDeliveryToMobileEndpoint;
    use OCISchemaServiceNumberPortabilityAnnouncement;
    use OCISchemaServiceOutgoingCallingPlan;
    use OCISchemaServicePersonalAssistant;
    use OCISchemaServicePhysicalLocation;
    use OCISchemaServicePolycomPhoneServices;
    use OCISchemaServicePreAlertingAnnouncement;
    use OCISchemaServicePreferredCarrier;
    use OCISchemaServicePrepaid;
    use OCISchemaServicePriorityAlert;
    use OCISchemaServicePrivacy;
    use OCISchemaServiceProvider;
    use OCISchemaServicePushToTalk;
    use OCISchemaServiceReceptionistEnterprise;
    use OCISchemaServiceReceptionistOffice;
    use OCISchemaServiceReceptionistSmallBusiness;
    use OCISchemaServiceRemoteOffice;
    use OCISchemaServiceResourcePriority;
    use OCISchemaServiceRouteList;
    use OCISchemaServiceRoutePoint;
    use OCISchemaServiceSecurityClassification;
    use OCISchemaServiceSelectiveCallAcceptance;
    use OCISchemaServiceSelectiveCallRejection;
    use OCISchemaServiceSequentialRing;
    use OCISchemaServiceSeriesCompletion;
    use OCISchemaServiceSharedCallAppearance;
    use OCISchemaServiceSilentAlerting;
    use OCISchemaServiceSimultaneousRingFamily;
    use OCISchemaServiceSimultaneousRingPersonal;
    use OCISchemaServiceSMDIMessageDesk;
    use OCISchemaServiceSpeedDial100;
    use OCISchemaServiceSpeedDial8;
    use OCISchemaServiceThirdPartyIMP;
    use OCISchemaServiceThirdPartyVoiceMailSupport;
    use OCISchemaServiceTrunkGroup;
    use OCISchemaServiceTwoStageDialing;
    use OCISchemaServiceVideoAddOn;
    use OCISchemaServiceVirtualOnNetEnterpriseExtensions;
    use OCISchemaServiceVoiceMessaging;
    use OCISchemaServiceVoicePortalCalling;
    use OCISchemaServiceVoiceXml;
    use OCISchemaServiceZoneCallingRestrictions;
    use OCISchemaSystem;
    use OCISchemaUser;
    use XSOCI;


    /** @var string */
    private $sessionId;

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var Options */
    private $options;

    /** @var ITransport */
    private $transport;

    /** @var UserDetails|null */
    private $userDetails = null;

    /**
     * @param string $url
     * @param string $username
     * @param string $password
     * @param Options|null $options
     * @throws \InvalidArgumentException
     */
    public function __construct($url, $username, $password, Options $options = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->sessionId = hash('sha256', mt_rand());
        $this->options =
            $options === null
                ? new Options()
                : $options;

        $parsedUrl = parse_url($url);

        if ($parsedUrl === false) {
            throw new \InvalidArgumentException('Unable to parse URL.');
        }

        if (!isset($parsedUrl['scheme'])) {
            throw new \InvalidArgumentException('URL should include a schema.');
        }

        switch ($parsedUrl['scheme']) {
            case 'http':
            case 'https':
                $this->transport = new SoapTransport($url, $this->options->getSoapClientOptions());
                break;
            case 'tcp':
                if (!isset($parsedUrl['port'])) {
                    $parsedUrl['port'] = 2208;
                }

                $this->transport = new TcpTransport(
                    sprintf('%s://%s:%d', $parsedUrl['scheme'], $parsedUrl['host'], $parsedUrl['port']),
                    []
                );
                break;
            case 'ssl':
            case 'sslv2':
            case 'sslv3':
            case 'tls':
                if (!isset($parsedUrl['port'])) {
                    $parsedUrl['port'] = 2209;
                }

                $this->transport = new TcpTransport(
                    sprintf('%s://%s:%d', $parsedUrl['scheme'], $parsedUrl['host'], $parsedUrl['port']),
                    $this->options->getSslOptions()
                );
                break;
            default:
                throw new \InvalidArgumentException('Unsupported scheme ' . $parsedUrl['scheme']);
        }
    }

    /**
     * @param OCICommand $command
     * @return OCIResponse
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    public function call(OCICommand $command)
    {
        if ($this->userDetails === null) {
            $this->login();
        }

        return $this->executeCommands([$command])[0];
    }

    /**
     * @param OCICommand[] $commands
     * @return OCIResponse[]
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    public function callAll(array $commands)
    {
        if ($this->userDetails === null) {
            $this->login();
        }

        return $this->executeCommands($commands);
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->userDetails !== null;
    }

    /**
     * @return ITransport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @return UserDetails
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    public function login()
    {
        if ($this->userDetails === null) {
            try {
                switch ($this->options->getServerVersion()) {
                    case Options::VERSION_14SP4:
                        $authRequest = (new AuthenticationRequest())
                            ->setUserId($this->username);

                        /** @var AuthenticationResponse $authResponse */
                        $authResponse = $this->executeCommands([$authRequest])[0];

                        $signedPassword = null;

                        if ($authResponse->getPasswordAlgorithm() === null || $authResponse->getPasswordAlgorithm()->getValue() === DigitalSignatureAlgorithm::MD5) {
                            $signedPassword = md5($authResponse->getNonce() . ':' . sha1($this->password));
                        } else {
                            throw new LoginException('Only MD5 supported for signing');
                        }

                        $loginRequest = (new LoginRequest14sp4())
                            ->setUserId($this->username)
                            ->setSignedPassword($signedPassword);
                        break;

                    case Options::VERSION_22:
                        $loginRequest = (new LoginRequest22V2())
                            ->setUserId($this->username)
                            ->setPassword($this->password);
                        break;

                    default:
                        throw new LoginException('Unhandled server version: ' . $this->options->getServerVersion());
                }

                /** @var LoginResponse14sp4|LoginResponse22V2 $loginResponse */
                $loginResponse = $this->executeCommands([$loginRequest])[0];

                $userDetails = (new UserDetails())
                    ->setLoginType($loginResponse->getLoginType())
                    ->setLocale($loginResponse->getLocale())
                    ->setEncoding($loginResponse->getEncoding())
                    ->setGroupId($loginResponse->getGroupId())
                    ->setServiceProviderId($loginResponse->getServiceProviderId())
                    ->setIsEnterprise($loginResponse->getIsEnterprise())
                    ->setPasswordExpiresDays($loginResponse->getPasswordExpiresDays())
                    ->setUserDomain($loginResponse->getUserDomain());

                if ($loginResponse instanceof LoginResponse22V2) {
                    $userDetails->setResellerId($loginResponse->getResellerId());
                }

                $this->userDetails = $userDetails;

            } catch (ErrorResponseException $e) {
                throw new LoginException($e->getMessage(), $e);
            }
        }

        return $this->userDetails;
    }

    /**
     * @return UserDetails|null
     */
    public function getUserDetails()
    {
        return $this->userDetails;
    }

    /**
     * @param OCICommand[] $commands
     * @return OCIResponse[]
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    private function executeCommands(array $commands)
    {
        $this->validate($commands);

        $xml = $this->buildCommandXml($commands);

        $response = $this->transport->send($xml->saveXML());

        $document = new DOMDocument();
        @$document->loadXML($response);

        $broadsoftDocumentElement = $document->firstChild;

        if (!$broadsoftDocumentElement instanceof DOMElement || $broadsoftDocumentElement->localName !== 'BroadsoftDocument') {
            throw new BadResponseException('Response doesn\'t begin with a BroadsoftDocument element.');
        }

        /** @var OCIMessage $broadsoftDocument */
        $broadsoftDocument = XmlUtils::fromXml($broadsoftDocumentElement,
            '\\CWM\\BroadWorksConnector\\Ocip\\Models\\C\\OCIMessage', '\\CWM\\BroadWorksConnector\\Ocip\\Models\\');

        if ($broadsoftDocument === null) {
            throw new BadResponseException('Unable to serialize response object.');
        }

        $commandResults = $broadsoftDocument->getCommand();

        if (count($commandResults) === 0) {
            throw new BadResponseException('Response doesn\'t contain any commands.');
        }

        foreach ($commandResults as $commandResult) {
            if ($commandResult instanceof ErrorResponse) {
                throw new ErrorResponseException($commandResult);
            }
        }

        return $commandResults;
    }

    /**
     * @param OCICommand[] $commands
     * @return DOMDocument
     * @throws XmlException
     */
    private function buildCommandXml(array $commands)
    {
        $document = new DOMDocument();

        $broadsoftDocument = $document->createElement('BroadsoftDocument');
        $broadsoftDocument->setAttribute('protocol', 'OCI');
        $broadsoftDocument->setAttribute('xmlns', 'C');
        $broadsoftDocument->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');

        $sessionIdElement = $document->createElement('sessionId', $this->sessionId);
        $sessionIdElement->setAttribute('xmlns', '');

        $broadsoftDocument->appendChild($sessionIdElement);

        $document->appendChild($broadsoftDocument);

        foreach ($commands as $command) {
            $commandElement = $document->createElement('command');
            $commandElement->setAttribute('xmlns', '');

            $broadsoftDocument->appendChild($commandElement);

            XmlUtils::toXml($command, $commandElement, $document);
        }

        return $document;
    }

    /**
     * @param $commands
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    private function validate($commands)
    {
        foreach ($commands as $command) {
            Validator::validate($command);
        }
    }
}