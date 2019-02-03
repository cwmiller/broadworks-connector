<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetPagedSortedRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetPagedSortedResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetPagedSortedRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetPagedSortedResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstancePagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstancePagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsResponse14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetSupervisorListRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetSupervisorListResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetUnlicensedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetUnlicensedAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDistinctiveRingingRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISParametersRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceWeightedCallDistributionRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRoutingPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifySupervisorListRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallCenterGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallCenterGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAddSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterDeleteSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyCallCenterListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifySupervisedAgentListRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallCenter
{

    /**
     * @param EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest $request
     * @return EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdDefaultProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetListRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetPagedSortedRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetPagedSortedResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileGetPagedSortedRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetPagedSortedRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileGetRequest $request
     * @return EnterpriseCallCenterAgentThresholdProfileGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentThresholdProfileModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentThresholdProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentThresholdProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeGetListRequest $request
     * @return EnterpriseCallCenterAgentUnavailableCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeGetRequest $request
     * @return EnterpriseCallCenterAgentUnavailableCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request
     * @return EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetListRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeGetUsageListRequest $request
     * @return EnterpriseCallCenterCallDispositionCodeGetUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeModifyActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCallDispositionCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastAgentGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastAgentGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCurrentAndPastAgentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastAgentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCurrentAndPastCallCenterGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterCurrentAndPastDNISGetListRequest $request
     * @return EnterpriseCallCenterCurrentAndPastDNISGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterCurrentAndPastDNISGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterCurrentAndPastDNISGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingBrandingGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingBrandingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingGetRequest19 $request
     * @return EnterpriseCallCenterEnhancedReportingGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingModifyRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterGetRequest17sp4 $request
     * @return EnterpriseCallCenterGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterGetRoutingPolicyRequest $request
     * @return EnterpriseCallCenterGetRoutingPolicyResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterGetRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterGetRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterModifyRoutingPolicyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterModifyRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterModifyRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddDNISRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAddDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddSupervisorListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAddSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdDefaultProfileGetRequest $request
     * @return GroupCallCenterAgentThresholdDefaultProfileGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdDefaultProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdDefaultProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileAddAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileAddAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileDeleteAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetAvailableAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetListRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetPagedSortedRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetPagedSortedResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileGetPagedSortedRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetPagedSortedRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileGetRequest $request
     * @return GroupCallCenterAgentThresholdProfileGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentThresholdProfileModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentThresholdProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentThresholdProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeGetListRequest $request
     * @return GroupCallCenterAgentUnavailableCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeGetRequest $request
     * @return GroupCallCenterAgentUnavailableCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request
     * @return GroupCallCenterAgentUnavailableCodeSettingsGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAgentUnavailableCodeSettingsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterAgentUnavailableCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAgentUnavailableCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterBouncedCallGetRequest17 $request
     * @return GroupCallCenterBouncedCallGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterBouncedCallGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterBouncedCallModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterBouncedCallModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterBouncedCallModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetListRequest $request
     * @return GroupCallCenterCallDispositionCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetRequest $request
     * @return GroupCallCenterCallDispositionCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeGetUsageListRequest $request
     * @return GroupCallCenterCallDispositionCodeGetUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeModifyActiveListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeModifyActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCallDispositionCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterComfortMessageBypassGetRequest20 $request
     * @return GroupCallCenterComfortMessageBypassGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterComfortMessageBypassGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterComfortMessageBypassModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterComfortMessageBypassModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterComfortMessageBypassModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastAgentGetListRequest $request
     * @return GroupCallCenterCurrentAndPastAgentGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCurrentAndPastAgentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastAgentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastCallCenterGetListRequest $request
     * @return GroupCallCenterCurrentAndPastCallCenterGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCurrentAndPastCallCenterGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastCallCenterGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterCurrentAndPastDNISGetListRequest $request
     * @return GroupCallCenterCurrentAndPastDNISGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterCurrentAndPastDNISGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterCurrentAndPastDNISGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDeleteAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteDNISRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDeleteDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDeleteSupervisorListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDeleteSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDeleteSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDistinctiveRingingGetRequest $request
     * @return GroupCallCenterDistinctiveRingingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDistinctiveRingingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterDistinctiveRingingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterDistinctiveRingingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterDistinctiveRingingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingBrandingGetRequest $request
     * @return GroupCallCenterEnhancedReportingBrandingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request
     * @return GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingGetRequest19 $request
     * @return GroupCallCenterEnhancedReportingGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingModifyRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return GroupCallCenterEnhancedReportingReportTemplateGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return GroupCallCenterEnhancedReportingReportTemplateGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetActiveListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return GroupCallCenterEnhancedReportingScheduledReportGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterForcedForwardingGetRequest20 $request
     * @return GroupCallCenterForcedForwardingGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterForcedForwardingGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterForcedForwardingModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterForcedForwardingModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAgentListRequest $request
     * @return GroupCallCenterGetAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAgentPagedSortedListRequest $request
     * @return GroupCallCenterGetAgentPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAgentPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAgentPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAnnouncementRequest22 $request
     * @return GroupCallCenterGetAnnouncementResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAnnouncementRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAvailableAgentListRequest $request
     * @return GroupCallCenterGetAvailableAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAvailableAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAvailableAgentPagedSortedListRequest $request
     * @return GroupCallCenterGetAvailableAgentPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAvailableAgentPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableAgentPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAvailableSupervisorListRequest $request
     * @return GroupCallCenterGetAvailableSupervisorListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAvailableSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAvailableSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDistinctiveRingingRequest $request
     * @return GroupCallCenterGetDistinctiveRingingResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDistinctiveRingingRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDistinctiveRingingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISAgentListRequest $request
     * @return GroupCallCenterGetDNISAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDNISAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISAnnouncementRequest20 $request
     * @return GroupCallCenterGetDNISAnnouncementResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISAnnouncementRequest22 $request
     * @return GroupCallCenterGetDNISAnnouncementResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDNISAnnouncementRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISAnnouncementRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISListRequest $request
     * @return GroupCallCenterGetDNISListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDNISListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetDNISRequest $request
     * @return GroupCallCenterGetDNISResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceListRequest $request
     * @return GroupCallCenterGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstancePagedSortedListRequest $request
     * @return GroupCallCenterGetInstancePagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstancePagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstancePagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceQueueStatusRequest $request
     * @return GroupCallCenterGetInstanceQueueStatusResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstanceQueueStatusRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceQueueStatusRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceRequest22 $request
     * @return GroupCallCenterGetInstanceResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceStatisticsReportingRequest17sp1 $request
     * @return GroupCallCenterGetInstanceStatisticsReportingResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstanceStatisticsReportingRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsReportingRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceStatisticsRequest14sp9 $request
     * @return GroupCallCenterGetInstanceStatisticsResponse14sp9
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetInstanceStatisticsRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceStatisticsRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetRequest17sp4 $request
     * @return GroupCallCenterGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetRoutingPolicyRequest $request
     * @return GroupCallCenterGetRoutingPolicyResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetSupervisorListRequest16 $request
     * @return GroupCallCenterGetSupervisorListResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetSupervisorListRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetSupervisorListRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetUnlicensedAgentListRequest $request
     * @return GroupCallCenterGetUnlicensedAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetUnlicensedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetUnlicensedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterHolidayServiceGetRequest20 $request
     * @return GroupCallCenterHolidayServiceGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterHolidayServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterHolidayServiceModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterHolidayServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterHolidayServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyAnnouncementRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDistinctiveRingingRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyDistinctiveRingingRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDistinctiveRingingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISAnnouncementRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISParametersRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyDNISParametersRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISParametersRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyDNISRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyInstanceStatisticsReportingRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceWeightedCallDistributionRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyInstanceWeightedCallDistributionRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceWeightedCallDistributionRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyRoutingPolicyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyRoutingPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyRoutingPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifySupervisorListRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifySupervisorListRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifySupervisorListRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceGetRequest20 $request
     * @return GroupCallCenterNightServiceGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterNightServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterNightServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowGetRequest20 $request
     * @return GroupCallCenterOverflowGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterOverflowGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterOverflowModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeGetListRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeGetRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeSettingsGetRequest $request
     * @return GroupCallCenterQueueCallDispositionCodeSettingsGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeSettingsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueCallDispositionCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueStatusNotificationGetRequest $request
     * @return GroupCallCenterQueueStatusNotificationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueStatusNotificationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueStatusNotificationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueStatusNotificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueStatusNotificationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueThresholdsGetRequest $request
     * @return GroupCallCenterQueueThresholdsGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueThresholdsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterQueueThresholdsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterQueueThresholdsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterQueueThresholdsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallGetRequest20 $request
     * @return GroupCallCenterStrandedCallGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterStrandedCallGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterStrandedCallModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallUnavailableGetRequest20 $request
     * @return GroupCallCenterStrandedCallUnavailableGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterStrandedCallUnavailableGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterStrandedCallUnavailableModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterStrandedCallUnavailableModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterStrandedCallUnavailableModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallCenterGetRequest $request
     * @return ResellerCallCenterGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallCenterGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallCenterGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallCenterModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingBrandingGetRequest $request
     * @return SystemCallCenterEnhancedReportingBrandingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingBrandingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingBrandingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingBrandingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingBrandingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingDataTemplateGetListRequest $request
     * @return SystemCallCenterEnhancedReportingDataTemplateGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingDataTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingDataTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingGetRequest $request
     * @return SystemCallCenterEnhancedReportingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingReportTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingReportTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateGetListRequest $request
     * @return SystemCallCenterEnhancedReportingReportTemplateGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingReportTemplateGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateGetRequest $request
     * @return SystemCallCenterEnhancedReportingReportTemplateGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingReportTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingReportTemplateModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingReportTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingReportTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetActiveListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetActiveListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest $request
     * @return SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledTaskParametersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterGetRequest21 $request
     * @return SystemCallCenterGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallCenterModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallCenterModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallCenterModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAddSupervisedAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterAddSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAddSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAgentDetailsGetRequest $request
     * @return UserCallCenterAgentDetailsGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterAgentDetailsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentDetailsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterAgentSignOutRequest $request
     * @return UserCallCenterAgentSignOutResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterAgentSignOutRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterAgentSignOutRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterCallDispositionCodeGetAvailableListRequest $request
     * @return UserCallCenterCallDispositionCodeGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterCallDispositionCodeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterCallDispositionCodeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterDeleteSupervisedAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterDeleteSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterDeleteSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest $request
     * @return UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterEnhancedReportingReportTemplateParamInfoGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterEnhancedReportingScheduledReportDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportGetRequest $request
     * @return UserCallCenterEnhancedReportingScheduledReportGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterEnhancedReportingScheduledReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterEnhancedReportingScheduledReportModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterEnhancedReportingScheduledReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterEnhancedReportingScheduledReportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAgentSupervisorListRequest $request
     * @return UserCallCenterGetAgentSupervisorListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetAgentSupervisorListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAgentSupervisorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAvailableCallCenterListRequest $request
     * @return UserCallCenterGetAvailableCallCenterListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetAvailableCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAvailableCallCenterPagedSortedListRequest $request
     * @return UserCallCenterGetAvailableCallCenterPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetAvailableCallCenterPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableCallCenterPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetAvailableDNISListRequest $request
     * @return UserCallCenterGetAvailableDNISListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetAvailableDNISListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetAvailableDNISListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetRequest19 $request
     * @return UserCallCenterGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetSupervisedAgentListRequest $request
     * @return UserCallCenterGetSupervisedAgentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetSupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterGetSupervisorCallCenterListRequest $request
     * @return UserCallCenterGetSupervisorCallCenterListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterGetSupervisorCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterGetSupervisorCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifyCallCenterListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterModifyCallCenterListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyCallCenterListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifyRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterModifyRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifyRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterModifySupervisedAgentListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterModifySupervisedAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterModifySupervisedAgentListRequest $request)
    {
        return $this->call($request);
    }


}

