<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService22V5
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
 *            Enterprise Trunk Route Exhaust Busy
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *          The following type is only used in XS data mode and ignored in AS data mode:
 *            Calling Name Retrieval
 *          Replaced by: CallBlockingService23V5
 *
 * @method static CallBlockingService22V5 OCP()
 * @method static CallBlockingService22V5 EOCP()
 * @method static CallBlockingService22V5 ICP()
 * @method static CallBlockingService22V5 ACR()
 * @method static CallBlockingService22V5 SCR()
 * @method static CallBlockingService22V5 SCA()
 * @method static CallBlockingService22V5 AAC()
 * @method static CallBlockingService22V5 INTERCEPT()
 * @method static CallBlockingService22V5 PTT()
 * @method static CallBlockingService22V5 COMMUNICATION_BARRING()
 * @method static CallBlockingService22V5 SAC()
 * @method static CallBlockingService22V5 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V5 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V5 INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22V5 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService22V5 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService22V5 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService22V5 CALL_PARK()
 * @method static CallBlockingService22V5 NUMBER_PORTABILITY()
 * @method static CallBlockingService22V5 MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @method static CallBlockingService22V5 AUTOMATIC_COLLECT_CALL()
 * @method static CallBlockingService22V5 TCUG()
 * @method static CallBlockingService22V5 CALLING_NAME_RETRIEVAL()
 * @method static CallBlockingService22V5 ENTERPRISE_TRUNK_ROUTE_EXHAUST_BUSY()
 * @EnumValueType string
 */
class CallBlockingService22V5 extends \MyCLabs\Enum\Enum
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

    public const TCUG = 'TCUG';

    public const CALLING_NAME_RETRIEVAL = 'Calling Name Retrieval';

    public const ENTERPRISE_TRUNK_ROUTE_EXHAUST_BUSY = 'Enterprise Trunk Route Exhaust Busy';
}

