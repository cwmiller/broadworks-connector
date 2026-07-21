<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse23
 *
 * Response to the GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23.
 *
 * @see GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:118","type":"sequence"}]
 */
class GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isEnabled
     * @Type bool
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:118
     * @var bool|null
     */
    protected $isEnabled = null;

    /**
     * @ElementName monthAbbreviations
     * @Type string
     * @Optional
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:118
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $monthAbbreviations = null;

    /**
     * @ElementName templateBody
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:118
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23|null
     */
    protected $templateBody = null;

    /**
     * Getter for isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @param bool $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnabled()
    {
        $this->isEnabled = null;
        return $this;
    }

    /**
     * Getter for monthAbbreviations
     *
     * @return string
     */
    public function getMonthAbbreviations()
    {
        return $this->monthAbbreviations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monthAbbreviations;
    }

    /**
     * Setter for monthAbbreviations
     *
     * @param string $monthAbbreviations
     * @return $this
     */
    public function setMonthAbbreviations($monthAbbreviations)
    {
        $this->monthAbbreviations = $monthAbbreviations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonthAbbreviations()
    {
        $this->monthAbbreviations = null;
        return $this;
    }

    /**
     * Getter for templateBody
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23
     */
    public function getTemplateBody()
    {
        return $this->templateBody instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateBody;
    }

    /**
     * Setter for templateBody
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23 $templateBody
     * @return $this
     */
    public function setTemplateBody(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23 $templateBody)
    {
        $this->templateBody = $templateBody;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateBody()
    {
        $this->templateBody = null;
        return $this;
    }
}

