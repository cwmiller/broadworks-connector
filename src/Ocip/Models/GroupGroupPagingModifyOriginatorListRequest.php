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
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:444","type":"sequence"}]
 */
class GroupGroupPagingModifyOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0d36df8c109e3ea7324f79031368c661:444
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName originatorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 0d36df8c109e3ea7324f79031368c661:444
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $originatorUserIdList = null;

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

    /**
     * Getter for originatorUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getOriginatorUserIdList()
    {
        return $this->originatorUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatorUserIdList;
    }

    /**
     * Setter for originatorUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $originatorUserIdList
     * @return $this
     */
    public function setOriginatorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $originatorUserIdList = null)
    {
        if ($originatorUserIdList === null) {
            $this->originatorUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatorUserIdList = $originatorUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatorUserIdList()
    {
        $this->originatorUserIdList = null;
        return $this;
    }


}

