<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdParameterGetResponse
 *
 * Response to SystemXsiApplictionIdParameterGetRequest.
 *         Contains the Xsi application id system parameters.
 *
 * @see SystemXsiApplictionIdParameterGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19409","type":"sequence"}]
 */
class SystemXsiApplicationIdParameterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName screenXsiApplicationId
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19409
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

