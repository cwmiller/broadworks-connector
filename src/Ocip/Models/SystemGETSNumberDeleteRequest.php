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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11036","type":"sequence"}]
 */
class SystemGETSNumberDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName number
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11036
     * @MinLength 4
     * @MaxLength 10
     * @var string|null
     */
    protected $number = null;

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

