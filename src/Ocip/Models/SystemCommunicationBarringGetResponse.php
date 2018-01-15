<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringGetResponse
 *
 * Response to SystemCommunicationBarringGetRequest.
 */
class SystemCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

