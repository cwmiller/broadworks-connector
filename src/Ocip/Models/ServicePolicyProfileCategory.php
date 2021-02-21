<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyProfileCategory
 *
 * The service policy profile categories.
 *
 * @method static ServicePolicyProfileCategory CALL_PROCESSING_PARAMETERS()
 * @method static ServicePolicyProfileCategory CALL_TYPES_MAPPING()
 * @method static ServicePolicyProfileCategory CONFIGURABLE_TREATMENTS()
 * @method static ServicePolicyProfileCategory EXTERNAL_EMERGENCY_ROUTING_PARAMETERS()
 * @method static ServicePolicyProfileCategory GETS()
 * @method static ServicePolicyProfileCategory PROVISIONING_VALIDATION()
 * @method static ServicePolicyProfileCategory SERVICES()
 * @method static ServicePolicyProfileCategory SERVICE_CODES()
 * @EnumValueType string
 */
class ServicePolicyProfileCategory extends \MyCLabs\Enum\Enum
{

    const CALL_PROCESSING_PARAMETERS = 'Call Processing Parameters';

    const CALL_TYPES_MAPPING = 'Call Types Mapping';

    const CONFIGURABLE_TREATMENTS = 'Configurable Treatments';

    const EXTERNAL_EMERGENCY_ROUTING_PARAMETERS = 'External Emergency Routing Parameters';

    const GETS = 'GETS';

    const PROVISIONING_VALIDATION = 'Provisioning Validation';

    const SERVICES = 'Services';

    const SERVICE_CODES = 'Service Codes';


}

