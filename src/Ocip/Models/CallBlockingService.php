<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService
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
 *          The following types are only used in XS data mode:
 *       Incoming Communication Barring
 *       Hierarchical Communication Barring
 *       Incoming Hierarchical Communication Barring
 *         
 *         Replaced by: CallBlockingService22
 *
 * @method static CallBlockingService OCP()
 * @method static CallBlockingService EOCP()
 * @method static CallBlockingService ICP()
 * @method static CallBlockingService ACR()
 * @method static CallBlockingService SCR()
 * @method static CallBlockingService SCA()
 * @method static CallBlockingService AAC()
 * @method static CallBlockingService INTERCEPT()
 * @method static CallBlockingService PTT()
 * @method static CallBlockingService COMMUNICATION_BARRING()
 * @method static CallBlockingService SAC()
 * @method static CallBlockingService INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService CALL_PARK()
 * @method static CallBlockingService NUMBER_PORTABILITY()
 * @EnumValueType string
 */
class CallBlockingService extends \MyCLabs\Enum\Enum
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


}

