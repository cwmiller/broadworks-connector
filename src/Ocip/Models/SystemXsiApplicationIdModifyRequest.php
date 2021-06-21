<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdModifyRequest
 *
 * Modify the system Xsi applicaiton Id description.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19378","type":"sequence"}]
 */
class SystemXsiApplicationIdModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsiApplicationId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19378
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $xsiApplicationId = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19378
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for xsiApplicationId
     *
     * @return string
     */
    public function getXsiApplicationId()
    {
        return $this->xsiApplicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiApplicationId;
    }

    /**
     * Setter for xsiApplicationId
     *
     * @param string $xsiApplicationId
     * @return $this
     */
    public function setXsiApplicationId($xsiApplicationId)
    {
        $this->xsiApplicationId = $xsiApplicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiApplicationId()
    {
        $this->xsiApplicationId = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

