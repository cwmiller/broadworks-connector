<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringGetResponse
 *
 * Response to SystemCommunicationBarringGetRequest.
 *         
 *         Replaced by: SystemCommunicationBarringGetResponse21sp1 in AS data mode.
 *
 * @see SystemCommunicationBarringGetRequest
 * @see SystemCommunicationBarringGetResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6391","type":"sequence"}]
 */
class SystemCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:6391
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * Getter for directTransferScreening
     *
     * @return bool
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @param bool $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectTransferScreening()
    {
        $this->directTransferScreening = null;
        return $this;
    }


}

