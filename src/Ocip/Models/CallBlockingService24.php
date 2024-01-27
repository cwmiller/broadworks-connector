<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService24
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
 *            Enterprise Route Exhaust Unreachable
 *            TCUG
 *            RPAdmission
 *            Maximum Redirection Depth Reached On Busy
 *            Maximum Redirection Depth Reached On Diversion
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *
 * @method static CallBlockingService24 OCP()
 * @method static CallBlockingService24 EOCP()
 * @method static CallBlockingService24 ICP()
 * @method static CallBlockingService24 ACR()
 * @method static CallBlockingService24 SCR()
 * @method static CallBlockingService24 SCA()
 * @method static CallBlockingService24 AAC()
 * @method static CallBlockingService24 INTERCEPT()
 * @method static CallBlockingService24 PTT()
 * @method static CallBlockingService24 COMMUNICATION_BARRING()
 * @method static CallBlockingService24 SAC()
 * @method static CallBlockingService24 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService24 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService24 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService24 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService24 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService24 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService24 CALL_PARK()
 * @method static CallBlockingService24 NUMBER_PORTABILITY()
 * @method static CallBlockingService24 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService24 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService24 ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE()
 * @method static CallBlockingService24 TCUG()
 * @method static CallBlockingService24 RPADMISSION()
 * @method static CallBlockingService24 MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_BUSY()
 * @method static CallBlockingService24 MAXIMUM_REDIRECTION_DEPTH_REACHED_ON_DIVERSION()
 * @EnumValueType string
 */
class CallBlockingService24 extends \MyCLabs\Enum\Enum
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
}

