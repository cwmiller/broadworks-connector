<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortByServiceStatus
 *
 * The sort criteria specifies the service status as the column for
 *             the sort, whether the sort is ascending or descending, and whether
 * the
 *             sort is case sensitive.
 *             This sort criteria data type is only intended to be used by the
 * commands 
 *             introduced by BW-2301. 
 *             The commands are EnterpriseUserCallWaitingSettingsGetListRequest,
 * GroupUserCallWaitingSettingsGetListRequest, 
 *             EnterpriseUserHotelingGuestSettingsGetListRequest, and
 * GroupUserHotelingGuestSettingsGetListRequest.
 */
class SortByServiceStatus extends SortCriteria
{


}

