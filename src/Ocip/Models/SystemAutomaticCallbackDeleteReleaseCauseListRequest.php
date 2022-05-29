<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackDeleteReleaseCauseListRequest
 *
 * Deletes automatic callback release causes from the release cause attribute.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e8188f390ad4fcfad616cb409dd0e896:62","type":"sequence"}]
 */
class SystemAutomaticCallbackDeleteReleaseCauseListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName releaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause
     * @Array
     * @Optional
     * @Group e8188f390ad4fcfad616cb409dd0e896:62
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    protected $releaseCause = array(
        
    );

    /**
     * Getter for releaseCause
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    public function getReleaseCause()
    {
        return $this->releaseCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->releaseCause;
    }

    /**
     * Setter for releaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[] $releaseCause
     * @return $this
     */
    public function setReleaseCause(array $releaseCause)
    {
        $this->releaseCause = $releaseCause;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReleaseCause()
    {
        $this->releaseCause = null;
        return $this;
    }

    /**
     * Adder for releaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause $releaseCause
     * @return $this
     */
    public function addReleaseCause($releaseCause)
    {
        $this->releaseCause[] = $releaseCause;
        return $this;
    }


}

