<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterprisePreAlertingAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePreAlertingAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePreAlertingAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementAddCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePreAlertingAnnouncement
{

    /**
     * @param EnterprisePreAlertingAnnouncementGetRequest $request
     * @return EnterprisePreAlertingAnnouncementGetResponse|ErrorResponse
     */
    public function enterprisePreAlertingAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterprisePreAlertingAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterprisePreAlertingAnnouncementModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterprisePreAlertingAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterprisePreAlertingAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementGetRequest20 $request
     * @return GroupPreAlertingAnnouncementGetResponse20|ErrorResponse
     */
    public function groupPreAlertingAnnouncementGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPreAlertingAnnouncementModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementAddCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementAddCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetCriteriaRequest21 $request
     * @return UserPreAlertingAnnouncementGetCriteriaResponse21|ErrorResponse
     */
    public function userPreAlertingAnnouncementGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetRequest20 $request
     * @return UserPreAlertingAnnouncementGetResponse20|ErrorResponse
     */
    public function userPreAlertingAnnouncementGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest20 $request)
    {
        return $this->call($request);
    }


}

