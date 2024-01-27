<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFeatureAccessCodeGetListRequest21
 *
 * Request to get list of default Feature Access Codes defined on system
 *         level.
 *         The response is either SystemFeatureAccessCodeGetListResponse21 or
 *         ErrorResponse.
 *
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *
 * @see SystemFeatureAccessCodeGetListResponse21
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10285","type":"sequence"}]
 */
class SystemFeatureAccessCodeGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

