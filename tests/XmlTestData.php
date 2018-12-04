<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingDepartmentPermissionsModify;
use CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissionsModify;
use DOMDocument;

class XmlTestData
{
    /**
     * @return DOMDocument
     */
    public static function LoginResponse14sp4Xml()
    {
        $document = new DOMDocument();
        @$document->loadXML(file_get_contents(__DIR__ . '/LoginResponse14sp4.xml'));

        return $document;
    }
    
    public static function groupOutgoingCallingPlanRedirectingModifyListRequest()
    {
        $departmentKey = (new GroupDepartmentKey())
            ->setServiceProviderId('Service Provider ID')
            ->setGroupId('Group ID')
            ->setName('Department Name');

        $permissions = (new OutgoingCallingPlanRedirectingPermissionsModify())
            ->setGroup(true)
            ->setLocal(true)
            ->setTollFree(true)
            ->setToll(true)
            ->setInternational(false)
            ->setOperatorAssisted(false)
            ->setChargeableDirectoryAssisted(false)
            ->setSpecialServicesI(false)
            ->setSpecialServicesII(false)
            ->setPremiumServicesI(false)
            ->setPremiumServicesII(false)
            ->setCasual(false)
            ->setUrlDialing(false)
            ->setUnknown(false);

        $departmentPermissions = (new OutgoingCallingPlanRedirectingDepartmentPermissionsModify())
            ->setDepartmentKey($departmentKey)
            ->setPermissions($permissions);

        $request = (new GroupOutgoingCallingPlanRedirectingModifyListRequest())
            ->setServiceProviderId('Service Provider ID')
            ->setGroupId('Group ID')
            ->addDepartmentPermissions($departmentPermissions);

        return $request;
    }
}