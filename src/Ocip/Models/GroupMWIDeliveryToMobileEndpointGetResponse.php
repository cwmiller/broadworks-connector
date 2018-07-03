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
     * @var string|null
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
     * @return string|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param string|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel($useSettingLevel)
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
    public function setTemplateActivationTable($templateActivationTable)
    {
        $this->templateActivationTable = $templateActivationTable;
        return $this;
    }


}

