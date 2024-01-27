<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceFileGetResponse
 *
 * Response to UserAccessDeviceFileGetRequest.
 *
 * @see UserAccessDeviceFileGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:255","type":"sequence"}]
 */
class UserAccessDeviceFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName templateUrl
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:255
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $templateUrl = null;

    /**
     * Getter for templateUrl
     *
     * @return string
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateUrl;
    }

    /**
     * Setter for templateUrl
     *
     * @param string $templateUrl
     * @return $this
     */
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateUrl()
    {
        $this->templateUrl = null;
        return $this;
    }
}

