<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserService
 *
 * User level services.
 *
 * @method static UserService _3G_4G_CONTINUITY()
 * @method static UserService ADVICE_OF_CHARGE()
 * @method static UserService ALTERNATE_NUMBERS()
 * @method static UserService ANONYMOUS_CALL_REJECTION()
 * @method static UserService ATTENDANT_CONSOLE()
 * @method static UserService AUTHENTICATION()
 * @method static UserService AUTOMATIC_CALLBACK()
 * @method static UserService AUTOMATIC_HOLD_RETRIEVE()
 * @method static UserService BARGE_IN_EXEMPT()
 * @method static UserService BASIC_CALL_LOGS()
 * @method static UserService BRIA_FOR_BROADWORKS()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_DESKTOP()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_DESKTOP_AUDIO()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_MOBILE()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_MOBILE_AUDIO()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET_AUDIO()
 * @method static UserService BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET_VIDEO()
 * @method static UserService BROADWORKS_AGENT()
 * @method static UserService BROADWORKS_ANYWHERE()
 * @method static UserService BROADWORKS_CONNECTOR_FOR_LOTUS_SAMETIME()
 * @method static UserService BROADWORKS_MOBILITY()
 * @method static UserService BROADWORKS_RECEPTIONIST_OFFICE()
 * @method static UserService BROADWORKS_RECEPTIONIST_SMALL_BUSINESS()
 * @method static UserService BROADWORKS_SUPERVISOR()
 * @method static UserService BUSY_LAMP_FIELD()
 * @method static UserService CALL_CENTER_BASIC()
 * @method static UserService CALL_CENTER_MONITORING()
 * @method static UserService CALL_CENTER_STANDARD()
 * @method static UserService CALL_CENTER_PREMIUM()
 * @method static UserService CALL_FORWARDING_ALWAYS()
 * @method static UserService CALL_FORWARDING_ALWAYS_SECONDARY()
 * @method static UserService CALL_FORWARDING_BUSY()
 * @method static UserService CALL_FORWARDING_NO_ANSWER()
 * @method static UserService CALL_FORWARDING_NOT_REACHABLE()
 * @method static UserService CALL_FORWARDING_SELECTIVE()
 * @method static UserService CALL_ME_NOW()
 * @method static UserService CALL_NOTIFY()
 * @method static UserService CALL_RECORDING()
 * @method static UserService CALL_RETURN()
 * @method static UserService CALL_TRANSFER()
 * @method static UserService CALL_WAITING()
 * @method static UserService CALLING_LINE_ID_BLOCKING_OVERRIDE()
 * @method static UserService CALLING_LINE_ID_DELIVERY_BLOCKING()
 * @method static UserService CALLING_NAME_DELIVERY()
 * @method static UserService CALLING_NAME_RETRIEVAL()
 * @method static UserService CALLING_NUMBER_DELIVERY()
 * @method static UserService CALLING_PARTY_CATEGORY()
 * @method static UserService CHARGE_NUMBER()
 * @method static UserService CLASSMARK()
 * @method static UserService CLIENT_CALL_CONTROL()
 * @method static UserService CLIENT_CALL_CONTROL_II()
 * @method static UserService CLIENT_LICENSE_1()
 * @method static UserService CLIENT_LICENSE_2()
 * @method static UserService CLIENT_LICENSE_3()
 * @method static UserService CLIENT_LICENSE_4()
 * @method static UserService CLIENT_LICENSE_5()
 * @method static UserService CLIENT_LICENSE_6()
 * @method static UserService CLIENT_LICENSE_7()
 * @method static UserService CLIENT_LICENSE_8()
 * @method static UserService CLIENT_LICENSE_9()
 * @method static UserService CLIENT_LICENSE_10()
 * @method static UserService CLIENT_LICENSE_11()
 * @method static UserService CLIENT_LICENSE_12()
 * @method static UserService CLIENT_LICENSE_13()
 * @method static UserService CLIENT_LICENSE_14()
 * @method static UserService CLIENT_LICENSE_15()
 * @method static UserService CLIENT_LICENSE_16()
 * @method static UserService CLIENT_LICENSE_17()
 * @method static UserService CLIENT_LICENSE_18()
 * @method static UserService CLIENT_LICENSE_19()
 * @method static UserService CLIENT_LICENSE_20()
 * @method static UserService CLIENT_LICENSE_21()
 * @method static UserService CLIENT_LICENSE_22()
 * @method static UserService CLIENT_LICENSE_23()
 * @method static UserService CLIENT_LICENSE_24()
 * @method static UserService CLIENT_LICENSE_25()
 * @method static UserService CLIENT_LICENSE_26()
 * @method static UserService CLIENT_LICENSE_27()
 * @method static UserService CLIENT_LICENSE_28()
 * @method static UserService CLIENT_LICENSE_29()
 * @method static UserService CLIENT_LICENSE_30()
 * @method static UserService CLIENT_LICENSE_31()
 * @method static UserService CLIENT_LICENSE_32()
 * @method static UserService CLIENT_LICENSE_33()
 * @method static UserService CLIENT_LICENSE_34()
 * @method static UserService CLIENT_LICENSE_35()
 * @method static UserService CLIENT_LICENSE_36()
 * @method static UserService CLIENT_LICENSE_37()
 * @method static UserService CLIENT_LICENSE_38()
 * @method static UserService CLIENT_LICENSE_39()
 * @method static UserService CLIENT_LICENSE_40()
 * @method static UserService CLIENT_LICENSE_41()
 * @method static UserService CLIENT_LICENSE_42()
 * @method static UserService CLIENT_LICENSE_43()
 * @method static UserService CLIENT_LICENSE_44()
 * @method static UserService CLIENT_LICENSE_45()
 * @method static UserService CLIENT_LICENSE_46()
 * @method static UserService CLIENT_LICENSE_47()
 * @method static UserService CLIENT_LICENSE_48()
 * @method static UserService CLIENT_LICENSE_49()
 * @method static UserService CLIENT_LICENSE_50()
 * @method static UserService COLLABORATE_AUDIO()
 * @method static UserService COLLABORATE_VIDEO()
 * @method static UserService COLLABORATE_SHARING()
 * @method static UserService COMMPILOT_CALL_MANAGER()
 * @method static UserService COMMPILOT_EXPRESS()
 * @method static UserService COMMPILOT_EXPRESS_SR()
 * @method static UserService COMMPILOT_LITE()
 * @method static UserService COMMPILOT_RECEPTIONIST()
 * @method static UserService COMMPILOT_RESIDENTIAL()
 * @method static UserService COMMPILOT_SMALL_BUSINESS()
 * @method static UserService COMMUNICATION_BARRING_USER_CONTROL()
 * @method static UserService CONFERENCE_ROOM()
 * @method static UserService CONNECTED_LINE_IDENTIFICATION_PRESENTATION()
 * @method static UserService CONNECTED_LINE_IDENTIFICATION_RESTRICTION()
 * @method static UserService CUSTOMER_ORIGINATED_TRACE()
 * @method static UserService CUSTOM_RINGBACK_USER()
 * @method static UserService CUSTOM_RINGBACK_USER_CALL_WAITING()
 * @method static UserService CUSTOM_RINGBACK_USER_VIDEO()
 * @method static UserService DIRECT_ROUTE()
 * @method static UserService DIRECTED_CALL_PICKUP()
 * @method static UserService DIRECTED_CALL_PICKUP_WITH_BARGE_IN()
 * @method static UserService DIRECTORY_NUMBER_HUNTING()
 * @method static UserService DIVERSION_INHIBITOR()
 * @method static UserService DO_NOT_DISTURB()
 * @method static UserService DUAL_MODE_VCC()
 * @method static UserService ENHANCED_CALL_LOGS()
 * @method static UserService EXECUTIVE()
 * @method static UserService EXECUTIVE_ASSISTANT()
 * @method static UserService EXTERNAL_CALLING_LINE_ID_DELIVERY()
 * @method static UserService EXTERNAL_CUSTOM_RINGBACK()
 * @method static UserService FAX_MESSAGING()
 * @method static UserService FIND_ME_FOLLOW_ME()
 * @method static UserService FLASH_CALL_HOLD()
 * @method static UserService GETS_CALLING_LINE_ID_DELIVERY_BLOCKING()
 * @method static UserService GROUP_NIGHT_FORWARDING()
 * @method static UserService HOTELING_GUEST()
 * @method static UserService HOTELING_HOST()
 * @method static UserService FLEXIBLE_SEATING_GUEST()
 * @method static UserService INTEGRATED_IMP()
 * @method static UserService IN_CALL_SERVICE_ACTIVATION()
 * @method static UserService IN_INTEGRATION()
 * @method static UserService INTELLIGENT_NETWORK_SERVICE_CONTROL()
 * @method static UserService INTERCEPT_USER()
 * @method static UserService INTERNAL_CALLING_LINE_ID_DELIVERY()
 * @method static UserService LAST_NUMBER_REDIAL()
 * @method static UserService LEGACY_AUTOMATIC_CALLBACK()
 * @method static UserService LOCATION_BASED_CALLING_RESTRICTIONS()
 * @method static UserService LYNC_CTI()
 * @method static UserService LYNC_SOFTPHONE()
 * @method static UserService MALICIOUS_CALL_TRACE()
 * @method static UserService MOBILE_EXTENSION_TO_EXTENSION_DIALING()
 * @method static UserService MOBILITY()
 * @method static UserService MULTIPLE_CALL_ARRANGEMENT()
 * @method static UserService MUSIC_ON_HOLD_USER()
 * @method static UserService VIDEO_ON_HOLD_USER()
 * @method static UserService MWI_DELIVERY_TO_MOBILE_ENDPOINT()
 * @method static UserService N_WAY_CALL()
 * @method static UserService NUMBER_PORTABILITY_ANNOUNCEMENT()
 * @method static UserService OMA_PRESENCE()
 * @method static UserService OUTLOOK_INTEGRATION()
 * @method static UserService OFFICE_COMMUNICATOR_TAB()
 * @method static UserService PERSONAL_ASSISTANT()
 * @method static UserService PHYSICAL_LOCATION()
 * @method static UserService POLYCOM_PHONE_SERVICES()
 * @method static UserService PRE_ALERTING_ANNOUNCEMENT()
 * @method static UserService PREFERRED_CARRIER_USER()
 * @method static UserService PREPAID()
 * @method static UserService PRIORITY_ALERT()
 * @method static UserService PRIVACY()
 * @method static UserService PUSH_TO_TALK()
 * @method static UserService REMOTE_OFFICE()
 * @method static UserService ROUTE_LIST()
 * @method static UserService SMDI_MESSAGE_DESK()
 * @method static UserService SECURITY_CLASSIFICATION()
 * @method static UserService SELECTIVE_CALL_ACCEPTANCE()
 * @method static UserService SELECTIVE_CALL_REJECTION()
 * @method static UserService SEQUENTIAL_RING()
 * @method static UserService SERVICE_SCRIPTS_USER()
 * @method static UserService SHARED_CALL_APPEARANCE()
 * @method static UserService SHARED_CALL_APPEARANCE_5()
 * @method static UserService SHARED_CALL_APPEARANCE_10()
 * @method static UserService SHARED_CALL_APPEARANCE_15()
 * @method static UserService SHARED_CALL_APPEARANCE_20()
 * @method static UserService SHARED_CALL_APPEARANCE_25()
 * @method static UserService SHARED_CALL_APPEARANCE_30()
 * @method static UserService SHARED_CALL_APPEARANCE_35()
 * @method static UserService SHORT_MESSAGE_SERVICE()
 * @method static UserService SILENT_ALERTING()
 * @method static UserService SIMULTANEOUS_RING_FAMILY()
 * @method static UserService SIMULTANEOUS_RING_PERSONAL()
 * @method static UserService SPEED_DIAL_100()
 * @method static UserService SPEED_DIAL_8()
 * @method static UserService TERMINATING_ALTERNATE_TRUNK_IDENTITY()
 * @method static UserService THIRD_PARTY_IMP()
 * @method static UserService THIRD_PARTY_MWI_CONTROL()
 * @method static UserService THIRD_PARTY_VOICE_MAIL_SUPPORT()
 * @method static UserService THREE_WAY_CALL()
 * @method static UserService TWO_STAGE_DIALING()
 * @method static UserService VIDEO_ADD_ON()
 * @method static UserService VIRTUAL_ON_NET_ENTERPRISE_EXTENSIONS()
 * @method static UserService VISUAL_DEVICE_MANAGEMENT()
 * @method static UserService VOICE_MESSAGING_USER()
 * @method static UserService VOICE_MESSAGING_USER_VIDEO()
 * @method static UserService VOICE_PORTAL_CALLING()
 * @method static UserService ZONE_CALLING_RESTRICTIONS()
 * @ValueType string
 */
class UserService extends \MyCLabs\Enum\Enum
{

    const _3G_4G_CONTINUITY = '3G/4G Continuity';

    const ADVICE_OF_CHARGE = 'Advice Of Charge';

    const ALTERNATE_NUMBERS = 'Alternate Numbers';

    const ANONYMOUS_CALL_REJECTION = 'Anonymous Call Rejection';

    const ATTENDANT_CONSOLE = 'Attendant Console';

    const AUTHENTICATION = 'Authentication';

    const AUTOMATIC_CALLBACK = 'Automatic Callback';

    const AUTOMATIC_HOLD_RETRIEVE = 'Automatic Hold/Retrieve';

    const BARGE_IN_EXEMPT = 'Barge-in Exempt';

    const BASIC_CALL_LOGS = 'Basic Call Logs';

    const BRIA_FOR_BROADWORKS = 'Bria For BroadWorks';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_DESKTOP = 'BroadTouch Business Communicator Desktop';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_DESKTOP_AUDIO = 'BroadTouch Business Communicator Desktop - Audio';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_MOBILE = 'BroadTouch Business Communicator Mobile';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_MOBILE_AUDIO = 'BroadTouch Business Communicator Mobile - Audio';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET = 'BroadTouch Business Communicator Tablet';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET_AUDIO = 'BroadTouch Business Communicator Tablet - Audio';

    const BROADTOUCH_BUSINESS_COMMUNICATOR_TABLET_VIDEO = 'BroadTouch Business Communicator Tablet - Video';

    const BROADWORKS_AGENT = 'BroadWorks Agent';

    const BROADWORKS_ANYWHERE = 'BroadWorks Anywhere';

    const BROADWORKS_CONNECTOR_FOR_LOTUS_SAMETIME = 'BroadWorks Connector for Lotus Sametime';

    const BROADWORKS_MOBILITY = 'BroadWorks Mobility';

    const BROADWORKS_RECEPTIONIST_OFFICE = 'BroadWorks Receptionist - Office';

    const BROADWORKS_RECEPTIONIST_SMALL_BUSINESS = 'BroadWorks Receptionist - Small Business';

    const BROADWORKS_SUPERVISOR = 'BroadWorks Supervisor';

    const BUSY_LAMP_FIELD = 'Busy Lamp Field';

    const CALL_CENTER_BASIC = 'Call Center - Basic';

    const CALL_CENTER_MONITORING = 'Call Center Monitoring';

    const CALL_CENTER_STANDARD = 'Call Center - Standard';

    const CALL_CENTER_PREMIUM = 'Call Center - Premium';

    const CALL_FORWARDING_ALWAYS = 'Call Forwarding Always';

    const CALL_FORWARDING_ALWAYS_SECONDARY = 'Call Forwarding Always Secondary';

    const CALL_FORWARDING_BUSY = 'Call Forwarding Busy';

    const CALL_FORWARDING_NO_ANSWER = 'Call Forwarding No Answer';

    const CALL_FORWARDING_NOT_REACHABLE = 'Call Forwarding Not Reachable';

    const CALL_FORWARDING_SELECTIVE = 'Call Forwarding Selective';

    const CALL_ME_NOW = 'Call Me Now';

    const CALL_NOTIFY = 'Call Notify';

    const CALL_RECORDING = 'Call Recording';

    const CALL_RETURN = 'Call Return';

    const CALL_TRANSFER = 'Call Transfer';

    const CALL_WAITING = 'Call Waiting';

    const CALLING_LINE_ID_BLOCKING_OVERRIDE = 'Calling Line ID Blocking Override';

    const CALLING_LINE_ID_DELIVERY_BLOCKING = 'Calling Line ID Delivery Blocking';

    const CALLING_NAME_DELIVERY = 'Calling Name Delivery';

    const CALLING_NAME_RETRIEVAL = 'Calling Name Retrieval';

    const CALLING_NUMBER_DELIVERY = 'Calling Number Delivery';

    const CALLING_PARTY_CATEGORY = 'Calling Party Category';

    const CHARGE_NUMBER = 'Charge Number';

    const CLASSMARK = 'Classmark';

    const CLIENT_CALL_CONTROL = 'Client Call Control';

    const CLIENT_CALL_CONTROL_II = 'Client Call Control II';

    const CLIENT_LICENSE_1 = 'Client License 1';

    const CLIENT_LICENSE_2 = 'Client License 2';

    const CLIENT_LICENSE_3 = 'Client License 3';

    const CLIENT_LICENSE_4 = 'Client License 4';

    const CLIENT_LICENSE_5 = 'Client License 5';

    const CLIENT_LICENSE_6 = 'Client License 6';

    const CLIENT_LICENSE_7 = 'Client License 7';

    const CLIENT_LICENSE_8 = 'Client License 8';

    const CLIENT_LICENSE_9 = 'Client License 9';

    const CLIENT_LICENSE_10 = 'Client License 10';

    const CLIENT_LICENSE_11 = 'Client License 11';

    const CLIENT_LICENSE_12 = 'Client License 12';

    const CLIENT_LICENSE_13 = 'Client License 13';

    const CLIENT_LICENSE_14 = 'Client License 14';

    const CLIENT_LICENSE_15 = 'Client License 15';

    const CLIENT_LICENSE_16 = 'Client License 16';

    const CLIENT_LICENSE_17 = 'Client License 17';

    const CLIENT_LICENSE_18 = 'Client License 18';

    const CLIENT_LICENSE_19 = 'Client License 19';

    const CLIENT_LICENSE_20 = 'Client License 20';

    const CLIENT_LICENSE_21 = 'Client License 21';

    const CLIENT_LICENSE_22 = 'Client License 22';

    const CLIENT_LICENSE_23 = 'Client License 23';

    const CLIENT_LICENSE_24 = 'Client License 24';

    const CLIENT_LICENSE_25 = 'Client License 25';

    const CLIENT_LICENSE_26 = 'Client License 26';

    const CLIENT_LICENSE_27 = 'Client License 27';

    const CLIENT_LICENSE_28 = 'Client License 28';

    const CLIENT_LICENSE_29 = 'Client License 29';

    const CLIENT_LICENSE_30 = 'Client License 30';

    const CLIENT_LICENSE_31 = 'Client License 31';

    const CLIENT_LICENSE_32 = 'Client License 32';

    const CLIENT_LICENSE_33 = 'Client License 33';

    const CLIENT_LICENSE_34 = 'Client License 34';

    const CLIENT_LICENSE_35 = 'Client License 35';

    const CLIENT_LICENSE_36 = 'Client License 36';

    const CLIENT_LICENSE_37 = 'Client License 37';

    const CLIENT_LICENSE_38 = 'Client License 38';

    const CLIENT_LICENSE_39 = 'Client License 39';

    const CLIENT_LICENSE_40 = 'Client License 40';

    const CLIENT_LICENSE_41 = 'Client License 41';

    const CLIENT_LICENSE_42 = 'Client License 42';

    const CLIENT_LICENSE_43 = 'Client License 43';

    const CLIENT_LICENSE_44 = 'Client License 44';

    const CLIENT_LICENSE_45 = 'Client License 45';

    const CLIENT_LICENSE_46 = 'Client License 46';

    const CLIENT_LICENSE_47 = 'Client License 47';

    const CLIENT_LICENSE_48 = 'Client License 48';

    const CLIENT_LICENSE_49 = 'Client License 49';

    const CLIENT_LICENSE_50 = 'Client License 50';

    const COLLABORATE_AUDIO = 'Collaborate - Audio';

    const COLLABORATE_VIDEO = 'Collaborate - Video';

    const COLLABORATE_SHARING = 'Collaborate - Sharing';

    const COMMPILOT_CALL_MANAGER = 'CommPilot Call Manager';

    const COMMPILOT_EXPRESS = 'CommPilot Express';

    const COMMPILOT_EXPRESS_SR = 'CommPilot Express SR';

    const COMMPILOT_LITE = 'CommPilot Lite';

    const COMMPILOT_RECEPTIONIST = 'CommPilot Receptionist';

    const COMMPILOT_RESIDENTIAL = 'CommPilot Residential';

    const COMMPILOT_SMALL_BUSINESS = 'CommPilot Small Business';

    const COMMUNICATION_BARRING_USER_CONTROL = 'Communication Barring User-Control';

    const CONFERENCE_ROOM = 'Conference Room';

    const CONNECTED_LINE_IDENTIFICATION_PRESENTATION = 'Connected Line Identification Presentation';

    const CONNECTED_LINE_IDENTIFICATION_RESTRICTION = 'Connected Line Identification Restriction';

    const CUSTOMER_ORIGINATED_TRACE = 'Customer Originated Trace';

    const CUSTOM_RINGBACK_USER = 'Custom Ringback User';

    const CUSTOM_RINGBACK_USER_CALL_WAITING = 'Custom Ringback User - Call Waiting';

    const CUSTOM_RINGBACK_USER_VIDEO = 'Custom Ringback User - Video';

    const DIRECT_ROUTE = 'Direct Route';

    const DIRECTED_CALL_PICKUP = 'Directed Call Pickup';

    const DIRECTED_CALL_PICKUP_WITH_BARGE_IN = 'Directed Call Pickup with Barge-in';

    const DIRECTORY_NUMBER_HUNTING = 'Directory Number Hunting';

    const DIVERSION_INHIBITOR = 'Diversion Inhibitor';

    const DO_NOT_DISTURB = 'Do Not Disturb';

    const DUAL_MODE_VCC = 'Dual-Mode VCC';

    const ENHANCED_CALL_LOGS = 'Enhanced Call Logs';

    const EXECUTIVE = 'Executive';

    const EXECUTIVE_ASSISTANT = 'Executive-Assistant';

    const EXTERNAL_CALLING_LINE_ID_DELIVERY = 'External Calling Line ID Delivery';

    const EXTERNAL_CUSTOM_RINGBACK = 'External Custom Ringback';

    const FAX_MESSAGING = 'Fax Messaging';

    const FIND_ME_FOLLOW_ME = 'Find-me/Follow-me';

    const FLASH_CALL_HOLD = 'Flash Call Hold';

    const GETS_CALLING_LINE_ID_DELIVERY_BLOCKING = 'GETS Calling Line ID Delivery Blocking';

    const GROUP_NIGHT_FORWARDING = 'Group Night Forwarding';

    const HOTELING_GUEST = 'Hoteling Guest';

    const HOTELING_HOST = 'Hoteling Host';

    const FLEXIBLE_SEATING_GUEST = 'Flexible Seating Guest';

    const INTEGRATED_IMP = 'Integrated IMP';

    const IN_CALL_SERVICE_ACTIVATION = 'In-Call Service Activation';

    const IN_INTEGRATION = 'IN Integration';

    const INTELLIGENT_NETWORK_SERVICE_CONTROL = 'Intelligent Network Service Control';

    const INTERCEPT_USER = 'Intercept User';

    const INTERNAL_CALLING_LINE_ID_DELIVERY = 'Internal Calling Line ID Delivery';

    const LAST_NUMBER_REDIAL = 'Last Number Redial';

    const LEGACY_AUTOMATIC_CALLBACK = 'Legacy Automatic Callback';

    const LOCATION_BASED_CALLING_RESTRICTIONS = 'Location-Based Calling Restrictions';

    const LYNC_CTI = 'Lync CTI';

    const LYNC_SOFTPHONE = 'Lync Softphone';

    const MALICIOUS_CALL_TRACE = 'Malicious Call Trace';

    const MOBILE_EXTENSION_TO_EXTENSION_DIALING = 'Mobile Extension to Extension Dialing';

    const MOBILITY = 'Mobility';

    const MULTIPLE_CALL_ARRANGEMENT = 'Multiple Call Arrangement';

    const MUSIC_ON_HOLD_USER = 'Music On Hold User';

    const VIDEO_ON_HOLD_USER = 'Video On Hold User';

    const MWI_DELIVERY_TO_MOBILE_ENDPOINT = 'MWI Delivery to Mobile Endpoint';

    const N_WAY_CALL = 'N-Way Call';

    const NUMBER_PORTABILITY_ANNOUNCEMENT = 'Number Portability Announcement';

    const OMA_PRESENCE = 'OMA Presence';

    const OUTLOOK_INTEGRATION = 'Outlook Integration';

    const OFFICE_COMMUNICATOR_TAB = 'Office Communicator Tab';

    const PERSONAL_ASSISTANT = 'Personal Assistant';

    const PHYSICAL_LOCATION = 'Physical Location';

    const POLYCOM_PHONE_SERVICES = 'Polycom Phone Services';

    const PRE_ALERTING_ANNOUNCEMENT = 'Pre-alerting Announcement';

    const PREFERRED_CARRIER_USER = 'Preferred Carrier User';

    const PREPAID = 'Prepaid';

    const PRIORITY_ALERT = 'Priority Alert';

    const PRIVACY = 'Privacy';

    const PUSH_TO_TALK = 'Push to Talk';

    const REMOTE_OFFICE = 'Remote Office';

    const ROUTE_LIST = 'Route List';

    const SMDI_MESSAGE_DESK = 'SMDI Message Desk';

    const SECURITY_CLASSIFICATION = 'Security Classification';

    const SELECTIVE_CALL_ACCEPTANCE = 'Selective Call Acceptance';

    const SELECTIVE_CALL_REJECTION = 'Selective Call Rejection';

    const SEQUENTIAL_RING = 'Sequential Ring';

    const SERVICE_SCRIPTS_USER = 'Service Scripts User';

    const SHARED_CALL_APPEARANCE = 'Shared Call Appearance';

    const SHARED_CALL_APPEARANCE_5 = 'Shared Call Appearance 5';

    const SHARED_CALL_APPEARANCE_10 = 'Shared Call Appearance 10';

    const SHARED_CALL_APPEARANCE_15 = 'Shared Call Appearance 15';

    const SHARED_CALL_APPEARANCE_20 = 'Shared Call Appearance 20';

    const SHARED_CALL_APPEARANCE_25 = 'Shared Call Appearance 25';

    const SHARED_CALL_APPEARANCE_30 = 'Shared Call Appearance 30';

    const SHARED_CALL_APPEARANCE_35 = 'Shared Call Appearance 35';

    const SHORT_MESSAGE_SERVICE = 'Short Message Service';

    const SILENT_ALERTING = 'Silent Alerting';

    const SIMULTANEOUS_RING_FAMILY = 'Simultaneous Ring Family';

    const SIMULTANEOUS_RING_PERSONAL = 'Simultaneous Ring Personal';

    const SPEED_DIAL_100 = 'Speed Dial 100';

    const SPEED_DIAL_8 = 'Speed Dial 8';

    const TERMINATING_ALTERNATE_TRUNK_IDENTITY = 'Terminating Alternate Trunk Identity';

    const THIRD_PARTY_IMP = 'Third-Party IMP';

    const THIRD_PARTY_MWI_CONTROL = 'Third-Party MWI Control';

    const THIRD_PARTY_VOICE_MAIL_SUPPORT = 'Third-Party Voice Mail Support';

    const THREE_WAY_CALL = 'Three-Way Call';

    const TWO_STAGE_DIALING = 'Two-Stage Dialing';

    const VIDEO_ADD_ON = 'Video Add-On';

    const VIRTUAL_ON_NET_ENTERPRISE_EXTENSIONS = 'Virtual On-Net Enterprise Extensions';

    const VISUAL_DEVICE_MANAGEMENT = 'Visual Device Management';

    const VOICE_MESSAGING_USER = 'Voice Messaging User';

    const VOICE_MESSAGING_USER_VIDEO = 'Voice Messaging User - Video';

    const VOICE_PORTAL_CALLING = 'Voice Portal Calling';

    const ZONE_CALLING_RESTRICTIONS = 'Zone Calling Restrictions';


}

