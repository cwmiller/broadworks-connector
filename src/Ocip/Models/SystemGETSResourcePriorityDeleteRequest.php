<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityDeleteRequest
 *
 * Delete a GETS Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemGETSResourcePriorityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityValue
     * @var string|null
     */
    private $priorityValue = null;

    /**
     * Getter for priorityValue
     *
     * @ElementName priorityValue
     * @return string|null
     */
    public function getPriorityValue()
    {
        return $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @ElementName priorityValue
     * @param string|null $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }


}

