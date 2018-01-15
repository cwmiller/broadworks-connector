<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaGetRequest17
 *
 * Get an existing Communication Barring Criteria.
 *         The response is either a
 *         SystemCommunicationBarringCriteriaGetResponse17 or an ErrorResponse.
 */
class SystemCommunicationBarringCriteriaGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

