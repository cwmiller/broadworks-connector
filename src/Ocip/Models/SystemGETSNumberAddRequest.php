<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSNumberAddRequest
 *
 * Add a GETS reserved Number.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11018","type":"sequence"}]
 */
class SystemGETSNumberAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName number
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11018
     * @MinLength 4
     * @MaxLength 10
     * @var string|null
     */
    protected $number = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GETSNumberType
     * @Group da582a1f8028404e70d260cf1f891033:11018
     * @var \CWM\BroadWorksConnector\Ocip\Models\GETSNumberType|null
     */
    protected $type = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11018
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GETSNumberType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GETSNumberType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\GETSNumberType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

