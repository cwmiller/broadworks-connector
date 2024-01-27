<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService23V3
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
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *
 * @method static CallBlockingService23V3 OCP()
 * @method static CallBlockingService23V3 EOCP()
 * @method static CallBlockingService23V3 ICP()
 * @method static CallBlockingService23V3 ACR()
 * @method static CallBlockingService23V3 SCR()
 * @method static CallBlockingService23V3 SCA()
 * @method static CallBlockingService23V3 AAC()
 * @method static CallBlockingService23V3 INTERCEPT()
 * @method static CallBlockingService23V3 PTT()
 * @method static CallBlockingService23V3 COMMUNICATION_BARRING()
 * @method static CallBlockingService23V3 SAC()
 * @method static CallBlockingService23V3 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V3 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V3 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V3 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService23V3 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService23V3 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService23V3 CALL_PARK()
 * @method static CallBlockingService23V3 NUMBER_PORTABILITY()
 * @method static CallBlockingService23V3 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService23V3 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService23V3 ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE()
 * @method static CallBlockingService23V3 TCUG()
 * @method static CallBlockingService23V3 RPADMISSION()
 * @EnumValueType string
 */
class CallBlockingService23V3 extends \MyCLabs\Enum\Enum
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
}

