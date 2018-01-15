<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkDeleteRequest
 *
 * Delete a Class Mark from system. It cannot be deleted if it is in use by any
 * users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName classmark
     * @var string|null
     */
    private $classmark = null;

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

