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
 */
class SystemAutomaticCallbackDeleteReleaseCauseListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName releaseCause
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    private $releaseCause = array(
        
    );

    /**
     * Getter for releaseCause
     *
     * @ElementName releaseCause
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    public function getReleaseCause()
    {
        return $this->releaseCause;
    }

    /**
     * Setter for releaseCause
     *
     * @ElementName releaseCause
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[] $releaseCause
     * @return $this
     */
    public function setReleaseCause(array $releaseCause)
    {
        $this->releaseCause = $releaseCause;
        return $this;
    }

    /**
     * Adder for releaseCause
     *
     * @ElementName releaseCause
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause $releaseCause
     * @return $this
     */
    public function addReleaseCause($releaseCause)
    {
        $this->releaseCause []= $releaseCause;
        return $this;
    }


}

