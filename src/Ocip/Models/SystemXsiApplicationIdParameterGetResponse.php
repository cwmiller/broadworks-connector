<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdParameterGetResponse
 *
 * Response to SystemXsiApplictionIdParameterGetRequest.
 *         Contains the Xsi application id system parameters.
 *
 * @see SystemXsiApplictionIdParameterGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19723","type":"sequence"}]
 */
class SystemXsiApplicationIdParameterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName screenXsiApplicationId
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:19723
     * @var bool|null
     */
    protected $screenXsiApplicationId = null;

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

