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
 */
class UserOCICallControlApplicationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName applicationIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationIdList = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for applicationIdList
     *
     * @ElementName applicationIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getApplicationIdList()
    {
        return $this->applicationIdList;
    }

    /**
     * Setter for applicationIdList
     *
     * @ElementName applicationIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOCICallControlApplicationIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $applicationIdList
     * @return $this
     */
    public function setApplicationIdList($applicationIdList)
    {
        $this->applicationIdList = $applicationIdList;
        return $this;
    }


}

