<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService22V2
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
 * @method static CallBlockingService22V2 OCP()
 * @method static CallBlockingService22V2 EOCP()
 * @method static CallBlockingService22V2 ICP()
 * @method static CallBlockingService22V2 ACR()
 * @method static CallBlockingService22V2 SCR()
 * @method static CallBlockingService22V2 SCA()
 * @method static CallBlockingService22V2 AAC()
 * @method static CallBlockingService22V2 INTERCEPT()
 * @method static CallBlockingService22V2 PTT()
 * @method static CallBlockingService22V2 COMMUNICATION_BARRING()
 * @method static CallBlockingService22V2 SAC()
 * @method static CallBlockingService22V2 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V2 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V2 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V2 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService22V2 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService22V2 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService22V2 CALL_PARK()
 * @method static CallBlockingService22V2 NUMBER_PORTABILITY()
 * @method static CallBlockingService22V2 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService22V2 AUTOMATIC_COLLECT_CALL()
 * @EnumValueType string
 */
class CallBlockingService22V2 extends \MyCLabs\Enum\Enum
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
}

