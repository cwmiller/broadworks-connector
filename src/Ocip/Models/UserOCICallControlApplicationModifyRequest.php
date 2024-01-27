<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOCICallControlApplicationModifyRequest
 *
 * Modify which OCI Call Control Applications are enabled on a user
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2688","type":"sequence"}]
 */
class UserOCICallControlApplicationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2688
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName applicationIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2688
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $applicationIdList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for applicationIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null
     */
    public function getApplicationIdList()
    {
        return $this->applicationIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationIdList;
    }

    /**
     * Setter for applicationIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null $applicationIdList
     * @return $this
     */
    public function setApplicationIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList $applicationIdList = null)
    {
        if ($applicationIdList === null) {
            $this->applicationIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationIdList = $applicationIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationIdList()
    {
        $this->applicationIdList = null;
        return $this;
    }
}

