<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetIncomingCriteriaUsageListRequest
 *
 * Get the list of Communication Barring Proifles that uses a specific
 *         Communication Barring Incoming criteria.
 *         The response is either a
 * SystemCommunicationBarringProfileGetIncomingCriteriaUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemCommunicationBarringProfileGetIncomingCriteriaUsageListResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringProfileGetIncomingCriteriaUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

