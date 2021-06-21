<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService23V2
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
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *
 * @method static CallBlockingService23V2 OCP()
 * @method static CallBlockingService23V2 EOCP()
 * @method static CallBlockingService23V2 ICP()
 * @method static CallBlockingService23V2 ACR()
 * @method static CallBlockingService23V2 SCR()
 * @method static CallBlockingService23V2 SCA()
 * @method static CallBlockingService23V2 AAC()
 * @method static CallBlockingService23V2 INTERCEPT()
 * @method static CallBlockingService23V2 PTT()
 * @method static CallBlockingService23V2 COMMUNICATION_BARRING()
 * @method static CallBlockingService23V2 SAC()
 * @method static CallBlockingService23V2 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V2 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V2 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23V2 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService23V2 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService23V2 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService23V2 CALL_PARK()
 * @method static CallBlockingService23V2 NUMBER_PORTABILITY()
 * @method static CallBlockingService23V2 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService23V2 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService23V2 ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE()
 * @method static CallBlockingService23V2 TCUG()
 * @EnumValueType string
 */
class CallBlockingService23V2 extends \MyCLabs\Enum\Enum
{

    const OCP = 'OCP';

    const EOCP = 'EOCP';

    const ICP = 'ICP';

    const ACR = 'ACR';

    const SCR = 'SCR';

    const SCA = 'SCA';

    const AAC = 'AAC';

    const INTERCEPT = 'Intercept';

    const PTT = 'PTT';

    const COMMUNICATION_BARRING = 'Communication Barring';

    const SAC = 'SAC';

    const INCOMING_COMMUNICATION_BARRING = 'Incoming Communication Barring';

    const HIERARCHICAL_COMMUNICATION_BARRING = 'Hierarchical Communication Barring';

    const INCOMING_HIERARCHICAL_COMMUNICATION_BARRING = 'Incoming Hierarchical Communication Barring';

    const BROADWORKS_MOBILITY_DENY_ORIGINATIONS = 'BroadWorks Mobility Deny Originations';

    const BROADWORKS_MOBILITY_DENY_TERMINATIONS = 'BroadWorks Mobility Deny Terminations';

    const ENTERPRISE_TRUNK_ROUTE_EXHAUST = 'Enterprise Trunk Route Exhaust';

    const CALL_PARK = 'Call Park';

    const NUMBER_PORTABILITY = 'Number Portability';

    const MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS = 'Maximum Concurrent Terminating Alerting Requests';

    const AUTOMATIC_COLLECT_CALL = 'Automatic Collect Call';

    const ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE = 'Enterprise Trunk Route Exhaust Unreachable';

    const TCUG = 'TCUG';


}

