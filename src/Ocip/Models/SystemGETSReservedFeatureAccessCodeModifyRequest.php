<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSReservedFeatureAccessCodeModifyRequest
 *
 * Modify a GETS reserved FAC.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSReservedFeatureAccessCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName code
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName newCode
     * @var string|null
     */
    private $newCode = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for code
     *
     * @ElementName code
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter for code
     *
     * @ElementName code
     * @param string|null $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Getter for newCode
     *
     * @ElementName newCode
     * @return string|null
     */
    public function getNewCode()
    {
        return $this->newCode;
    }

    /**
     * Setter for newCode
     *
     * @ElementName newCode
     * @param string|null $newCode
     * @return $this
     */
    public function setNewCode($newCode)
    {
        $this->newCode = $newCode;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

