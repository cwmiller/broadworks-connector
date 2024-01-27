<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackAddReleaseCauseListRequest
 *
 * Adds automatic callback release cause to the releaseCause attribute.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6e1812074dca6af91b3958d73ab352fc:46","type":"sequence"}]
 */
class SystemAutomaticCallbackAddReleaseCauseListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName releaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause
     * @Array
     * @Optional
     * @Group 6e1812074dca6af91b3958d73ab352fc:46
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    protected $releaseCause = [
        
    ];

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

