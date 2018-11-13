<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdviceOfChargeOCSEnquiryType
 *
 * Choices for type of OCS enquiry that Advice Of Charge Services sends to OCS.
 *
 * @method static AdviceOfChargeOCSEnquiryType SERVICE_PRICE()
 * @method static AdviceOfChargeOCSEnquiryType ADVICE_OF_CHARGE()
 * @EnumValueType string
 */
class AdviceOfChargeOCSEnquiryType extends \MyCLabs\Enum\Enum
{

    const SERVICE_PRICE = 'Service Price';

    const ADVICE_OF_CHARGE = 'Advice Of Charge';


}

