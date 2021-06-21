<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest23V6;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest23V8;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetResponse23V8;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeModifyRequest22V4;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaDeprecated24AS
{

    /**
     * @param ServiceProviderPortalPasscodeRulesGetRequest19 $request
     * @return ServiceProviderPortalPasscodeRulesGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPortalPasscodeRulesGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPortalPasscodeRulesGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeAddRequest23V6 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSIPDeviceTypeAddRequest23V6(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest23V6 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeGetRequest23V8 $request
     * @return SystemSIPDeviceTypeGetResponse23V8
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSIPDeviceTypeGetRequest23V8(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest23V8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeModifyRequest22V4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSIPDeviceTypeModifyRequest22V4(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeModifyRequest22V4 $request)
    {
        return $this->call($request);
    }


}

