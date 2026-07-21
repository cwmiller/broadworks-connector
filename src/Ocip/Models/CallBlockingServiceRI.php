<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingServiceRI
 *
 * Possible types of Call Blocking Services.
 *         The following enumeration values are only used in AS Data mode:
 *            PTT
 *            SAC
 *            BroadWorks Mobility Deny Originations
 *            BroadWorks Mobility Deny Terminations
 *            Enterprise Trunk Route Exhaust
 *            Call Park
 *            Number Portability
 *            Maximum Concurrent Terminating Alerting Requests
 *            Automatic Collect Call
 *            Enterprise Trunk Route Exhaust Unreachable
 *            TCUG
 *            RPAdmission
 *            Maximum Redirection Depth Reached On Busy
 *            Maximum Redirection Depth Reached On Diversion
 *            Enterprise Trunk Route Exhaust Busy
 *            SIP 603 Plus Analytics		   
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *          The following type is only used in XS data mode and ignored in AS data mode:
 *            Calling Name Retrieval
 *
 * @method static CallBlockingServiceRI OCP()
 * @method static CallBlockingServiceRI EOCP()
 * @method static CallBlockingServiceRI ICP()
 * @method static CallBlockingServiceRI ACR()
 * @method static CallBlockingServiceRI SCR()
 * @method static CallBlockingServiceRI SCA()
 * @method static CallBlockingServiceRI AAC()
 * @method static CallBlockingServiceRI INTERCEPT()
 * @method static CallBlockingServiceRI PTT()
 * @method static CallBlockingServiceRI COMMUNICATION_BARRING()
 * @method static CallBlockingServiceRI SAC()
 * @method static CallBlockingServiceRI INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingServiceRI HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingServiceRI INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingServiceRI BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingServiceRI BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingServiceRI ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingServiceRI CALL_PARK()
 * @method static CallBlockingServiceRI NUMBER_PORTABILITY()
 * @method static CallBlockingServiceRI MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingServiceRI AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingServiceRI ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE()
 * @method static CallBlockingServiceRI TCUG()
 * @method static CallBlockingServiceRI RPADMISSION()
 * @method static CallBlockingServiceRI MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_BUSY()
 * @method static CallBlockingServiceRI MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_DIVERSION()
 * @method static CallBlockingServiceRI CALLING_NAME_RETRIEVAL()
 * @method static CallBlockingServiceRI ENTERPRISE_TRUNK_ROUTE_EXHAUST_BUSY()
 * @method static CallBlockingServiceRI SIP_603_PLUS_ANALYTICS()
 * @EnumValueType string
 */
class CallBlockingServiceRI extends \MyCLabs\Enum\Enum
{
    public const OCP = 'OCP';

    public const EOCP = 'EOCP';

    public const ICP = 'ICP';

    public const ACR = 'ACR';

    public const SCR = 'SCR';

    public const SCA = 'SCA';

    public const AAC = 'AAC';

    public const INTERCEPT = 'Intercept';

    public const PTT = 'PTT';

    public const COMMUNICATION_BARRING = 'Communication Barring';

    public const SAC = 'SAC';

    public const INCOMING_COMMUNICATION_BARRING = 'Incoming Communication Barring';

    public const HIERARCHICAL_COMMUNICATION_BARRING = 'Hierarchical Communication Barring';

    public const INCOMING_HIERARCHICAL_COMMUNICATION_BARRING = 'Incoming Hierarchical Communication Barring';

    public const BROADWORKS_MOBILITY_DENY_ORIGINATIONS = 'BroadWorks Mobility Deny Originations';

    public const BROADWORKS_MOBILITY_DENY_TERMINATIONS = 'BroadWorks Mobility Deny Terminations';

    public const ENTERPRISE_TRUNK_ROUTE_EXHAUST = 'Enterprise Trunk Route Exhaust';

    public const CALL_PARK = 'Call Park';

    public const NUMBER_PORTABILITY = 'Number Portability';

    public const MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS = 'Maximum Concurrent Terminating Alerting Requests';

    public const AUTOMATIC_COLLECT_CALL = 'Automatic Collect Call';

    public const ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE = 'Enterprise Trunk Route Exhaust Unreachable';

    public const TCUG = 'TCUG';

    public const RPADMISSION = 'RPAdmission';

    public const MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_BUSY = 'Maximum Redirection Depth Reached On Busy';

    public const MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_DIVERSION = 'Maximum Redirection Depth Reached On Diversion';

    public const CALLING_NAME_RETRIEVAL = 'Calling Name Retrieval';

    public const ENTERPRISE_TRUNK_ROUTE_EXHAUST_BUSY = 'Enterprise Trunk Route Exhaust Busy';

    public const SIP_603_PLUS_ANALYTICS = 'SIP 603 Plus Analytics';
}

