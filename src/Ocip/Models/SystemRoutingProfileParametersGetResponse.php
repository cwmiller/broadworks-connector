<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileParametersGetResponse
 *
 * Response to SystemRoutingProfileParametersGetRequest.
 *         Contains a list of Routing Profile parameters.
 *
 * @see SystemRoutingProfileParametersGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15757","type":"sequence"}]
 */
class SystemRoutingProfileParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enablePermissiveRouting
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:15757
     * @var bool|null
     */
    protected $enablePermissiveRouting = null;

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

