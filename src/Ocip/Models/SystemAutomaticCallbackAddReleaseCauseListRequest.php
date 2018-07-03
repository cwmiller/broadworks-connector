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
 */
class SystemAutomaticCallbackAddReleaseCauseListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

