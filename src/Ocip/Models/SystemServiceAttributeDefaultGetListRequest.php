<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceAttributeDefaultGetListRequest
 *
 * Request to get the default attributes for a service that are used when assigning the feature.
 *         The response is either a SystemServiceAttributeDefaultGetListResponse or an ErrorResponse.
 *
 * @see SystemServiceAttributeDefaultGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16023","type":"sequence"}]
 */
class SystemServiceAttributeDefaultGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16023
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory|null
     */
    private $serviceName = null;

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\ServiceCategory $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }


}

