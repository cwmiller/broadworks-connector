<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTemplateOnlyDeviceFileGetListResponse
 *
 * Response to GroupTemplateOnlyDeviceFileGetListRequest.
 *         Contains a list of template files used to support a Visual Device Management device.
 *
 * @see GroupTemplateOnlyDeviceFileGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8147","type":"sequence"}]
 */
class GroupTemplateOnlyDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName templateFileUrl
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:8147
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

