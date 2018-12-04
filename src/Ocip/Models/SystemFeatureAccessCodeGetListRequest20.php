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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:22293","type":"sequence"}]
 */
class SystemFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

