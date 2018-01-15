<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringModifyRequest
 *
 * Modify the system level data associated with Communication Barring.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName directTransferScreening
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * Getter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @return bool|null
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @param bool|null $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }


}

