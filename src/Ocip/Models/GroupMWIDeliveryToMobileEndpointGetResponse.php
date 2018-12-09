<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to GroupMWIDeliveryToMobileEndpointGetRequest.
 *         
 *         The templateActivationTable contains the list of templates defined for the group.
 *         The column headings are "Enable", "Language", "Type".
 *
 * @see GroupMWIDeliveryToMobileEndpointGetRequest
 * @Groups [{"id":"26ea37e78b67054650c3445a62638977:171","type":"sequence"}]
 */
class GroupMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel
     * @Group 26ea37e78b67054650c3445a62638977:171
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName templateActivationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 26ea37e78b67054650c3445a62638977:171
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $templateActivationTable = null;

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
     * Getter for templateActivationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTemplateActivationTable()
    {
        return $this->templateActivationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateActivationTable;
    }

    /**
     * Setter for templateActivationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable
     * @return $this
     */
    public function setTemplateActivationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable)
    {
        $this->templateActivationTable = $templateActivationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateActivationTable()
    {
        $this->templateActivationTable = null;
        return $this;
    }


}

