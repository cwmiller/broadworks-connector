<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialableCallerIDCriteriaGetRequest
 *
 * Get an existing Dialable Caller ID Criteria.
 *         The response is either a
 *         SystemDialableCallerIDCriteriaGetRequest or an ErrorResponse.
 */
class SystemDialableCallerIDCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

