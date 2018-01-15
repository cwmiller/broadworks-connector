<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceFileGetResponse
 *
 * Response to UserAccessDeviceFileGetRequest.
 */
class UserAccessDeviceFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateUrl
     * @var string|null
     */
    private $templateUrl = null;

    /**
     * Getter for templateUrl
     *
     * @ElementName templateUrl
     * @return string|null
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl;
    }

    /**
     * Setter for templateUrl
     *
     * @ElementName templateUrl
     * @param string|null $templateUrl
     * @return $this
     */
    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;
        return $this;
    }


}

