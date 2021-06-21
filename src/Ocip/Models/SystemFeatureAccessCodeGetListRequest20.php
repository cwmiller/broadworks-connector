<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFeatureAccessCodeGetListRequest20
 *
 * Request to get list of default Feature Access Codes defined on system
 *         level.
 *         The response is either SystemFeatureAccessCodeGetListResponse20 or
 *         ErrorResponse.
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *         Replaced by: SystemFeatureAccessCodeGetListRequest21
 *
 * @see SystemFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 * @see SystemFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26768","type":"sequence"}]
 */
class SystemFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

