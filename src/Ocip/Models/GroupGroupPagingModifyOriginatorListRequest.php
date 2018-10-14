<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingModifyOriginatorListRequest
 *
 * Request to modify the originator list for a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupGroupPagingModifyOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName originatorUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $originatorUserIdList = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for originatorUserIdList
     *
     * @ElementName originatorUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getOriginatorUserIdList()
    {
        return $this->originatorUserIdList;
    }

    /**
     * Setter for originatorUserIdList
     *
     * @ElementName originatorUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $originatorUserIdList
     * @return $this
     */
    public function setOriginatorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $originatorUserIdList)
    {
        $this->originatorUserIdList = $originatorUserIdList;
        return $this;
    }


}

