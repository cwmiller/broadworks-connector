<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingModifyTargetListRequest
 *
 * Request to modify the target list for a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:449","type":"sequence"}]
 */
class GroupGroupPagingModifyTargetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0d36df8c109e3ea7324f79031368c661:449
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName targetUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 0d36df8c109e3ea7324f79031368c661:449
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $targetUserIdList = null;

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
     * Getter for targetUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getTargetUserIdList()
    {
        return $this->targetUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->targetUserIdList;
    }

    /**
     * Setter for targetUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $targetUserIdList
     * @return $this
     */
    public function setTargetUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $targetUserIdList = null)
    {
        if ($targetUserIdList === null) {
            $this->targetUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->targetUserIdList = $targetUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTargetUserIdList()
    {
        $this->targetUserIdList = null;
        return $this;
    }


}

