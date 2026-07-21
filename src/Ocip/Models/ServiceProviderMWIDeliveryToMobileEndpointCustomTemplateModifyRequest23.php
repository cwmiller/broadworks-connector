<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23
 *
 * Modify a MWI Delivery to Mobile Endpoint Custom Template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:291","type":"sequence"}]
 */
class ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType23
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType23|null
     */
    protected $type = null;

    /**
     * @ElementName isEnabled
     * @Type bool
     * @Optional
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @var bool|null
     */
    protected $isEnabled = null;

    /**
     * @ElementName monthAbbreviations
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $monthAbbreviations = null;

    /**
     * @ElementName templateBody
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23
     * @Optional
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:291
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody23|null
     */
    protected $templateBody = null;

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
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType23
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType23 $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType23 $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getMonthAbbreviations()
    {
        return $this->monthAbbreviations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monthAbbreviations;
    }

    /**
     * Setter for monthAbbreviations
     *
     * @param string|null $monthAbbreviations
     * @return $this
     */
    public function setMonthAbbreviations($monthAbbreviations = null)
    {
        if ($monthAbbreviations === null) {
            $this->monthAbbreviations = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->monthAbbreviations = $monthAbbreviations;
        }
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

