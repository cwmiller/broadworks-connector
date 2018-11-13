<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaGetRequest19sp1
 *
 * Get an existing Communication Barring Criteria.
 *         The response is either a
 *         SystemCommunicationBarringCriteriaGetResponse19sp1 or an ErrorResponse.
 *
 * @see SystemCommunicationBarringCriteriaGetResponse19sp1
 * @see ErrorResponse
 */
class SystemCommunicationBarringCriteriaGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

