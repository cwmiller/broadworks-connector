<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTemplateOnlyDeviceFileGetListResponse
 *
 * Response to ServiceProviderTemplateOnlyDeviceFileGetListRequest.
 *         Contains a list of template files used to support a Visual Device Management device.
 *
 * @see ServiceProviderTemplateOnlyDeviceFileGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7017","type":"sequence"}]
 */
class ServiceProviderTemplateOnlyDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName templateFileUrl
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7017
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    protected $templateFileUrl = [
        
    ];

    /**
     * Getter for templateFileUrl
     *
     * @return string[]
     */
    public function getTemplateFileUrl()
    {
        return $this->templateFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateFileUrl;
    }

    /**
     * Setter for templateFileUrl
     *
     * @param string[] $templateFileUrl
     * @return $this
     */
    public function setTemplateFileUrl(array $templateFileUrl)
    {
        $this->templateFileUrl = $templateFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateFileUrl()
    {
        $this->templateFileUrl = null;
        return $this;
    }

    /**
     * Adder for templateFileUrl
     *
     * @param string $templateFileUrl
     * @return $this
     */
    public function addTemplateFileUrl(string $templateFileUrl)
    {
        $this->templateFileUrl[] = $templateFileUrl;
        return $this;
    }
}

