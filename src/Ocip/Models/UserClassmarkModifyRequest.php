<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkModifyRequest
 *
 * Modify the user level data associated with Class Mark.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserClassmarkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName classmark
     * @var string|null
     */
    private $classmark = null;

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
     * Getter for classmark
     *
     * @ElementName classmark
     * @return string|null
     */
    public function getClassmark()
    {
        return $this->classmark;
    }

    /**
     * Setter for classmark
     *
     * @ElementName classmark
     * @param string|null $classmark
     * @return $this
     */
    public function setClassmark($classmark)
    {
        $this->classmark = $classmark;
        return $this;
    }


}

