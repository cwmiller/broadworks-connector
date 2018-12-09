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
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:3217","type":"sequence"}]
 */
class SystemCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:3217
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

