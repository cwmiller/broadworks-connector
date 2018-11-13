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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName templateActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    private $templateActivation = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSettingLevel()
    {
        $this->useSettingLevel = null;
        return $this;
    }

    /**
     * Getter for templateActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    public function getTemplateActivation()
    {
        return $this->templateActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateActivation;
    }

    /**
     * Setter for templateActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[] $templateActivation
     * @return $this
     */
    public function setTemplateActivation(array $templateActivation)
    {
        $this->templateActivation = $templateActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateActivation()
    {
        $this->templateActivation = null;
        return $this;
    }

    /**
     * Adder for templateActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation $templateActivation
     * @return $this
     */
    public function addTemplateActivation($templateActivation)
    {
        $this->templateActivation[] = $templateActivation;
        return $this;
    }


}

