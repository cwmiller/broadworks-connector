<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMWIDeliveryToMobileEndpointModifyRequest
 *
 * Modify the group level MWI custom notifications settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         If the request is executed by a group administrator and modifies the
 * useSettingLevel, the request is rejected.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupMWIDeliveryToMobileEndpointModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName templateActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    private $templateActivation = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for templateActivation
     *
     * @ElementName templateActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    public function getTemplateActivation()
    {
        return $this->templateActivation;
    }

    /**
     * Setter for templateActivation
     *
     * @ElementName templateActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[] $templateActivation
     * @return $this
     */
    public function setTemplateActivation(array $templateActivation)
    {
        $this->templateActivation = $templateActivation;
        return $this;
    }

    /**
     * Adder for templateActivation
     *
     * @ElementName templateActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation $templateActivation
     * @return $this
     */
    public function addTemplateActivation($templateActivation)
    {
        $this->templateActivation []= $templateActivation;
        return $this;
    }


}

