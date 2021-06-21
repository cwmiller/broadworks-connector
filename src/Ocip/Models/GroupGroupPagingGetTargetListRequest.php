<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetTargetListRequest
 *
 * Get a list of targets assigned to a paging group.
 *         The response is either a GroupGroupPagingGetTargetListResponse or an ErrorResponse.
 *
 * @see GroupGroupPagingGetTargetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:370","type":"sequence"}]
 */
class GroupGroupPagingGetTargetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0d36df8c109e3ea7324f79031368c661:370
     * @MinLength 1
     * @MaxLength 161
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

