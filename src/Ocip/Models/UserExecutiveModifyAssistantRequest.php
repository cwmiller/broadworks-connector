<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyAssistantRequest
 *
 * Request to modify the assistant setting and the list of assistants assigned to an executive user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:354","type":"sequence"}]
 */
class UserExecutiveModifyAssistantRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:354
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName allowOptInOut
     * @Type bool
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:354
     * @var bool|null
     */
    protected $allowOptInOut = null;

    /**
     * @ElementName assistantUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:354
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $assistantUserIdList = null;

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
     * Getter for allowOptInOut
     *
     * @return bool
     */
    public function getAllowOptInOut()
    {
        return $this->allowOptInOut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOptInOut;
    }

    /**
     * Setter for allowOptInOut
     *
     * @param bool $allowOptInOut
     * @return $this
     */
    public function setAllowOptInOut($allowOptInOut)
    {
        $this->allowOptInOut = $allowOptInOut;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOptInOut()
    {
        $this->allowOptInOut = null;
        return $this;
    }

    /**
     * Getter for assistantUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAssistantUserIdList()
    {
        return $this->assistantUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assistantUserIdList;
    }

    /**
     * Setter for assistantUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $assistantUserIdList
     * @return $this
     */
    public function setAssistantUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $assistantUserIdList = null)
    {
        if ($assistantUserIdList === null) {
            $this->assistantUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->assistantUserIdList = $assistantUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssistantUserIdList()
    {
        $this->assistantUserIdList = null;
        return $this;
    }


}

