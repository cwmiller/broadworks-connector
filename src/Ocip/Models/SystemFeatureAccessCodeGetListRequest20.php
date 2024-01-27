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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27174","type":"sequence"}]
 */
class SystemFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

