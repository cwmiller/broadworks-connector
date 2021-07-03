<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdAddListRequest
 *
 * Add the system Xsi application Id entries.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19311","type":"sequence"}]
 */
class SystemXsiApplicationIdAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsiApplicationIdEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiApplicationIdEntry
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19311
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiApplicationIdEntry[]
     */
    private $xsiApplicationIdEntry = array(
        
    );

    /**
     * Getter for xsiApplicationIdEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiApplicationIdEntry[]
     */
    public function getXsiApplicationIdEntry()
    {
        return $this->xsiApplicationIdEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiApplicationIdEntry;
    }

    /**
     * Setter for xsiApplicationIdEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiApplicationIdEntry[] $xsiApplicationIdEntry
     * @return $this
     */
    public function setXsiApplicationIdEntry(array $xsiApplicationIdEntry)
    {
        $this->xsiApplicationIdEntry = $xsiApplicationIdEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiApplicationIdEntry()
    {
        $this->xsiApplicationIdEntry = null;
        return $this;
    }

    /**
     * Adder for xsiApplicationIdEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiApplicationIdEntry $xsiApplicationIdEntry
     * @return $this
     */
    public function addXsiApplicationIdEntry($xsiApplicationIdEntry)
    {
        $this->xsiApplicationIdEntry[] = $xsiApplicationIdEntry;
        return $this;
    }


}

