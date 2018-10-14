<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryModifyRequest
 *
 * Modify the user level data associated with Calling Party Category.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallingPartyCategoryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName category
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null
     */
    private $category = null;

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
     * Getter for category
     *
     * @ElementName category
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category
     *
     * @ElementName category
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null $category
     * @return $this
     */
    public function setCategory(\CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection $category)
    {
        $this->category = $category;
        return $this;
    }


}

