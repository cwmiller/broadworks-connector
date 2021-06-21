<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTemplateOnlyDeviceFileGetListResponse
 *
 * Response to SystemTemplateOnlyDeviceFileGetListRequest.
 *         Contains a list of template files used to support a Visual Device Management device.
 *
 * @see SystemTemplateOnlyDeviceFileGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18515","type":"sequence"}]
 */
class SystemTemplateOnlyDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateFileUrl
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18515
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    private $templateFileUrl = array(
        
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

