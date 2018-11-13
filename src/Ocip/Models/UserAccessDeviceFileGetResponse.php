<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceFileGetResponse
 *
 * Response to UserAccessDeviceFileGetRequest.
 *
 * @see UserAccessDeviceFileGetRequest
 */
class UserAccessDeviceFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateUrl
     * @Type string
     * @var string|null
     */
    private $templateUrl = null;

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

