<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortByServiceStatus
 *
 * The sort criteria specifies the service status as the column for
 *             the sort, whether the sort is ascending or descending, and whether the
 *             sort is case sensitive.
 *             This sort criteria data type is only intended to be used by the commands 
 *             introduced by BW-2301. 
 *             The commands are EnterpriseUserCallWaitingSettingsGetListRequest, GroupUserCallWaitingSettingsGetListRequest, 
 *             EnterpriseUserHotelingGuestSettingsGetListRequest, and GroupUserHotelingGuestSettingsGetListRequest.
 *
 * @see EnterpriseUserCallWaitingSettingsGetListRequest
 * @see GroupUserCallWaitingSettingsGetListRequest
 * @see EnterpriseUserHotelingGuestSettingsGetListRequest
 * @see GroupUserHotelingGuestSettingsGetListRequest
 * @Groups [{"id":"448476806043edb64fb9ce2b7f95cb59:478","type":"sequence"}]
 */
class SortByServiceStatus extends SortCriteria
{


}

