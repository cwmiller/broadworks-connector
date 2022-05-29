<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkGetResponse
 *
 * Response to UserClassmarkGetRequest.
 *         Contains the Class Mark data
 *
 * @see UserClassmarkGetRequest
 * @Groups [{"id":"0d0e878cbc947aebb19ad489b2ffef11:188","type":"sequence"}]
 */
class UserClassmarkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmark
     * @Type string
     * @Optional
     * @Group 0d0e878cbc947aebb19ad489b2ffef11:188
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

