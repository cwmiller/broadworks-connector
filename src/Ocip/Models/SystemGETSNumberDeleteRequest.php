<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSNumberDeleteRequest
 *
 * Delete a GETS reserved Number.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSNumberDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName number
     * @Type string
     * @var string|null
     */
    private $number = null;

    /**
     * Getter for number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->number;
    }

    /**
     * Setter for number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumber()
    {
        $this->number = null;
        return $this;
    }


}

