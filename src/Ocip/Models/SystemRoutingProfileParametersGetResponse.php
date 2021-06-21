<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileParametersGetResponse
 *
 * Response to SystemRoutingProfileParametersGetRequest.
 *         Contains a list of Routing Profile parameters.
 *
 * @see SystemRoutingProfileParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15544","type":"sequence"}]
 */
class SystemRoutingProfileParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enablePermissiveRouting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15544
     * @var bool|null
     */
    private $enablePermissiveRouting = null;

    /**
     * Getter for enablePermissiveRouting
     *
     * @return bool
     */
    public function getEnablePermissiveRouting()
    {
        return $this->enablePermissiveRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePermissiveRouting;
    }

    /**
     * Setter for enablePermissiveRouting
     *
     * @param bool $enablePermissiveRouting
     * @return $this
     */
    public function setEnablePermissiveRouting($enablePermissiveRouting)
    {
        $this->enablePermissiveRouting = $enablePermissiveRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePermissiveRouting()
    {
        $this->enablePermissiveRouting = null;
        return $this;
    }


}

