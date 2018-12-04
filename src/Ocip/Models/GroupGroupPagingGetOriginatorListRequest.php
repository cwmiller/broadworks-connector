<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetOriginatorListRequest
 *
 * Get a list of originators assigned to a paging group.
 *         The response is either a
 *         GroupGroupPagingGetOriginatorListResponse or an ErrorResponse.
 *
 * @see GroupGroupPagingGetOriginatorListResponse
 * @see ErrorResponse
 * @Groups [{"id":"76de8409eddf3e150e3b79f9c41e6cc0:328","type":"sequence"}]
 */
class GroupGroupPagingGetOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 76de8409eddf3e150e3b79f9c41e6cc0:328
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

