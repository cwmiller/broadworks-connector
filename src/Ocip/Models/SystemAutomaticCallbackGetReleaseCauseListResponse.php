<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetReleaseCauseListResponse
 *
 * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName releaseCause
     * @var string[]
     */
    private $releaseCause = array(
        
    );

    /**
     * Getter for releaseCause
     *
     * @ElementName releaseCause
     * @return string[]
     */
    public function getReleaseCause()
    {
        return $this->releaseCause;
    }

    /**
     * Setter for releaseCause
     *
     * @ElementName releaseCause
     * @param string[] $releaseCause
     * @return $this
     */
    public function setReleaseCause($releaseCause)
    {
        $this->releaseCause = $releaseCause;
        return $this;
    }

    /**
     * Adder for releaseCause
     *
     * @ElementName releaseCause
     * @param string $releaseCause
     * @return $this
     */
    public function addReleaseCause($releaseCause)
    {
        $this->releaseCause []= $releaseCause;
        return $this;
    }


}

