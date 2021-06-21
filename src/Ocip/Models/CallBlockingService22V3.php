<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService22V3
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
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *          Replaced by: CallBlockingService22V3
 *
 * @method static CallBlockingService22V3 OCP()
 * @method static CallBlockingService22V3 EOCP()
 * @method static CallBlockingService22V3 ICP()
 * @method static CallBlockingService22V3 ACR()
 * @method static CallBlockingService22V3 SCR()
 * @method static CallBlockingService22V3 SCA()
 * @method static CallBlockingService22V3 AAC()
 * @method static CallBlockingService22V3 INTERCEPT()
 * @method static CallBlockingService22V3 PTT()
 * @method static CallBlockingService22V3 COMMUNICATION_BARRING()
 * @method static CallBlockingService22V3 SAC()
 * @method static CallBlockingService22V3 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V3 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V3 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V3 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService22V3 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService22V3 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService22V3 CALL_PARK()
 * @method static CallBlockingService22V3 NUMBER_PORTABILITY()
 * @method static CallBlockingService22V3 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService22V3 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService22V3 TCUG()
 * @EnumValueType string
 */
class CallBlockingService22V3 extends \MyCLabs\Enum\Enum
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

    const TCUG = 'TCUG';


}

