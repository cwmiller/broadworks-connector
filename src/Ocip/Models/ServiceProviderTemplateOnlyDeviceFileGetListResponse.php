<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTemplateOnlyDeviceFileGetListResponse
 *
 * Response to ServiceProviderTemplateOnlyDeviceFileGetListRequest.
 *         Contains a list of template files used to support a Visual Device Management device.
 *
 * @see ServiceProviderTemplateOnlyDeviceFileGetListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:6941","type":"sequence"}]
 */
class ServiceProviderTemplateOnlyDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateFileUrl
     * @Type string
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6941
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    protected $templateFileUrl = array(
        
    );

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

