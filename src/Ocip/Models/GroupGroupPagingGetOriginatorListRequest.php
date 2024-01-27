<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetOriginatorListRequest
 *
 * Get a list of originators assigned to a paging group.
 *         The response is either a GroupGroupPagingGetOriginatorListResponse or an ErrorResponse.
 *
 * @see GroupGroupPagingGetOriginatorListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:335","type":"sequence"}]
 */
class GroupGroupPagingGetOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:335
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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

