<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSReservedFeatureAccessCodeDeleteRequest
 *
 * Delete a GETS reserved FAC.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11115","type":"sequence"}]
 */
class SystemGETSReservedFeatureAccessCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName code
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11115
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $code = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }
}

