<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyAssistantRequest
 *
 * Request to modify the assistant setting and the list of assistants assigned to
 * an executive user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserExecutiveModifyAssistantRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName allowOptInOut
     * @var bool|null
     */
    private $allowOptInOut = null;

    /**
     * @ElementName assistantUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $assistantUserIdList = null;

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
     * Getter for allowOptInOut
     *
     * @ElementName allowOptInOut
     * @return bool|null
     */
    public function getAllowOptInOut()
    {
        return $this->allowOptInOut;
    }

    /**
     * Setter for allowOptInOut
     *
     * @ElementName allowOptInOut
     * @param bool|null $allowOptInOut
     * @return $this
     */
    public function setAllowOptInOut($allowOptInOut)
    {
        $this->allowOptInOut = $allowOptInOut;
        return $this;
    }

    /**
     * Getter for assistantUserIdList
     *
     * @ElementName assistantUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAssistantUserIdList()
    {
        return $this->assistantUserIdList;
    }

    /**
     * Setter for assistantUserIdList
     *
     * @ElementName assistantUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $assistantUserIdList
     * @return $this
     */
    public function setAssistantUserIdList($assistantUserIdList)
    {
        $this->assistantUserIdList = $assistantUserIdList;
        return $this;
    }


}

