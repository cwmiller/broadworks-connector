<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdParameterModifyRequest
 *
 * Request to modify Xsi application system parameter.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19420","type":"sequence"}]
 */
class SystemXsiApplicationIdParameterModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName screenXsiApplicationId
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19420
     * @var bool|null
     */
    private $screenXsiApplicationId = null;

    /**
     * Getter for screenXsiApplicationId
     *
     * @return bool
     */
    public function getScreenXsiApplicationId()
    {
        return $this->screenXsiApplicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screenXsiApplicationId;
    }

    /**
     * Setter for screenXsiApplicationId
     *
     * @param bool $screenXsiApplicationId
     * @return $this
     */
    public function setScreenXsiApplicationId($screenXsiApplicationId)
    {
        $this->screenXsiApplicationId = $screenXsiApplicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreenXsiApplicationId()
    {
        $this->screenXsiApplicationId = null;
        return $this;
    }


}

