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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11275","type":"sequence"}]
 */
class SystemGETSSessionPriorityMapDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName priorityLevel
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:11275
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $priorityLevel = null;

    /**
     * Getter for priorityLevel
     *
     * @return int
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @param int $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityLevel()
    {
        $this->priorityLevel = null;
        return $this;
    }
}

