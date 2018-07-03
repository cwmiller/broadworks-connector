<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSSessionPriorityMapDeleteRequest
 *
 * Delete a GETS Session Priority map.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSSessionPriorityMapDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityLevel
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * Getter for priorityLevel
     *
     * @ElementName priorityLevel
     * @return int|null
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @ElementName priorityLevel
     * @param int|null $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }


}

