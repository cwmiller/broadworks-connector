<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesAddHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesDeleteHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyZonesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyZonesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyZonesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceEmergencyZones
{

    /**
     * @param GroupEmergencyZonesAddHomeZoneListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesAddHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesAddHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesDeleteHomeZoneListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesDeleteHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesDeleteHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesGetHomeZoneListRequest $request
     * @return GroupEmergencyZonesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesGetHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesGetRequest $request
     * @return GroupEmergencyZonesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesModifyHomeZoneListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesModifyHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEmergencyZonesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEmergencyZonesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerEmergencyZonesGetRequest $request
     * @return ResellerEmergencyZonesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerEmergencyZonesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyZonesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerEmergencyZonesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerEmergencyZonesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyZonesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEmergencyZonesGetRequest $request
     * @return SystemEmergencyZonesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEmergencyZonesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEmergencyZonesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEmergencyZonesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEmergencyZonesModifyRequest $request)
    {
        return $this->call($request);
    }


}

