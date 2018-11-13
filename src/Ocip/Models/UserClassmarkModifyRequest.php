<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkModifyRequest
 *
 * Modify the user level data associated with Class Mark.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserClassmarkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName classmark
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $classmark = null;

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
     * Getter for classmark
     *
     * @return string|null
     */
    public function getClassmark()
    {
        return $this->classmark instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->classmark;
    }

    /**
     * Setter for classmark
     *
     * @param string|null $classmark
     * @return $this
     */
    public function setClassmark($classmark)
    {
        if ($classmark === null) {
            $this->classmark = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->classmark = $classmark;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClassmark()
    {
        $this->classmark = null;
        return $this;
    }


}

