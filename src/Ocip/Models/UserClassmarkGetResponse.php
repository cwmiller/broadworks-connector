<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkGetResponse
 *
 * Response to UserClassmarkGetRequest.
 *         Contains the Class Mark data
 */
class UserClassmarkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

