<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkGetResponse
 *
 * Response to UserClassmarkGetRequest.
 *         Contains the Class Mark data
 *
 * @see UserClassmarkGetRequest
 */
class UserClassmarkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmark
     * @Type string
     * @var string|null
     */
    private $classmark = null;

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

