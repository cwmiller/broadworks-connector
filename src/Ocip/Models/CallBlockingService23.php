<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService23
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
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *
 * @method static CallBlockingService23 OCP()
 * @method static CallBlockingService23 EOCP()
 * @method static CallBlockingService23 ICP()
 * @method static CallBlockingService23 ACR()
 * @method static CallBlockingService23 SCR()
 * @method static CallBlockingService23 SCA()
 * @method static CallBlockingService23 AAC()
 * @method static CallBlockingService23 INTERCEPT()
 * @method static CallBlockingService23 PTT()
 * @method static CallBlockingService23 COMMUNICATION_BARRING()
 * @method static CallBlockingService23 SAC()
 * @method static CallBlockingService23 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService23 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService23 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService23 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService23 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService23 CALL_PARK()
 * @method static CallBlockingService23 NUMBER_PORTABILITY()
 * @method static CallBlockingService23 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService23 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService23 ENTERPRISE_TRUNK_ROUTE_EXHAUST_UNREACHABLE()
 * @EnumValueType string
 */
class CallBlockingService23 extends \MyCLabs\Enum\Enum
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


}

