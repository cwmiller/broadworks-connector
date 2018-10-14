<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to GroupMWIDeliveryToMobileEndpointGetRequest.
 *         
 *         The templateActivationTable contains the list of templates defined for
 * the group.
 *         The column headings are "Enable", "Language", "Type".
 *
 * @see GroupMWIDeliveryToMobileEndpointGetRequest
 */
class GroupMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName templateActivationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $templateActivationTable = null;

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
     * Getter for templateActivationTable
     *
     * @ElementName templateActivationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTemplateActivationTable()
    {
        return $this->templateActivationTable;
    }

    /**
     * Setter for templateActivationTable
     *
     * @ElementName templateActivationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $templateActivationTable
     * @return $this
     */
    public function setTemplateActivationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable)
    {
        $this->templateActivationTable = $templateActivationTable;
        return $this;
    }


}

