<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityDeleteRequest
 *
 * Delete a GETS Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11195","type":"sequence"}]
 */
class SystemGETSResourcePriorityDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName priorityValue
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11195
     * @MinLength 3
     * @MaxLength 80
     * @var string|null
     */
    protected $priorityValue = null;

    /**
     * Getter for priorityValue
     *
     * @return string
     */
    public function getPriorityValue()
    {
        return $this->priorityValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @param string $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityValue()
    {
        $this->priorityValue = null;
        return $this;
    }
}

