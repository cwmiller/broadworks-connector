<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortByForwardedToNumber
 *
 * The sort criteria specifies the forwarded to phone number as the column for
 *                 the sort, whether the sort is ascending or descending, and
 * whether the
 *                 sort is case sensitive.
 *                 This sort criteria data type is only intended to be used by the
 * commands 
 *                 introduced by BW-2301. 
 *                 The commands are
 * EnterpriseUserCallForwardingSettingsGetListRequest 
 *                 and GroupUserCallForwardingSettingsGetListRequest.
 *                 The following Call Forwarding services are compatible for this
 * search:
 *                 Call Forwarding Always, Call Forwarding Always Secondary, Call
 * Forwarding Busy,
 *                 Call Forwarding No Answer, Call Forwarding Not Reachable, Call
 * Forwarding Selective.
 *
 * @see EnterpriseUserCallForwardingSettingsGetListRequest
 * @see GroupUserCallForwardingSettingsGetListRequest
 */
class SortByForwardedToNumber extends SortCriteria
{


}

