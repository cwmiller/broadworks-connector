<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkDeleteRequest
 *
 * Delete a Class Mark from system. It cannot be deleted if it is in use by any users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"bd23272215266344f26a1702c47ce590:65","type":"sequence"}]
 */
class SystemClassmarkDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName classmark
     * @Type string
     * @Group bd23272215266344f26a1702c47ce590:65
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $classmark = null;

    /**
     * Getter for classmark
     *
     * @return string
     */
    public function getClassmark()
    {
        return $this->classmark instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->classmark;
    }

    /**
     * Setter for classmark
     *
     * @param string $classmark
     * @return $this
     */
    public function setClassmark($classmark)
    {
        $this->classmark = $classmark;
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

