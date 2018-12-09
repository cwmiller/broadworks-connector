<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetReleaseCauseListResponse
 *
 * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 *
 * @see SystemAutomaticCallbackGetReleaseCauseListRequest
 * @Groups [{"id":"3cba5f323319ae2171c7c634ba1811e2:91","type":"sequence"}]
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName releaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause
     * @Array
     * @Optional
     * @Group 3cba5f323319ae2171c7c634ba1811e2:91
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutomaticCallbackReleaseCause[]
     */
    private $releaseCause = array(
        
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

